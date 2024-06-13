<?php

namespace App\Services;

use App\Models\Proxy;
use GuzzleHttp\Client;

class ProxyService
{
    public function __construct()
    {

    }

    public function determineProxy($request, $port = null)
    {
        $proxyInfo = Proxy::where('port_access', $port)->first();

        if (empty($proxyInfo))
            return false;

        // Tạo client Guzzle với proxy được cấu hình
        $client = new Client([
            'proxy' => $proxyInfo->ip,
        ]);

        // Gửi yêu cầu từ client tới proxy
        $response = $client->request($request->method(), $request->fullUrl(), [
            'headers' => $request->header(),
            'body'    => $request->getContent(),
        ]);

        // Trả về kết quả từ proxy cho client
        return response($response->getBody()->getContents(), $response->getStatusCode())
            ->withHeaders($response->getHeaders());
    }
}

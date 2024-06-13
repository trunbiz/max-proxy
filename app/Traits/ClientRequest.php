<?php

namespace App\Traits;
use App\Services\CommonService;
use GuzzleHttp\Client;
trait ClientRequest
{
    public function callProxyRequest(string $method, string $url, array $headers = [], array $params = [], $multipart = false, $contentType = 'form-data', $proxy = null)
    {
        $client = new Client([
            'proxy' => $proxy,
        ]);
        $data = [
            'http_errors' => false,
            'verify' => false,
            'headers' => $headers,
            'timeout' => 10,
        ];

        if (strtoupper($method) == 'GET') {
            $data['query'] = $params;
        } else {
            if ($multipart) {
                $data['multipart'] = $params;
            } elseif ($contentType == 'json') {
                $data['json'] = $params;
            } else {
                $data['form_params'] = $params;
            }
        }

        try {
            $response = $client->request($method, $url, $data);
            return response($response->getBody()->getContents(), $response->getStatusCode(), $response->getHeaders());
        } catch (\Exception $e) {
            return [
                'success' => false,
                'message' => $e->getMessage() ?? 'Request api error'
            ];
        }
    }

    public function callClientRequest(string $method, string $url, array $headers = [], array $params = [], $multipart = false, $contentType = 'form-data')
    {
        $client = new Client();
        $method = strtoupper($method);
        $data = [
            'http_errors' => false,
            'verify' => false,
            'headers' => $headers,
            'timeout' => 10,
        ];

        if ($method == 'GET') {
            $data['query'] = $params;
        } else {
            if ($multipart) {
                $data['multipart'] = $params;
            } elseif ($contentType == 'json') {
                $data['json'] = $params;
            } else {
                $data['form_params'] = $params;
            }
        }

        try{
            $response = $client->request($method, $url, $data);
            $data = json_decode($response->getBody()->getContents());

            if ($response->getStatusCode() != CommonService::REQUEST_SUCCESS)
            {
                return [
                    'success' => false,
                    'message' => 'Request api error',
                    'data' => $data ?? []
                ];
            }
            return [
                'success' => true,
                'message' => 'Request api success',
                'data' => $data,
                'extraData' => $response,
                'responseBody' => $response->getBody(),
                'responseHeaders' => $response->getHeaders(),
                'detailRequest' => [
                    'url' => $url,
                    'params' => $params
                ]
            ];
        }catch (\Exception $e)
        {
            return [
                'success' => false,
                'message' => $e->getMessage() ?? 'Request api error'
            ];
        }
    }
}

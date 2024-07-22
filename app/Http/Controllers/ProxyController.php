<?php

namespace App\Http\Controllers;

use App\Models\Proxy;
use App\Services\ProxyService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProxyController extends Controller
{
    //

    public $proxyService;
    public function __construct()
    {
        $this->proxyService = new ProxyService();
    }

    public function index(Request $request)
    {
//        $data['items'] = Proxy::orderBy('id', 'DESC')->get();
//        $data = [
//            ['30001', '3.90.109.104:10000', '*.24h.com *.tiktok.com, '],
//            ['30002', '3.90.109.104:10000'],
//            ['30003', '3.90.109.104:10000'],
//            ['30004', '3.90.109.104:10000'],
//            ['30005', '3.90.109.104:10000'],
//        ];
//        return returnApi(true, 'get proxy success', $data);
    }

    public function getDataProxy(Request $request)
    {
//        $data['items'] = Proxy::orderBy('id', 'DESC')->get();
        $data = [
            ['30001', '3.90.109.104:10000', '*.24h.com *.tiktok.com fb.com'],
            ['30002', '3.90.109.104:10001'],
            ['30003', '3.90.109.104:10002'],
            ['30004', '3.90.109.104:10003'],
            ['30005', '3.90.109.104:10004'],
        ];
        return returnApi(true, 'get proxy success', $data);
    }

    public function store(Request $request)
    {
        $request = $request->all();
        $proxy = $request['proxy'] ?? null;

        if (empty($proxy))
            return back();

        Proxy::create([
           'user_id' => 1,
            'ip' => $proxy,
        ]);
        return back();
    }

    public function determineProxy(Request $request)
    {
        $port = $_SERVER['LARAVEL_PORT'] ?? null;

        Log::info('log request', [
            $request->all(),
            $port
        ]);

        return $this->proxyService->determineProxy($request, $port);
    }
}

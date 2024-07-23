<?php

namespace App\Http\Controllers;

use App\Models\Proxy;
use App\Services\ProxyService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ProxyController extends Controller
{
    //

    public $proxyService;
    const IP_SERVER = '13.215.75.125';
    public function __construct()
    {
        $this->proxyService = new ProxyService();
    }

    public function index(Request $request)
    {
        $data['ipServer'] = self::IP_SERVER;
        $data['proxys'] = Proxy::orderBy('id', 'DESC')->get();
        return view('client.proxy', $data);
    }

    public function getDataProxy(Request $request)
    {
        $proxys = Proxy::orderBy('id', 'DESC')->get();
        $data = [];
        foreach ($proxys as $item)
        {
            $data[] = [
                (string)$item->port_access,
                $item->ip,
                str_replace(',', ' ', !empty($item->include) ? $item->include : '')
            ];
        }
        return returnApi(true, 'get proxy success', $data);
    }

    public function store(Request $request)
    {
        $request = $request->all();
        $proxy = $request['proxy'] ?? null;

        if (empty($proxy))
            return back();

        $port_access =  30000;
        $proxyLast = Proxy::orderBy('id', 'DESC')->first();
        if (!empty($proxyLast))
            $port_access = $proxyLast->port_access + 1;


        Proxy::create([
           'user_id' => Auth::user()->id,
            'ip' => $proxy,
            'port_access' =>$port_access,
            'include' =>  str_replace(' ', '', $request['includeUrl'] ?? '')
        ]);
        return back();
    }

    public function deleteProxy(Request $request)
    {
        $request = $request->all();
        $id = $request['id'];
        Proxy::destroy($id);
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

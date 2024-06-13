<?php

namespace App\Http\Controllers;

use App\Models\Proxy;
use App\Services\ProxyService;
use Illuminate\Http\Request;

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
        $data['items'] = Proxy::orderBy('id', 'DESC')->get();
        return view('client.index', $data);
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

        return $this->proxyService->determineProxy($request, $port);
    }
}

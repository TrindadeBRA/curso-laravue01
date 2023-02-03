<?php

namespace App\Http\Middleware;

use App\Models\LogAcesso;
use Closure;
use Illuminate\Http\Request;

class LogAcessoMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // dd($request);

        $ip = $request->server->get('REMOTE_ADDR');
        $rota = $request->getRequestUri();
        
        LogAcesso::create([
            'log' => "IP " . $ip . " requisitou rota " . $rota
        ]);

        return $next($request);

        // $resposta = $next($request);

        // dd($resposta);
        

    }
}

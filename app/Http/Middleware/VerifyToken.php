<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VerifyToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        $providedToken = $request->header('X-Api-Token'); // Substitua 'X-Api-Token' pelo nome do header que você usará

        $validToken = 'UZUmo1RdL2KjfTyT+/9otvHy+U6NUO1abq5epRd91dE='; // Substitua pela chave de token que você deseja usar

        if ($providedToken !== $validToken) 
        {
            return response()->json(['message' => 'Acesso não autorizado.'], 401);
        }

        return $next($request);
    }
}

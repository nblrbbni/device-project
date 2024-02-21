<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Periksa apakah pengguna memiliki peran admin
        if ($request->user() && $request->user()->email == 'login@admin.com') {
            return $next($request);
        }

        // Redirect atau berikan respons lain jika pengguna tidak diizinkan
        return redirect('/')->with('error', 'Anda tidak memiliki izin untuk mengakses halaman ini.');
    }
}

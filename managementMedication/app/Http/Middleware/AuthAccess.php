<?php

namespace App\Http\Middleware;

use App\Models\Role;
use App\Models\userRole;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $roleUser)
    {
        $role = Role::where('role', $roleUser)->first();

        if (UserRole::where('user_id', Auth::id())->where('role_id', $role->id)->first() != NULL) {
            return $next($request);
        }
        abort(404);

    }
}

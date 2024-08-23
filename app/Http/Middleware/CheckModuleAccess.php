<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckModuleAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $module)
    {
        // Check if the user is a Superadmin
        if ($request->user()->isSuperadmin()) {
            return $next($request);
        }

        // For GeneralAdmin, check access against UserModule using module_id
        if (!$request->user()->hasModuleAccess($module)) {
            return redirect()->route('wbxadmin')->with('error', 'You do not have access to this module.');
        }
        return $next($request);
    }
}

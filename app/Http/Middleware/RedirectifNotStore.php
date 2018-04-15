<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfNotStore
{
    /**
     * define guard
     * @var object
     */
    protected $guard;

    /**
     * constructor
     */
    public function __construct()
    {
        $this->guard = Auth::guard('is_store');
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($this->guard->check() || $this->guard->viaRemember()) {
            $is_store = $this->guard->user();
            view()->share('is_store', $is_store);
            view()->share('currentRoute', $request->route()->getName());
            $request->is_store = $is_store;
            return $next($request);
        }
        return redirect()->route('store.login');
    }}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfNotAdmin
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
        $this->guard = Auth::guard('admin');
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
            $admin = $this->guard->user();
            view()->share('admin', $admin);
            view()->share('currentRoute', $request->route()->getName());
            $request->admin = $admin;
            return $next($request);
        }
        return redirect()->route('admin.login')->withErrors(['message' => __('message.login_note')]);
    }}

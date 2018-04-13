<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Province;
use App\Models\Store;
class RegisterStoreController extends Controller
{
    public function __construct(Province $province, Store $store)
    {
        $this->Province = $province;
        $this->Store = $store;
    }
    /*
     * action get view register store
     * @return view
     */
    public function register()
    {
        $province = $this->Province->all();
        return view('front.store.register', compact('province'));
    }
    /*
     * action post register store
     * @return redirect
     */
    public function postRegister(Request $req)
    {
        $data = $req->only($this->Store->getFieldList());
        dd($data);
    }
}

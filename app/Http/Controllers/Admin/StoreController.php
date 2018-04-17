<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Store;
class StoreController extends Controller
{
	public function __construct(Store $store)
	{
		$this->Store = $store;
	}
    public function index()
    {
    	$store = $this->Store->orderBy('id', 'desc')->get();
        return view('admin.store.index', compact('store'));
    }

    public function detailStore($id)
    {
    	$store = $this->Store->find($id);
    	return view('admin.store.detail', compact('store'));
    }


    public function delete($id)
    {
    	$store = $this->Store->find($id);
    	$store->delete();
    	return redirect()->back()->with('message', 'Xóa thành công');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Album;
class Product extends AbstractModel
{
    protected $fillable = [
        'name',
        'slug',
        'category_id',
        'admin_id',
        'store_id',
        'image',
        'album',
        'price',
        'price_old',
        'is_highlight',
        'active',
        'des',
        'content',
        'properties',
        'title',
        'description',
        'keyword'
    ];


    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id', 'id');
    }
    /*
     * get all product orderBy('id', 'desc')
     */
    public function getAllProduct()
    {
        $query = $this->select('name', 'slug', 'image', 'is_highlight', 'id','active','category_id')
            ->orderBy('id', 'desc')
            ->where('admin_id',1)
            ->get();
        return $query;
    }

    public function getDetail($id)
    {
        $result = $this->select('*')->where('id', $id)->first();
        return $result;
    }

    public function getAlbum($productId)
    {
        $albums = Album::where('product_id', $productId)->get();
        return $albums;
    }
}

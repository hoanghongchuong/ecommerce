<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends AbstractModel
{
    protected $fillable = [
        'name',
        'slug',
        'category_id',
        'author',
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
    /*
     * get all product orderBy('id', 'desc')
     */
    public function getAllProduct()
    {
        $query = $this->select('name', 'slug', 'image', 'is_highlight', 'id','active','category_id')
            ->orderBy('id', 'desc')
            ->get();
        return $query;
    }

    public function getDetail($id)
    {
        $result = $this->select('*')->where('id', $id)->first();
        return $result;
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends AbstractModel
{
    protected $fillable = [
        'name',
        'parent_id',
        'admin_id',
        'slug',
        'image',
        'is_highlight',
        'active',
        'description',
        'title',
        'keyword'
    ];

    /*
     * get list category
     * return object
     */
    public function getAllCategories()
    {
        $query = $this->select('name', 'parent_id', 'slug', 'image', 'is_highlight', 'id','active')
                ->orderBy('id', 'desc')
                ->get();
        return $query;
    }

}

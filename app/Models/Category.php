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
    /*
     * get category width parent_id = 0
     */
    public function getRootCategory()
    {
        $data = $this->select('name', 'id', 'slug', 'active')
                ->where('parent_id', 0)
                ->orderBy('id', 'asc')
                ->get();
        return $data;
    }
    public function getProductsAttribute()
    {
        $categoryIdArray = $this->getChildCategories([$this->id]);
        return \App\Models\Products::whereIn('category_id', $categoryIdArray)->paginate(8);
    }


    protected function getChildCategories($categoryArray = [])
    {
        $childIdArray = Category::select('id')->whereIn('parent_id', $categoryArray)->whereNotIn('id', $categoryArray)
            ->get()->pluck('id')->toArray();
        if (!count($childIdArray)) {
            return $categoryArray;
        }
        $categoryArray = array_merge($categoryArray, $childIdArray);
        return $this->getChildCategories($categoryArray);
    }
}

<?php

namespace App\Repositories;

use App\Models\Category;
use Illuminate\Support\Facades\Gate;

class CategoryRepository
{
    public function all()
    {
        return Category::all();
    }

    public function find($id)
    {
        return Category::find($id);
    }

    public function store($request)
    {
        $categories = Category::create([
            'category_name' => $request->data_first_sub_cate_name,
            'Slug'=>$request->data_first_sub_cate_slug,

        ]);
        $categories = Category::create([
            'category_name' => $request->data_sec_sub_cate_name,
            'Slug'=>$request->data_sec_sub_cate_slug,
        ]);
        $lastInsertID = $categories->id;
        return $lastInsertID ;
    }
    

}

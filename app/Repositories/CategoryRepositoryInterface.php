<?php

namespace App\Repositories;

use App\Interfaces\BaseInterface;
use App\Models\Category;
use App\Traits\UploadImage;

class CategoryRepositoryInterface implements BaseInterface
{
    use UploadImage;
    public function index($request = null)
    {
        return Category::paginate(20);
    }
    public function show($id)
    {
    }
    public function create()
    {
    }
    public function store($request)
    {
        return Category::create($request);
    }
    public function edit($id)
    {
    }
    public function update($request, $id)
    {
        $category = Category::findOrFail($id)->update($request);
        return $category;
    }
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $this->deleteImage($category->image);
        return $category->delete();
    }
}
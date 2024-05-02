<?php

namespace App\Repositories;

use App\Interfaces\BaseInterface;
use App\Models\Advertisement;
use App\Models\Category;
use App\Traits\UploadImage;

class AdvertisementFrontRepositoryInterface implements BaseInterface
{
    public function index($request = null)
    {
        return Advertisement::latest()->paginate(20);
    }
    public function show($id)
    {
        return Advertisement::findOrFail($id);
    }
    public function create()
    {
        $categories = Category::get();
        return $categories;
    }
    public function store($request)
    {
        return auth()->user()->advertisement()->create($request);
    }
    public function edit($id)
    {
    }
    public function update($request, $id)
    {
    }
    public function destroy($id)
    {
        $advertisement = Advertisement::findOrFail($id);
        // $this->deleteImage($advertisement->image);
        return $advertisement->delete();
    }
}

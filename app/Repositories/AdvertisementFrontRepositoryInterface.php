<?php

namespace App\Repositories;

use App\Interfaces\BaseInterface;
use App\Models\Advertisement;
use App\Models\Category;
use App\Traits\UploadImage;

class AdvertisementFrontRepositoryInterface implements BaseInterface
{
    public function index($request)
    {
        $advertisements = Advertisement::orWhere(function ($query) use ($request) {
            if ($request->has('address')) {
                $query->where('address', 'like', '%' . $request->address . '%');
            }
        })->orWhere(function ($query) use ($request) {
            if ($request->has('name')) {
                $query->where('name', 'like', '%' . $request->name . '%');
            }
        })
            ->orWhere(function ($query) use ($request) {
                if ($request->has('category_id')) {
                    $query->where('category_id', $request->category_id);
                }
            })->orWhere(function ($query) use ($request) {
                if ($request->has('type')) {
                    $query->where('type', $request->type);
                }
            })->orWhere(function ($query) use ($request) {
                if ($request->has('price')) {
                    $query->where('price', $request->price);
                }
            })->paginate(30);
        $categories = Category::all();
        return ['categories' => $categories, 'advertisements' => $advertisements];
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

<?php

namespace App\Repositories;

use App\Interfaces\BaseInterface;
use App\Models\Advertisement;
use App\Traits\UploadImage;

class AdvertisementRepositoryInterface implements BaseInterface
{
    use UploadImage;
    public function index($request = null)
    {
        return Advertisement::paginate(30);
    }
    public function show($id)
    {
        return Advertisement::findOrFail($id);
    }
    public function create()
    {
    }
    public function store($request)
    {
    }
    public function edit($id)
    {
    }
    public function update($request, $id)
    {
        $advertisement = Advertisement::findOrFail($id);
        $advertisement->update($request);
        return $advertisement;
    }
    public function destroy($id)
    {
        $advertisement = Advertisement::findOrFail($id);
        $this->deleteImage($advertisement->image);
        return $advertisement->delete();
    }
}

<?php

namespace App\Repositories;

use App\Interfaces\BaseInterface;
use App\Models\Advertisement;
use App\Models\User;
use App\Traits\UploadImage;

class UserRepositoryInterface implements BaseInterface
{
    use UploadImage;
    public function index($request = null)
    {
        return User::paginate(30);
    }
    public function show($id)
    {
        return User::findOrFail($id);
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
        $user = User::findOrFail($id);
        $user->update($request);
        return $user;
    }
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        if (!str_contains($user->image, 'user.png')) {
            $this->deleteImage($user->image);
        }
        return $user->delete();
    }
}
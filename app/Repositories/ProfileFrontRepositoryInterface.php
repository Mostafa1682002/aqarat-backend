<?php

namespace App\Repositories;

use App\Interfaces\BaseInterface;
use App\Models\User;

class ProfileFrontRepositoryInterface implements BaseInterface
{
    public function index($request = null)
    {
        return auth()->user();
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
        $user = auth()->user();
        $user->update($request);
        return $user;
    }
    public function destroy($id)
    {
    }
}

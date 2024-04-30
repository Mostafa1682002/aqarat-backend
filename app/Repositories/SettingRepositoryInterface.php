<?php

namespace App\Repositories;

use App\Interfaces\BaseInterface;
use App\Models\Setting;

class SettingRepositoryInterface implements BaseInterface
{
    public function index($request = null)
    {
        return Setting::first();
    }
    public function show($id)
    {
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
        $setting = Setting::first();
        $setting->update($request);
        return $setting;
    }
    public function destroy($id)
    {
    }
}
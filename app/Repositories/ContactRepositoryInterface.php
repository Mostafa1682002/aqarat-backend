<?php

namespace App\Repositories;

use App\Interfaces\BaseInterface;
use App\Models\Contact;

class ContactRepositoryInterface implements BaseInterface
{
    public function index($request = null)
    {
        return Contact::paginate(30);
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
    }
    public function destroy($id)
    {
        return Contact::findOrFail($id)->delete();
    }
}
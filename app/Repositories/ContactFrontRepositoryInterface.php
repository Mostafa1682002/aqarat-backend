<?php

namespace App\Repositories;

use App\Interfaces\BaseInterface;
use App\Models\Contact;

class ContactFrontRepositoryInterface implements BaseInterface
{
    public function index($request = null)
    {
    }
    public function show($id)
    {
    }
    public function create()
    {
    }
    public function store($request)
    {
        return Contact::create($request);
    }
    public function edit($id)
    {
    }
    public function update($request, $id)
    {
    }
    public function destroy($id)
    {
    }
}

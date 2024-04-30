<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Advertisement;
use App\Models\Category;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $contacts = Contact::latest()->paginate(5);
        $users = User::latest()->paginate(5);
        $advertisements = Advertisement::latest()->paginate(5);
        $categories = Category::latest()->paginate(5);
        return view('Admin.home', compact('contacts', 'users', 'advertisements', 'categories'));
    }
}
<?php

namespace App\Http\Controllers;

use App\Repositories\ContactFrontRepositoryInterface;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    protected $contactRepository;
    public function __construct(ContactFrontRepositoryInterface $contact)
    {
        $this->contactRepository = $contact;
    }

    public function index()
    {
        return view('Front.contact');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => "required|string|max:255",
            'email' => "required|email|max:255",
            'object' => "required|string",
            'message' => "required|string"
        ]);
        $contact = $this->contactRepository->store($request->all());
        if ($contact) {
            return redirect()->back()->with('success', 'تم  الارسال  بنجاح');
        }
        return redirect()->back()->with('error', 'حدث خطا ما برجاء التاكد من صحة البيانات');
    }
}

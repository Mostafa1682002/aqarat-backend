<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\UserRepositoryInterface;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userRepository;
    public function __construct(UserRepositoryInterface $user)
    {
        $this->userRepository = $user;
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = $this->userRepository->index();
        return view('Admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            ['status' => "required|boolean"]
        );
        $user = $this->userRepository->update($request->only('status'), $id);
        if ($user) {
            return redirect()->back()->with('success', 'تم تعديل حالة المستخدم بنجاح');
        }
        return redirect()->back()->with('error', 'حدث خطا ما برجاء التاكد من صحة البيانات');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = $this->userRepository->destroy($id);
        if ($user) {
            return redirect()->back()->with('success', 'تم حذف المستخدم بنجاح');
        }
        return redirect()->back()->with('error', 'حدث خطا ما برجاء التاكد من صحة البيانات');
    }
}
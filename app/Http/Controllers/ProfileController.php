<?php

namespace App\Http\Controllers;

use App\Repositories\ProfileFrontRepositoryInterface;
use App\Traits\UploadImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    use UploadImage;
    protected $profileRepository;
    public function __construct(ProfileFrontRepositoryInterface $profileRepo)
    {
        $this->profileRepository = $profileRepo;
        $this->middleware('auth');
    }

    public function index()
    {
        $profile = $this->profileRepository->index();
        return view('Front.auth.profile', compact('profile'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $id],
            'phone' => ['required', 'string', 'max:20', 'unique:users,phone,' . $id],
            'image' => "nullable|image|mimes:jpeg,png,jpg,gif|max:5000",
        ]);
        $profile = $this->profileRepository->index();
        $data = $request->except('image');
        if ($request->hasFile('image') && $request->image != null) {
            if (!str_contains($profile->image, 'user.png')) {
                $this->deleteImage($profile->image);
            }
            $imageName = $this->saveImage($request->image, 'users');
            $data['image'] = 'uploads/users/' . $imageName;
        }
        $profileUpdate = $this->profileRepository->update($data, $id);
        if ($profileUpdate) {
            return redirect()->back()->with('success', 'تم  تعديل البيانات بنجاح');
        }
        return redirect()->back()->with('error', 'حدث خطا ما برجاء التاكد من صحة البيانات');
    }


    public function passwordForm()
    {
        $profile = $this->profileRepository->index();
        return view('Front.auth.passwords.change-password', compact('profile'));
    }

    public function password(Request $request, $id)
    {
        $request->validate([
            'old_password' => ['required', 'string'],
            'password' => ['required', 'string', 'min:5', 'confirmed'],
        ], [], ['old_password' => 'كلمة المرور القديمه']);
        $data = [];
        if (Hash::check($request->old_password, auth()->user()->password)) {
            $data['password'] = bcrypt($request->password);
            $profileUpdate = $this->profileRepository->update($data, 0);
            if ($profileUpdate) {
                return redirect()->back()->with('success', 'تم   تحديث كلمة المرور بنجاح');
            }
        } else {
            return redirect()->back()->with('error', 'كلمة المرور غير صحيحه');
        }
    }
}

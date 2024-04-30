<?php

namespace App\Http\Controllers\Admin;

use App\Traits\UploadImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Repositories\SettingRepositoryInterface;

class SettingController extends Controller
{
    use UploadImage;
    protected $settingRepository;
    public function __construct(SettingRepositoryInterface $setting)
    {
        $this->settingRepository = $setting;
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $setting = $this->settingRepository->index();
        return view('Admin.settings', compact('setting'));
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
            [
                'logo' => "nullable|image|mimes:jpeg,png,jpg,gif|max:5000",
                'first_about_us' => "required|string",
                'second_about_us' => "required|string",
                'f_link' => "nullable|url",
                't_link' => "nullable|url",
                's_link' => "nullable|url",
                'i_link' => "nullable|url",
            ]
        );
        $data = $request->except('logo');
        if ($request->hasFile('logo') && $request->logo != null) {
            $this->deleteImage(Setting::find($id)->logo);
            $nameImage = $this->saveImage($request->logo, 'settings');
            $data['logo'] = 'uploads/' . $nameImage;
        }
        $setting = $this->settingRepository->update($data, $id);
        if ($setting) {
            return redirect()->back()->with('success', 'تم تعديل البيانات بنجاح');
        }
        return redirect()->back()->with('error', 'حدث خطا ما برجاء التاكد من صحة البيانات');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
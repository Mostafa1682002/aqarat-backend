<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Category;
use App\Repositories\CategoryRepositoryInterface;
use App\Traits\UploadImage;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    use UploadImage;
    protected $categoryRepository;
    public function __construct(CategoryRepositoryInterface $categoty)
    {
        $this->categoryRepository = $categoty;
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = $this->categoryRepository->index();
        return view('Admin.categories', compact('categories'));
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
        $request->validate([
            'name' => "required|unique:categories,name",
            'image' => "required|image|mimes:jpeg,png,jpg,gif|max:5000"
        ]);
        $data = $request->only('name');
        $imageName = $this->saveImage($request->file('image'), 'categories');
        $data['image'] = "uploads/categories/" . $imageName;
        $category = $this->categoryRepository->store($data);
        if ($category) {
            return redirect()->back()->with('success', 'تم اضافة القسم بنجاح');
        }
        return redirect()->back()->with('error', 'حدث خطا ما برجاء التاكد من صحة البيانات');
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
        $request->validate([
            'name' => "required|unique:categories,name,$id",
            'image' => "nullable|image|mimes:jpeg,png,jpg,gif|max:5000"
        ]);
        $data = $request->only('name');
        if ($request->hasFile('image') && $request->image != null) {
            //Delete Old Image
            $this->deleteImage(Category::findOrFail($id)->image);
            //Save New Image
            $imageName = $this->saveImage($request->file('image'), 'categories');
            $data['image'] = "uploads/categories/" . $imageName;
        }
        $category = $this->categoryRepository->update($data, $id);
        if ($category) {
            return redirect()->back()->with('success', 'تم تعديل القسم بنجاح');
        }
        return redirect()->back()->with('error', 'حدث خطا ما برجاء التاكد من صحة البيانات');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = $this->categoryRepository->destroy($id);
        if ($category) {
            return redirect()->back()->with('success', 'تم حذف القسم بنجاح');
        }
        return redirect()->back()->with('error', 'حدث خطا ما برجاء التاكد من صحة البيانات');
    }
}
<?php

namespace App\Http\Controllers;

use App\Repositories\AdvertisementFrontRepositoryInterface;
use App\Traits\UploadImage;
use Illuminate\Http\Request;

class AdvertisementController extends Controller
{
    use UploadImage;
    protected $advertisementRepository;
    public function __construct(AdvertisementFrontRepositoryInterface $advertisement)
    {
        $this->advertisementRepository = $advertisement;
        $this->middleware('auth')->except('index', 'show');
    }
    public function index(Request $request)
    {
        $data = $this->advertisementRepository->index($request);
        $advertisements = $data['advertisements'];
        $categories = $data['categories'];
        return view('Front.advertisements', compact('advertisements', 'categories'));
    }
    public function show($id)
    {
        $advertisement = $this->advertisementRepository->show($id);
        return view('Front.advertisement-details', compact('advertisement'));
    }
    public function create()
    {
        $categories = $this->advertisementRepository->create();
        return view('Front.add-advertisement', compact('categories'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => "required|string|max:255",
            'price' => "required|numeric",
            'phone' => "required|string|max:20",
            'address' => "required|string|max:255",
            'category_id' => "required|exists:categories,id",
            'number_rooms' => "required|integer",
            'number_floors' => "required|integer",
            'number_kitchens' => "required|integer",
            'number_halls' => "required|integer",
            'elevator' => "required|boolean",
            'furnished' => "required|boolean",
            'image' => "required|image|mimes:jpeg,png,jpg,gif|max:5000",
            'description' => "required|string",
        ]);
        $data = $request->except('image');
        $image = $this->saveImage($request->image, 'advertisements');
        $data['image'] = "uploads/advertisements/" . $image;
        $advertisement = $this->advertisementRepository->store($data);
        if ($advertisement) {
            return redirect()->back()->with('success', 'تم  اصافه الاعلان  بنجاح');
        }
        return redirect()->back()->with('error', 'حدث خطا ما برجاء التاكد من صحة البيانات');
    }
}

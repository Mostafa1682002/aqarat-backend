<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\AdvertisementRepositoryInterface;
use Illuminate\Http\Request;

class AdvertisementController extends Controller
{
    protected $advertisementRepository;
    public function __construct(AdvertisementRepositoryInterface $advertisement)
    {
        $this->advertisementRepository = $advertisement;
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $advertisements = $this->advertisementRepository->index();
        return view('Admin.advertisements.index', compact('advertisements'));
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
        $advertisement = $this->advertisementRepository->show($id);
        return view('Admin.advertisements.show', compact('advertisement'));
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
        $advertisement = $this->advertisementRepository->update($request->only('status'), $id);
        if ($advertisement) {
            return redirect()->back()->with('success', 'تم تعديل حالة الاعلان بنجاح');
        }
        return redirect()->back()->with('error', 'حدث خطا ما برجاء التاكد من صحة البيانات');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $advertisement = $this->advertisementRepository->destroy($id);
        if ($advertisement) {
            return redirect()->back()->with('success', 'تم حذف الاعلان بنجاح');
        }
        return redirect()->back()->with('error', 'حدث خطا ما برجاء التاكد من صحة البيانات');
    }
}
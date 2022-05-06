<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBrandRequest;
use App\Http\Requests\UpdateBrandRequest;
use App\Repositories\CategoryRepository;
use App\Repositories\BrandRepository;
use App\Services\BrandService;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    protected $categoryRepo;
    protected $brandRepo;
    protected $brandService;

    public function __construct(
        CategoryRepository $categoryRepo,
        BrandRepository $brandRepo,
        BrandService $brandService
    ) {
        $this->categoryRepo = $categoryRepo;
        $this->brandRepo = $brandRepo;
        $this->brandService = $brandService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $brands = $this->brandRepo->search($request->all());
        $categories = $this->categoryRepo->getLists();
        $request->flash();

        return view('admin.pages.brands.index')->with([
            'brands' => $brands,
            'categories' => $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = $this->categoryRepo->getLists();

        return view('admin.pages.brands.create')->with([
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBrandRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBrandRequest $request)
    {
        $brand = $this->brandService->getDataStore($request);

        $this->brandService->setMessage(
            $this->brandRepo->create($brand),
            __("Brand").' '.__("Create")
        );

        // return redirect()->route('brands.index');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBrandRequest  $request
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBrandRequest $request, Brand $brand)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        //
    }
}

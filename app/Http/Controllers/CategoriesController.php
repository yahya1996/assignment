<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Repositories\CategoryRepository;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    


    private $categoryRepository;

    public function __construct(CategoryRepository $repo)
    {
        $this->categoryRepository = $repo;

    }

    public function index(Request $request)
    {
        $categories = $this->categoryRepository->all();
        return view("categories.list", compact("categories"));
    
    }
    public function create()
    {
        $categories = $this->categoryRepository->all();
        return view("categories.create", compact("categories"));
    }

    public function store(Request $request)
    {
        $categories = $this->categoryRepository->store($request);
        return redirect()->route('categories.index');
    }



}

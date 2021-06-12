<?php


namespace App\Http\Controllers;


use App\Models\Categories;

class CategoryController extends Controller
{

    public function listCategories() {
        return Categories::all();
    }
}

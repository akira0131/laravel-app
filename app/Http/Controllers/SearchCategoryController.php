<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchCategoryController extends Controller
{
    public function index() {
        return view('search.category.index');
    }
}

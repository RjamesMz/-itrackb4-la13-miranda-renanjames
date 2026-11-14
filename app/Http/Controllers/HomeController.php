<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Medicine;
use App\Models\Type;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'medicineCount' => Medicine::count(),
            'typeCount' => Type::count(),
        ]);
    }
}

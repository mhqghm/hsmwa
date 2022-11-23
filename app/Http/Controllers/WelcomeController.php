<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class WelcomeController extends Controller
{
    public function index(Request $request)
    {
        $cities = Cache::remember('welcome.cities', 200, function () {
            return City::latest()->take(10)->get();
        });

        $reviews = Cache::remember('welcome.reviews', 220, function () {
            return Review::latest()->take(10)->get();
        });

        return view('welcome', compact('cities', 'reviews'));
    }
}

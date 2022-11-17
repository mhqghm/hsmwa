<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\City;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::all();

        return view('reviews.index', compact('reviews'));
    }

    public function create()
    {
        return view('reviews.create');
    }

    public function store(Request $request)
    {
        $city = City::find($request->city_id);
        $user = User::query()->first();

//        $validated = $request->validate([
//            'name' => 'required|min:5|max:255'
//        ]);
        $review = new Review();
        $review->city_mark = $request->city_mark;
        $review->city()->associate($city);
        $review->user()->associate($user);
        $review->save();

        $category_reviews = array_map(
            null,
            $request->category_reviews['category_id'],
            $request->category_reviews['mark'],
            $request->category_reviews['comment']
        );

        foreach ($category_reviews as $category_review){
            $category = Category::find($category_review[0]);
            $mark = $category_review[1];
            $comment = $category_review[2];
            $review->categories()->attach($category, [
                'mark' => $mark,
                'comment' => $comment,
            ]);
        }

        return redirect()->route('reviews.index');
    }

    public function show($id)
    {
        $review = Review::find($id);

        return view('reviews.show', compact('review'));
    }

    public function edit($id)
    {
        $review = Review::find($id);


        return view('reviews.edit', compact('review'));
    }

}

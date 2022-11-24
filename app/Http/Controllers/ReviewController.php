<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\City;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::all();

        return view('reviews.index', compact('reviews'));
    }

    public function create()
    {
        $cities = City::all();
        $categories = Category::all();
        return view('reviews.create', compact('cities', 'categories'));
    }

    public function store(Request $request)
    {
        $city = City::find($request->city_id);
        $user = Auth::user();

        $review = new Review();
        $review->city_mark = $request->city_mark;
        $review->city()->associate($city);
        $review->user()->associate($user);
        $review->save();

        $category_reviews = array_map(
            null,
            $request->category_reviews['category_id'] ?? [],
            $request->category_reviews['mark'] ?? [],
            $request->category_reviews['comment'] ?? []
        );

        foreach ($category_reviews as $category_review) {
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


    public function update($id, Request $request)
    {
        $review = Review::find($id);

        $city = City::find($request->city_id);
        $user = Auth::user();

        $review->city_mark = $request->city_mark;
        $review->city()->associate($city);
        $review->user()->associate($user);
        $review->categories()->detach();

        $review->save();

        $category_reviews = array_map(
            null,
            $request->category_reviews['category_id'] ?? [],
            $request->category_reviews['mark'] ?? [],
            $request->category_reviews['comment'] ?? []
        );

        foreach ($category_reviews as $category_review) {
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

    public function destroy($id, Request $request)
    {
        $review = Review::find($id);

        $review->delete();

        return redirect()->route('reviews.index');
    }
}

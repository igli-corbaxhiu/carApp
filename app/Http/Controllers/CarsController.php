<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function getCars(Category $category)
    {
        $cars = $category->cars;
        return response()->json($cars);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('cars.create-edit', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'brand' => ['string', 'required'],
            'category_id' => ['required', 'numeric'],
            'prod_year' => ['required', 'numeric']
        ]);

        $category = Category::find($data['category_id']);
        $car = new Car();
        $car->brand = $data['brand'];
        $car->prod_year = $data['prod_year'];

        $category->cars()->save($car);

        $tags = $request->tags;

        $car->tags()->sync($tags);

        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show($car)
    {
        return view('cars.show', [
            'car'=> Car::findOrFail($car)
        ]);
    }

    public function allCars(Request $request){

        $categories = Car::all()->pluck('category_id')->unique();
        $brands = Car::all()->pluck('brand')->unique();
        $prod_years = Car::all()->pluck('prod_year')->unique();

        $allTags = Tag::all();

        $cars = Car::query();

        $selectedBrand = $request->brand;
        $selectedCategory = $request->category_id;
        $selectedYear = $request->prod_year;
        $selectedTags = $request->tags;

        if($request->has('tags')){

            $cars->whereHas("tags", function ($query) use ($selectedTags) {
                 $query->whereIn("id", $selectedTags);
            });
        }

        if($request->filled('category_id')){
            $cars->where('category_id', $selectedCategory);
        }
        if($request->filled('brand')){
            $cars->where('brand', $selectedBrand);
        }
        if($request->filled('prod_year')){
            $cars->where('prod_year', $selectedYear);
        }

        $getCars = $cars->paginate(5);
        return view('cars.show',compact('categories', 'brands',
            'prod_years', 'getCars', 'selectedBrand', 'selectedYear', 'selectedCategory', 'allTags', 'selectedTags'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($car)
    {
        $car = Car::findOrFail($car);
        $categories = Category::all();
        $tags = Tag::all();
        $selectedTags = $car->tags()->pluck('id')->toArray();
        return view('cars.create-edit', compact('tags', 'selectedTags', 'car', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $car)
    {
        $request->validate([
            'brand' => 'required',
            'prod_year' => 'required'
        ]);

        $record = Car::findOrFail($car);
        $record->brand = $request->input('brand');
        $record->prod_year = $request->input('prod_year');

        $record->save();
        $tags = $request->tags;
        $record->tags()->sync($tags);

        return redirect()->route('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $car = Car::find($id);
        $car->delete();
        return redirect('dashboard');
    }
}

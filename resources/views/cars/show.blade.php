<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="justify-center flex">
        <form class="form p-6 border-1" method="GET" action="{{ route('cars.allCars') }}">
            @csrf
            <select name="category_id" id="name">
                <option value="">Category</option>
                @foreach($categories as $category)
                    <option @if(isset($selectedCategory) && ($selectedCategory == $category)))
                            selected @endif>{{ $category }}</option>
                @endforeach
            </select>
            <select name="brand" id="brand">
                <option value="">Brand</option>
                @foreach($brands as $brand)
                    <option @if(isset($selectedBrand) && ($selectedBrand == $brand)))
                            selected @endif>{{ $brand }}</option>
                @endforeach
            </select>
            <select name="prod_year" id="prod_year">
                <option value="">Production Year</option>
                @foreach($prod_years as $year)
                    <option @if(isset($selectedYear) && ($selectedYear == $year)))
                            selected @endif>{{ $year }}</option>
                @endforeach
            </select>
            <div>
                <div class="form-check form-check-inline">
                    <label>Tags: </label>
                    @foreach($allTags as $tag)
                        <label><input type="checkbox" name="tags[]" value="{{ $tag->id }}"
                                @if(isset($tag) && isset($selectedTags) && in_array($tag->id, $selectedTags)) checked @endif>{{ $tag->name }}</label>
                    @endforeach
                </div>
            </div>
            <button class="flex py-1 px-4 border-gray-400 bg-white rounded border border-black mt-4" type="submit">Search</button>
        </form>
    </div>

    <div class="flex flex-col justify-center max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center">
            <table class="border-collapse border-2 border-slate-300 text-xl mt-4">
                <thead>
                <tr>
                    <th class="border border-slate-300 px-4">Id</th>
                    <th class="border border-slate-300 px-4">Car Brand</th>
                    <th class="border border-slate-300 px-4">Car's Production Year</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($getCars as $car)
                    <tr>
                        <td class="border border-slate-300 text-center">{{$car['id']}}</td>
                        <td class="border border-slate-300 text-center">{{$car['brand']}}</td>
                        <td class="border border-slate-300 text-center">{{$car['prod_year']}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="float-right">{{$getCars->links()}}</div>
    </div>
</x-app-layout>

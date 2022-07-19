<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
   <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
       @if(isset($car))
           <form class="flex flex-col w-full" method="POST" action="{{ route('cars.update', $car) }}">
           @method('PUT')
       @else
           <form class="flex flex-col w-full" method="POST" action="{{ route('cars.store') }}">
       @endif
           @csrf
           <div class="form-group">
               <label for="category_id" class="col-md-4 control-label">Category</label>
               <div class="col-md-6">
                   <select name="category_id" class="form-control">
                       @foreach($categories as $category)
                           <option value="@if(isset($category)){{$category->id}}@endif">{{ $category->name }}</option>
                       @endforeach
                   </select>
                   @if ($errors->has('category_id'))
                       <span class="help-block">
                           <strong>{{ $errors->first('category_id') }}</strong>
                       </span>
                   @endif
               </div>
           </div>
           <div>
               <label class="text-sm" for="brand">Car Brand:</label>
               <input class="text-md border-2 bg-white" type="text" id="brand" name="brand"
               value="@if(isset($car->brand)){{$car->brand}}@endif">
               @error('brand')
               <div class="text-xs text-red-600">
                   {{$message}}
               </div>
               @enderror
           </div>
           <div>
               <label class="text-sm" for="prod_year">Car's Production Year:</label>
               <input class="text-md border-2 bg-white" type="number" id="prod_year" name="prod_year"
               value="@if(isset($car->prod_year)){{$car->prod_year}}@endif">
               @error('prod_year')
               <div class="text-xs text-red-600">
                   {{$message}}
               </div>
               @enderror
           </div>
           <div>
               <div class="form-check form-check-inline">
                   <label>Tags: </label>
                   @foreach($tags as $tag)
                       <label><input type="checkbox" name="tags[]" value="{{ $tag->id }}"
                                     @if(isset($tag) && isset($selectedTags) && in_array($tag->id, $selectedTags)) checked @endif>
                           {{ $tag->name }}</label>
                   @endforeach
               </div>
           </div>
           <div>
               <button class="border-2 bg-slate-300 p-2 rounded mt-2" type="submit">Submit</button>
           </div>
       </form>
       </form>
   </div>

</x-app-layout>

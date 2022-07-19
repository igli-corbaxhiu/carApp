<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
   <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
       @if(isset($category))
           <form class="flex flex-col w-full" method="POST" action="{{ route('categories.update', $category) }}">
           @method('PUT')
       @else
           <form class="flex flex-col w-full" method="POST" action="{{ route('categories.store') }}">
       @endif
       @csrf
       <div>
           <label class="text-sm" for="name">Category Name:</label>
           <input class="text-md border-2 bg-white" type="text" id="name" name="name"
                  value="@if(isset($category)){{$category->name}}@endif">
           @error('name')
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

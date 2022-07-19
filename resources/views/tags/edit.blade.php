<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
   <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
       <form class="form p-6 border-1" method="POST" action="{{route('tags.update', ['tag'=>$tag->id])}}">
           @csrf
           @method('PUT')
           <div>
               <label class="text-sm" for="name">Tag Name:</label>
               <input class="text-md border-2 bg-white" type="text" value="{{$tag['name']}}" id="name" name="name">
               @error('name')
               <div class="text-xs text-red-600">
                   {{$message}}
               </div>
               @enderror
           </div>
           <div>
               <button class="border-2 bg-slate-300 p-2 rounded mt-2" type="submit">Submit</button>
           </div>
       </form>
   </div>

</x-app-layout>

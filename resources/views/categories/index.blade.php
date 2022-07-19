<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="flex flex-col justify-center max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center">
            <table class="border-collapse border-2 border-slate-300 text-xl mt-4">
                <thead>
                <tr>
                    <th class="border border-slate-300 px-4">Id</th>
                    <th class="border border-slate-300 px-4">Category Name</th>
                    <th class="border border-slate-300 px-4">Edit Category</th>
{{--                    <th class="border border-slate-300 px-4">Delete Category</th>--}}
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td class="border border-slate-300 mx-auto">{{$category['id']}}</td>
                        <td class="border border-slate-300">{{$category['name']}}</td>
                        <td class="border border-slate-300"><a href="{{route('categories.edit', $category['id'])}}">Edit</a></td>
{{--                        <td class="border border-slate-300"><a href="{{route('categories.destory', ['category' => $category])}}">Delete</a></td>--}}
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
        <div class="mx-auto justify-center flex lg:px-8 mt-4">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg w-48">
                <div class="flex justify-center p-4 bg-white border-b border-gray-200">
                    <a href="{{route('categories.create')}}">+ ADD Category</a>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

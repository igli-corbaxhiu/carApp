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
                    <th class="border border-slate-300 px-4">Tag Name</th>
                    <th class="border border-slate-300 px-4">Edit Tag</th>
                    <th class="border border-slate-300 px-4">Delete Tag</th>
                </tr>
                </thead>
                <tbody>
                @foreach($tags as $tag)
                    <tr>
                        <td class="border border-slate-300 mx-auto">{{$tag['id']}}</td>
                        <td class="border border-slate-300">{{$tag['name']}}</td>
                        <td class="border border-slate-300"><a href="{{route('tags.edit', $tag['id'])}}">Edit</a></td>
                        <td class="border border-slate-300 text-center">
                            <form action="{{route('tags.destroy', $tag->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
        <div class="mx-auto justify-center flex lg:px-8 mt-4">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg w-48">
                <div class="flex justify-center p-4 bg-white border-b border-gray-200">
                    <a href="{{route('tags.create')}}">+ ADD Tag</a>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

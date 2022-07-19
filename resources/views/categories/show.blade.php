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
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border border-slate-300 text-center">{{$category['id']}}</td>
                        <td class="border border-slate-300 text-center">{{$category['name']}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</x-app-layout>

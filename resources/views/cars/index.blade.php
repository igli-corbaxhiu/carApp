<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    @role('admin')
    <div class="flex flex-col justify-center max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center">
            <table class="border-collapse border-2 border-slate-300 text-xl mt-4">
                <thead>
                <tr>
                    <th class="border border-slate-300 px-4">Id</th>
                    <th class="border border-slate-300 px-4">Car Brand</th>
                    <th class="border border-slate-300 px-4">Production Year</th>
                    <th class="border border-slate-300 px-4">Edit Car</th>
                    <th class="border border-slate-300 px-4">Delete Car</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($cars as $car)
                    <tr>
                        <td class="border border-slate-300">{{$car->id}}</td>
                        <td class="border border-slate-300">{{$car->brand }}</td>
                        <td class="border border-slate-300">{{$car->prod_year }}</td>
                        <td class="border border-slate-300"><a href="{{route('cars.edit', $car['id'])}}">Edit</a></td>
                        <td class="border border-slate-300">
                            <form action="{{route('cars.destroy', $car->id)}}" method="POST">
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
    </div>
    @else
    <div class="flex flex-col justify-center max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center">
            <table class="border-collapse border-2 border-slate-300 text-xl mt-4">
                <thead>
                <tr>
                    <th class="border border-slate-300 px-4">Id</th>
                    <th class="border border-slate-300 px-4">Car Brand</th>
                    <th class="border border-slate-300 px-4">Production Year</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($cars as $car)
                    <tr>
                        <td class="border border-slate-300 text-center">{{$car->id}}</td>
                        <td class="border border-slate-300 text-center">{{$car->brand }}</td>
                        <td class="border border-slate-300 text-center">{{$car->prod_year }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endrole

</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Filtrar información por pais') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
    <form method="POST" action="{{url('/sakila/infofiltro2')}}">
        {{csrf_field()}}
    <label of="country">Pais:</label>
    <select name="country" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
        @foreach($pais as $country)
        <option value="{{$country->cntry}}">{{$country->cntry}}</option>
        @endforeach
    </select>
     <button type="submit" class="btn btn-outline-dark">Solicitar información</button>
    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
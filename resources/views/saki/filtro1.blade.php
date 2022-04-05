<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Descubre las peliculas disponibles en nuestras tiendas') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{url('/sakila/infofiltro1')}}">
                        {{csrf_field()}}
                    <label of="store_id">Tienda:</label>
                    <select name="store_id" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                    @foreach($tienda as $shop)
                    <option value="{{$shop->tie}}">{{$shop->tie}}</option>
                    @endforeach
                    </select>
                    <label of="title">Titulo de la pelicula:</label>
                    <select name="title" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                    @foreach($titulo as $title)
                    <option value="{{$title->tit}}">{{$title->tit}}</option>
                    @endforeach
                    </select>
                    <button type="submit" class="btn btn-outline-dark">Solicitar información</button>
                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </x-app-layout>
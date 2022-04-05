<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listado de peliculas') }}
        </h2>
    </x-slot>
    {!! $peliculas->links() !!}
    @foreach($peliculas as $pelicula)
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <strong>Pelicula # {{$pelicula->film_id}}</strong>
                    <p>Titulo de la pelicula: {{$pelicula->title}}</p>
                    <p>Descripción de la película: {{$pelicula->description}}</p>
                    <p>Año de la pelicula: {{$pelicula->release_year}}</p>
                    <p>Idioma de la pelicula: {{$pelicula->language->name}}</p>
                    <p>Duración de la pelicula: {{$pelicula->length}}</p>
                    <p>Rango de la pelicula: {{$pelicula->rating}}</p>
                    <a style="background-color: white; box-shadow: 2px 2px 5px; border-radius: 5px; padding:5px; color:red;" href="/sakila/borrarpelicula/{{$pelicula->film_id}}">Borrar pelicula</a>
                    <a style="background-color: white; box-shadow: 2px 2px 5px; border-radius: 5px; padding:5px; color:green;" href="/sakila/actulizarpelicula/{{$pelicula->film_id}}">Editar pelicula</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</x-app-layout>
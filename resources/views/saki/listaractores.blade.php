<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listado de actores') }}
        </h2>
    </x-slot>
    {!! $actores->links() !!}
    @foreach ($actores as $actor)
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <strong>Actor # {{$actor->actor_id}}</strong>
                    <p>Nombre del actor: {{$actor->first_name}}</p>
                    <p>Apellido del actor: {{$actor->last_name}}</p>
                    <a style="background-color: white; box-shadow: 2px 2px 5px; border-radius: 5px; padding:5px; color:red;" href="/sakila/borraractor/{{$actor->actor_id}}">Borrar actor</a>
                    <a style="background-color: white; box-shadow: 2px 2px 5px; border-radius: 5px; padding:5px; color:green;" href="/sakila/actualizaractor/{{$actor->actor_id}}">Editar actor</a>
                </div>
            </div>
        </div>
    </div>
@endforeach
</x-app-layout>
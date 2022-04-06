<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar datos de usuario') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{route('profile.updateduser')}}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class ="grid grid-cols-2 gap-6">
                            <div class ="grid grid-rows-2 gap-6">
                                <div>
                                    <x-label for="name" :value="_('Nombre')"></x-label>
                                    <x-input class="block mt-1 w_full" type="text" name="name" value="{{ auth()->user()->name }}" autofocus></x-input>
                                </div>
                            </div>
                            <div>
                                <x-label for="email" :value="_('Correo Electronico')"></x-label>
                                <x-input class="block mt-1 w_full" type="email" name="email" value="{{ auth()->user()->email }}" autofocus></x-input>
                            </div>
                            <div>
                                <x-label for="password" :value="_('Nueva contraseña')"></x-label>
                                <x-input class="block mt-1 w_full" type="password" name="password" autocomplete="new-password"></x-input>
                            </div>
                            <div>
                                <x-label for="password_confrimation" :value="_('Confirmar contraseña')"></x-label>
                                <x-input class="block mt-1 w_full" type="password" name="password_confirmation" ></x-input>
                            </div>
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-3">
                                Actualizar
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Añadir peliculas') }}
        </h2>
        <h3>Añade peliculas a nuestra colección</h3>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
             <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">     
    <form method="POST" action="{{ url('/sakila/newpelicula') }}" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label of="title">Titulo:</label>
                    <input type="text" id="title" name="title" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Titulo" required>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label of="description">Descripción:</label>
                    <textarea class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="description" placeholder="Descripcion de la pelicula" required></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label of="release_year">Año:</label>
                    <input type="text" id="release_year" name="release_year" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Año">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label of="language_id">Idioma:</label>
                    <select name="language_id" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                        <option selected value="0"> Elige una opción </option>
                        <option value="1">English</option> 
                        <option value="2">Italin</option> 
                        <option value="3">Japanese</option>
                        <option value="4">Mandarin</option> 
                        <option value="5">French</option>
                        <option value="6">German</option> 
                     </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label of="original_language_id">Código del idioma original:</label>
                    <select name="original_language_id" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                        <option selected value="0"> Elige una opción </option>
                        <option value="1">1</option> 
                        <option value="2">2</option> 
                        <option value="3">3</option>
                        <option value="4">4</option> 
                        <option value="5">5</option> 
                        <option value="6">6</option>
                     </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label of="rental_duration">Tiempo de alquiler:</label>
                    <input type="text" id="rental_duration" name="rental_duration" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Tiempo de alquiler" required>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label of="rental_rate">Precio por alquiler:</label>
                    <input type="text" id="rental_rate" name="rental_rate" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Precio por alquiler" required>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label of="length">Duración de la pelicula:</label>
                    <input type="number" id="length" name="length" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Duración de la pelicula" required>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label of="replacement_cost">Precio del remplazamiento:</label>
                    <input type="text" id="replacement_cost" name="replacement_cost" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Precio" required>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label of="rating">Rango:</label>
                    <select name="rating" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                        <option selected value="0"> Elige una opción </option>
                        <option value="G">G</option> 
                        <option value="PG">PG</option> 
                        <option value="PG-13">PG-13</option>
                        <option value="NC-17">NC-17</option> 
                     </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label of="special_features">Características especiales:</label>
                    <select multiple name="special_features" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                        <option value="Trailers">Trailers</option> 
                        <option value="Deleted Scenes">Deleted Scenes</option> 
                        <option value="Commentaries">Commentaries</option>
                        <option value="Behind the Scenes">Behind the Scenes</option> 
                    </select>
               </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Añadir pelicula</button>
            </div>
        </div>
    </form>
                </div>
             </div>
        </div>
    </div>
</x-app-layout>
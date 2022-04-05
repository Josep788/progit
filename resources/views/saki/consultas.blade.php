<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Consultas sobre sakila') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a style="background-color: white; box-shadow: 2px 2px 5px; border-radius: 5px; padding:5px; color:blue;" href="">Filtrar información</a>
                    <canvas id="myChart"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a style="background-color: white; box-shadow: 2px 2px 5px; border-radius: 5px; padding:5px; color:blue;" href="/sakila/filtrar2">Filtrar información</a>
                    <canvas id="Mychart"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2>Descubre las peliculas disponibles en nuestras tiendas</h2> 
                    <a style="background-color: white; box-shadow: 2px 2px 5px; border-radius: 5px; padding:5px; color:blue;" href="/sakila/filtrar1">Filtrar información</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var dtx = document.getElementById("myChart");
        var myChart = new Chart(dtx, {
    type: 'bar',
    data: {
        labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        datasets: [{
            label: 'Alquileres de peliculas que se han hecho entre enero y diciebre en este año',
            data: <?php echo json_encode($mesos);?>,
            backgroundColor: [
                    'rgba(0, 0, 532, 0.2)',
                    'rgba(324, 3, 235, 0.2)',
                    'rgba(215, 196, 16, 0.2)',
                    'rgba(75, 250, 10, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(255, 10, 25, 0.2)',
                    'rgba(95, 55, 25, 0.2)'
            ],
            borderColor: [
                    'rgba(0, 0, 532, 2)',
                    'rgba(324, 3, 235, 2)',
                    'rgba(215, 196, 16, 2)',
                    'rgba(75, 250, 10, 2)',
                    'rgba(153, 102, 255, 2)',
                    'rgba(255, 159, 64, 2)',
                    'rgba(255, 99, 132, 2)',
                    'rgba(54, 162, 235, 2)',
                    'rgba(255, 206, 86, 2)',
                    'rgba(75, 192, 192, 2)',
                    'rgba(255, 10, 25, 2)',
                    'rgba(95, 55, 25, 2)'
            ],
            borderWidth: 2
        }]
    },
});
    </script>
<script>
    var dtx = document.getElementById("Mychart");
    var mychart = new Chart(dtx, {
type: "bar",
data: {
    labels: <?php echo json_encode($paises);?>,
    datasets: [{
        label: 'Numero de clientes que tenemos en cada pais',
        data: <?php echo json_encode($clientes);?>,
        backgroundColor: [
                    'rgba(0, 0, 532, 0.2)',
                    'rgba(324, 3, 235, 0.2)',
                    'rgba(215, 196, 16, 0.2)',
                    'rgba(75, 250, 10, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(255, 10, 25, 0.2)',
                    'rgba(95, 55, 25, 0.2)'
            ],
            borderColor: [
                    'rgba(0, 0, 532, 2)',
                    'rgba(324, 3, 235, 2)',
                    'rgba(215, 196, 16, 2)',
                    'rgba(75, 250, 10, 2)',
                    'rgba(153, 102, 255, 2)',
                    'rgba(255, 159, 64, 2)',
                    'rgba(255, 99, 132, 2)',
                    'rgba(54, 162, 235, 2)',
                    'rgba(255, 206, 86, 2)',
                    'rgba(75, 192, 192, 2)',
                    'rgba(255, 10, 25, 2)',
                    'rgba(95, 55, 25, 2)'
            ],
            borderWidth: 2
    }]
},
});

</script>
</x-app-layout>

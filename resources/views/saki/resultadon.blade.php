<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Resultado de la busqueda') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <canvas id="myChart"></canvas>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var dtx = document.getElementById("myChart");
        var myChart = new Chart(dtx, {
    type: 'radar',
    data: {
        labels: <?php echo json_encode($tiendas);?>,
        datasets: [{
            label: 'Numero de copias de las peliculas disponibles en esta tienda',
            data: <?php echo json_encode($pelis);?>,
            backgroundColor: [
                'rgba(45, 2, 155, 0.1)',
            ],
            borderColor: [
                'rgba(45, 2, 155, 128)',
            ],
            borderWidth: 5

        }]
    },
});
</script>
</x-app-layout>
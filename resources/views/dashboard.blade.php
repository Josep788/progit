<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bienvenido a Sakila') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Descubre nuestros mejores actores y peliculas
            </div>
        </div>
    </div>
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
        var btx = document.getElementById("myChart");
        var myChart = new Chart(btx, {
    type: "pie",
    data: {
        labels: ['Orange', 'Green', 'Yellow', 'Blue', 'Purple', 'Red'],
        datasets: [{
            label: 'Valoraciones',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 32, 0.5)',
                'rgba(54, 162, 35, 0.5)',
                'rgba(255, 206, 6, 0.5)',
                'rgba(75, 192, 192, 0.5)',
                'rgba(153, 102, 255, 0.5)',
                'rgba(255, 10, 25, 0.2)',
            ],
            borderColor: [
                'rgba(255, 99, 32, 1)',
                'rgba(54, 162, 35, 1)',
                'rgba(255, 206, 6, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 10, 25, 1)',
            ],
            borderWidth: 1
        }]
    },
    options: {
        plugins: {
        title: {
        display: true,
        text: 'Valoraciones',
      }
      },
        scales: {
            y:{
                beginAtZero: true,
            }

        }
        
    }
});
</script>
</x-app-layout>

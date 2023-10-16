
<x-app-layout>
<!DOCTYPE html>
<html lang="es">
<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        /* Agregar estilos para la vista de dispositivos pequeños */
        @media (max-width: 768px) {
            .flex-wrap {
                display: flex;
                flex-wrap: wrap;
            }
            .section-small {
                width: 50%;
            }
        }
    </style>
</head>
<body>
<div class="flex flex-col h-screen bg-gray-100">

    <!-- Barra de navegación superior -->
    <div class="bg-white text-white shadow w-full p-2 flex items-center justify-between">
        <div class="flex items-center">
            
            <div class="md:hidden flex items-center"> <!-- Se muestra solo en dispositivos pequeños -->
               
            </div>
        </div>

     
        
    </div>

    <!-- Contenido principal -->
    <div class="flex-1 flex">
        <!-- Barra lateral de navegación (oculta en dispositivos pequeños) -->
        <div class="p-2 bg-white w-60 flex flex-col hidden md:flex" id="sideNav">
            <nav>
                <a class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-black hover:text-white" href="#">
                    <i class="fas fa-home mr-2"></i>Services
                </a>
                <a class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-black hover:text-white" href="#">
                    <i class="fas fa-file-alt mr-2"></i>Users
                </a>
                <a class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-black hover:text-white" href="#">
                    <i class="fas fa-users mr-2"></i>Appointments
                </a>
                <a class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-black hover:text-white" href="#">
                    <i class="fas fa-store mr-2"></i>Reports
                </a>
                <a class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-black hover:text-white" href="#">
                    <i class="fas fa-exchange-alt mr-2"></i>Transacciones
                </a>
            </nav>

           

            <!-- Señalador de ubicación -->
            <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px mt-2"></div>

            <!-- Copyright al final de la navegación lateral -->
            <p class="mb-1 px-5 py-3 text-left text-xs text-cyan-500">Copyright HairStudio@2023</p>

        </div>

        <!-- Área de contenido principal -->
        <div class="flex-1 p-4">
           
            

            <!-- Contenedor de las 4 secciones (disminuido para dispositivos pequeños) -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-2 p-2">
                <!-- Sección 1 - Gráfica de Usuarios (disminuida para dispositivos-->
            
              
                    <div class="bg-red-100 p-4 rounded-md">
                        <h2 class="text-gray-500 text-lg font-semibold pb-1">Users</h2>
                        <div class="my1-"></div> <!-- Espacio de separación -->
                        @php
                        $i = 1;
                        $usersCount = count($data);
                        @endphp
                        
                        <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px mb-6"></div>
                            <div class="flex items-center justify-between">
                                <h2 class="text-gray-500 text-lg font-semibold pb-1">{{ $usersCount }} Users</h2>
                                <div class="text-white p-3 text-center inline-flex items-center justify-center w-20 h-20 shadow-lg rounded-full bg-red-500">
                                    <i class="fas fa-users"></i>
                                </div>
                            </div>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Active User Count 2023</p> <!-- Línea con gradiente -->
                            <div class="chart-container" style="position: relative; height:40px; width:100%">
                                <!-- El canvas para la gráfica -->
                            </div>

                    </div>

                    <div class="bg-orange-100 p-4 rounded-md">
                        <div class="flex items-center justify-between">
                        <h1 class="text-gray-500 text-lg font-semibold pb-1">Most Added Items</h1></div>
                        <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px mb-6"></div>
                        @if ($cart->isEmpty())
                            <div class="text-gray-600">The cart is empty or all items have a count of 0.</div>
                        @else
                            @php
                                $maxItemCount = $cart->max('item_count');
                                $mostAddedItems = $cart->where('item_count', $maxItemCount);
                            @endphp
                    
                            @foreach ($mostAddedItems as $mostAddedItem)
                                <div class="p-3 rounded-lg mb-2">
                                    <h1 class="">{{ $mostAddedItem->item_name }}</h1>
                                </div>
                            @endforeach
                        @endif
                    </div>

                @php
                    $total = 0; // Initialize the total variable
                @endphp
                
                @foreach ($checkout as $ch)
                    @php
                        $total += $ch->total_cost; // Add each checkout's total_cost to the total
                    @endphp
                @endforeach
                
                
                
                @php
    $totalRevenue = 0; // Initialize the total revenue variable
    $totalItemCount = 0; // Initialize the total item count variable
@endphp

@foreach ($checkout as $ch)
    @php
        $totalRevenue += $ch->total_cost; // Accumulate the total revenue
        $totalItemCount += $ch->item_count; // Accumulate the total item count
    @endphp
@endforeach
<div class="bg-blue-100 p-4 rounded-md">
<h1>Total Monthly Revenue: ${{ $totalRevenue }}</h1>
</div>
<div class="bg-yellow-100 p-4 rounded-md">
<h1>Total Sells Count: {{ $totalItemCount }}</h1>
</div>

                   
                
                    

                    <!-- Sección 2 - Gráfica de Comercios -->
                    <div class="bg-green-100 p-4 rounded-md">
                        <h2 class="text-gray-500 text-lg font-semibold pb-1">Reviews</h2>
                        <div class="my-1"></div> <!-- Espacio de separación -->
                        @php
    $i = 1;
    $usersReviewsCount = count($reviews);
    $score5Count = 0;
    $score4Count = 0;
    $below4Count = 0;
@endphp

@foreach ($reviews as $review)
   
    @if ($review->score == 5)
        @php $score5Count++; @endphp
    @elseif ($review->score == 4)
        @php $score4Count++; @endphp
    @else
        @php $below4Count++; @endphp
    @endif
@endforeach

@php
    $averageScore = 0;
    if ($usersReviewsCount > 0) {
        $averageScore = ($score5Count * 5 + $score4Count * 4 + $below4Count * 3) / $usersReviewsCount;
    }
@endphp

                        <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px mb-6"></div>
                        <h2 class="text-gray-500 text-lg font-semibold pb-1">Average Score: {{ number_format($averageScore, 2) }}/5.00 </h2>
                        
                        <h2 class="text-gray-500 text-lg font-semibold pb-1">{{$usersReviewsCount }} Total Reviews</h2>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Count of reviews with score 5: {{ $score5Count }}</p>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">reviews with score 4: {{ $score4Count }}</p>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">reviews with lower score 5: {{ $below4Count }}</p><!-- Línea con gradiente -->
                        <div class="chart-container" style="position: relative; height:30px; width:100%">
                            <!-- El canvas para la gráfica -->
                          
                        </div>
                    </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-2 p-2">
              <!-- Sección 1 - Gráfica de Usuarios -->
              <div class="bg-white p-4 rounded-md">
                <h2 class="text-gray-500 text-lg font-semibold pb-1">Sales</h2>
                <div class="my1-"></div> <!-- Espacio de separación -->
                <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px  mb-6"></div> <!-- Línea con gradiente -->
                <div class="chart-container" style="position: relative; height:150px; width:100%">
                    <!-- El canvas para la gráfica -->
                    <canvas id="usersChart"></canvas>
                </div>
            </div>
            <div class="bg-white p-4 rounded-md">
                <h2 class="text-gray-500 text-lg font-semibold pb-1">Apointments</h2>
                <div class="my-1"></div> <!-- Espacio de separación -->
                <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px mb-6"></div> <!-- Línea con gradiente -->
                <div class="chart-container" style="position: relative; height:150px; width:100%">
                    <!-- El canvas para la gráfica -->
                    <canvas id="commercesChart"></canvas>
                </div>
            </div>      

                 
            <div class="bg-white p-4 rounded-md">
               
                <div class="text-right mt-4">
                    <a href="{{ url('adminfunction') }}">
                    <button class="bg-black hover:bg-cyan-600 text-white font-semibold py-2 px-4 rounded">
                       ADD USERS
                    </button></a>
                </div>
                <div class="my-1"></div> <!-- Espacio de separación -->
                <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px mb-6"></div> <!-- Línea con gradiente -->
                <table class="w-full table-auto text-sm">
                    <thead>
                        <tr class="text-sm leading-normal">
                            <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">Name</th>
                            <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">Email</th>
                            <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">Role</th>
                            <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i=1;
                        @endphp
                        @foreach ($data as $users)

                        <tr class="hover:bg-grey-lighter">
                            <td class="py-2 px-4 border-b border-grey-light"> {{$users->name}}</td>
                            <td class="py-2 px-4 border-b border-grey-light"> {{$users->email}}</td>
                            <td class="py-2 px-4 border-b border-grey-light">{{$users->role}}</td>
                            <td class="py-2 px-4 border-b border-grey-light">
                                <a href="{{url('edit-user/'.$users->id)}}" class="font-medium text-green-600 dark:text-blue-500 hover:underline">Edit</a>/
                                <a href="{{url('delete-user/'.$users->id)}}" class="font-medium text-red-600 dark:text-blue-500 hover:underline">Delete</a>
                                   
                            </td>
                        </tr>
                      
                        @endforeach
                    </tbody>
                    </table>
                    
                </div>

                <!-- Sección 4 - Tabla de Transacciones (disminuida para dispositivos pequeños) -->
                     <div class="bg-white p-4 rounded-md mt-4">
   
    <div class="text-right mt-4">
        <a href="{{ url('addservice')}}"> 
        <button class="bg-black hover:bg-cyan-600 text-white font-semibold py-2 px-4 rounded">
           ADD SERVICES
        </button></a>
    </div>
    <div class="my-1"></div> <!-- Espacio de separación -->
    <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px mb-6"></div> <!-- Línea con gradiente -->
    <table class="w-full table-auto text-sm">
        <thead>
            <tr class="text-sm leading-normal">
                <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">Service</th>
                <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">Category</th>
                <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light text-right">Price</th>
                <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light text-right">Disc</th>
                <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light text-right">Action</th>
            </tr>
        </thead>
        <tbody>
            @php
            $i=1;
        @endphp
        @foreach ($service as $s)

            <tr class="hover:bg-grey-lighter">
                <td class="py-2 px-4 border-b border-grey-light">{{$s->servicename}}</td>
                <td class="py-2 px-4 border-b border-grey-light">{{$s->category}}</td>
                <td class="py-2 px-4 border-b border-grey-light text-right">{{$s->price}}</td>
                <td class="py-2 px-4 border-b border-grey-light">{{$s->discount}}</td>
                <td class="py-2 px-4 border-b border-grey-light text-right">
                    <a href="{{url('edit-ser/'.$s->id)}}" class="font-medium text-green-600 dark:text-blue-500 hover:underline">Edit</a>/
                    <a href="{{url('delete-ser/'.$s->id)}}" class="font-medium text-red-600 dark:text-blue-500 hover:underline">Delete</a>
                </td>
            </tr>
          
            @endforeach
        </tbody>
    </table>
   
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-2 p-2 ">
        <canvas class="  " id="revenueChart" width="200" height="100"></canvas>
        
        
        
        <script>
            // Function to create and render the chart
            function createRevenueChart() {
                // Get the monthly revenue data from PHP variable
                var monthlyRevenueData = @json($monthlyRevenue);
        
                // Get the canvas element
                var ctx = document.getElementById('revenueChart').getContext('2d');
        
                // Extract months and revenue data
                var months = monthlyRevenueData.map(function(item) {
                    return item.month + '/' + item.year;
                });
        
                var revenue = monthlyRevenueData.map(function(item) {
                    return item.total;
                });
        
                // Create the chart
                var myChart = new Chart(ctx, {
                    type: 'bar', // You can use 'bar' or any other chart type you prefer
                    data: {
                        labels: months,
                        datasets: [{
                            label: 'Monthly Revenue',
                            data: revenue,
                            backgroundColor: 'rgba(75, 192, 192, 0.2)', // Change the color as needed
                            borderColor: 'rgba(75, 192, 192, 1)', // Change the color as needed
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true,
                                title: {
                                    display: true,
                                    text: 'Revenue'
                                }
                            }
                        }
                    }
                });
            }
        
            // Attach the chart creation function to the window.onload event
            window.onload = function() {
                createRevenueChart();
            };
        </script>
        </div>
</div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Script para las gráficas -->
<script>
    // Gráfica de Usuarios
    var usersChart = new Chart(document.getElementById('usersChart'), {
        type: 'line',
        data: {
            labels: ['Start', 'End'],
            datasets: [{
                data: [30, 65],
                backgroundColor: ['#00F0FF', '#8B8B8D'],
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            legend: {
                position: 'bottom' // Ubicar la leyenda debajo del círculo
            }
        }
    });

    // Gráfica de Comercios
    var commercesChart = new Chart(document.getElementById('commercesChart'), {
        type: 'doughnut',
        data: {
            labels: ['Finished', 'Cancelled'],
            datasets: [{
                data: [60, 40],
                backgroundColor: ['#FEC500', '#8B8B8D'],
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            legend: {
                position: 'bottom' // Ubicar la leyenda debajo del círculo
            }
        }
    });

    // Agregar lógica para mostrar/ocultar la navegación lateral al hacer clic en el ícono de menú
    const menuBtn = document.getElementById('menuBtn');
    const sideNav = document.getElementById('sideNav');

    menuBtn.addEventListener('click', () => {
        sideNav.classList.toggle('hidden'); // Agrega o quita la clase 'hidden' para mostrar u ocultar la navegación lateral
    });
</script>



</body>
</html>

</x-app-layout>
<x-app-layout>
<!-- component -->
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
   
    <!-- Contenido principal -->
    <div class="flex-1 flex">
        <!-- Barra lateral de navegación (oculta en dispositivos pequeños) -->
        <div class="p-2 bg-white w-60 flex flex-col md:flex" id="sideNav">
            <nav>
              <h1>
                <a class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-black  hover:text-white" href="#">
                  <i class="fas fa-home mr-2"></i>Reports
              </a>
                <a href="{{ route('contact.index') }}" class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-hover:bg-black hover:text-white" href="#">
                    <i class="fas fa-file mr-2"></i>Customer Management
                </a>
                <a href="{{ route('item.index') }}" class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-black hover:text-white" href="#">
                    <i class="fas fa-file-alt mr-2"></i>New Item Management
                </a>
                <a class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-black hover:text-white" href="#">
                    <i class="fas fa-users mr-2"></i>Appointment
                </a>
                <a class="block text-gray-500 py-2.5 px-4 my-4 rounded transition duration-200 hover:bg-black hover:text-white" href="#">
                    <i class="fas fa-store mr-2"></i>Services
                </a>
              
            </nav >

     

            <!-- Señalador de ubicación -->
            <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px mt-2"></div>

            <!-- Copyright al final de la navegación lateral -->
            <p class="mb-1 px-5 py-3 text-left text-xs text-cyan-500">Copyright HairStudio@2023</p>

        </div>

        <!-- Área de contenido principal -->
        <div class="flex-1 p-4">
            <!-- Campo de búsqueda -->
           

            <!-- Contenedor de las 4 secciones (disminuido para dispositivos pequeños) -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-2 p-2">
                <!-- Sección 1 - Gráfica de Usuarios (disminuida para dispositivos-->
            
                <!-- Sección 1 - Gráfica de Usuarios -->
                    <div class="bg-white p-4 rounded-md">
                        <h2 class="text-gray-500 text-lg font-semibold pb-1">Appointments</h2>
                        <div class="my1-"></div> <!-- Espacio de separación -->
                        <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px  mb-6"></div> <!-- Línea con gradiente -->
                        <div class="chart-container" style="position: relative; height:150px; width:100%">
                            <!-- El canvas para la gráfica -->
                            <canvas id="usersChart"></canvas>
                        </div>
                    </div>

                    <!-- Sección 2 - Gráfica de Comercios -->
                    <div class="bg-white p-4 rounded-md">
                        <h2 class="text-gray-500 text-lg font-semibold pb-1">Services</h2>
                        <div class="my-1"></div> <!-- Espacio de separación -->
                        <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px mb-6"></div> <!-- Línea con gradiente -->
                        <div class="chart-container" style="position: relative; height:150px; width:100%">
                            <!-- El canvas para la gráfica -->
                            <canvas id="commercesChart"></canvas>
                        </div>
                    </div>

                    <!-- Sección 3 - Tabla de Autorizaciones Pendientes (disminuida para dispositivos pequeños) -->
            <div class="bg-white p-4 rounded-md">
                <h2 class="text-gray-500 text-lg font-semibold pb-4">Customers</h2>
                <div class="my-1"></div> <!-- Espacio de separación -->
                <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px mb-6"></div> <!-- Línea con gradiente -->
                <table class="w-full table-auto text-sm">
                    <thead>
                        <tr class="text-sm leading-normal">
                            <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">Image</th>
                            <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">Name</th>
                            <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">Role</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-grey-lighter">
                            <td class="py-2 px-4 border-b border-grey-light"><img src="https://via.placeholder.com/40" alt="Foto Perfil" class="rounded-full h-10 w-10"></td>
                            <td class="py-2 px-4 border-b border-grey-light">Juan Pérez</td>
                            <td class="py-2 px-4 border-b border-grey-light">Comercio</td>
                        </tr>
                        <!-- Añade más filas aquí como la anterior para cada autorización pendiente -->
                        <tr class="hover:bg-grey-lighter">
                            <td class="py-2 px-4 border-b border-grey-light"><img src="https://via.placeholder.com/40" alt="Foto Perfil" class="rounded-full h-10 w-10"></td>
                            <td class="py-2 px-4 border-b border-grey-light">María Gómez</td>
                            <td class="py-2 px-4 border-b border-grey-light">Usuario</td>
                        </tr>
                        <tr class="hover:bg-grey-lighter">
                            <td class="py-2 px-4 border-b border-grey-light"><img src="https://via.placeholder.com/40" alt="Foto Perfil" class="rounded-full h-10 w-10"></td>
                            <td class="py-2 px-4 border-b border-grey-light">Carlos López</td>
                            <td class="py-2 px-4 border-b border-grey-light">Usuario</td>
                        </tr>
                        <tr class="hover:bg-grey-lighter">
                            <td class="py-2 px-4 border-b border-grey-light"><img src="https://via.placeholder.com/40" alt="Foto Perfil" class="rounded-full h-10 w-10"></td>
                            <td class="py-2 px-4 border-b border-grey-light">Laura Torres</td>
                            <td class="py-2 px-4 border-b border-grey-light">Comercio</td>
                        </tr>
                        <tr class="hover:bg-grey-lighter">
                            <td class="py-2 px-4 border-b border-grey-light"><img src="https://via.placeholder.com/40" alt="Foto Perfil" class="rounded-full h-10 w-10"></td>
                            <td class="py-2 px-4 border-b border-grey-light">Ana Ramírez</td>
                            <td class="py-2 px-4 border-b border-grey-light">Usuario</td>
                        </tr>
                        <tr class="hover:bg-grey-lighter">
                            <td class="py-2 px-4 border-b border-grey-light"><img src="https://via.placeholder.com/40" alt="Foto Perfil" class="rounded-full h-10 w-10"></td>
                            <td class="py-2 px-4 border-b border-grey-light">Luis Martínez</td>
                            <td class="py-2 px-4 border-b border-grey-light">Comercio</td>
                        </tr>
                    </tbody>
                    </table>
                    <!-- Botón "Ver más" para la tabla de Autorizaciones Pendientes -->
                    <div class="text-right mt-4">
                        <button class="bg-cyan-500 hover:bg-cyan-600 text-white font-semibold py-2 px-4 rounded">
                            Ver más
                        </button>
                    </div>
                </div>

                <!-- Sección 4 - Tabla de Transacciones (disminuida para dispositivos pequeños) -->
                     <div class="bg-white p-4 rounded-md mt-4">
    <h2 class="text-gray-500 text-lg font-semibold pb-4">Transactions</h2>
    <div class="my-1"></div> <!-- Espacio de separación -->
    <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px mb-6"></div> <!-- Línea con gradiente -->
    <table class="w-full table-auto text-sm">
        <thead>
            <tr class="text-sm leading-normal">
                <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">service</th>
                <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">Date</th>
                <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light text-right">Price</th>
            </tr>
        </thead>
        <tbody>
            <tr class="hover:bg-grey-lighter">
                <td class="py-2 px-4 border-b border-grey-light">Bob cut</td>
                <td class="py-2 px-4 border-b border-grey-light">27/07/2023</td>
                <td class="py-2 px-4 border-b border-grey-light text-right">$1500</td>
            </tr>
            <tr class="hover:bg-grey-lighter">
                <td class="py-2 px-4 border-b border-grey-light">nail</td>
                <td class="py-2 px-4 border-b border-grey-light">28/07/2023</td>
                <td class="py-2 px-4 border-b border-grey-light text-right">$2000</td>
            </tr>
            <tr class="hover:bg-grey-lighter">
                <td class="py-2 px-4 border-b border-grey-light">Juan Ramírez</td>
                <td class="py-2 px-4 border-b border-grey-light">29/07/2023</td>
                <td class="py-2 px-4 border-b border-grey-light text-right">$1800</td>
            </tr>
            <tr class="hover:bg-grey-lighter">
                <td class="py-2 px-4 border-b border-grey-light">María Gómez</td>
                <td class="py-2 px-4 border-b border-grey-light">30/07/2023</td>
                <td class="py-2 px-4 border-b border-grey-light text-right">$2100</td>
            </tr>
            <tr class="hover:bg-grey-lighter">
                <td class="py-2 px-4 border-b border-grey-light">Luis González</td>
                <td class="py-2 px-4 border-b border-grey-light">31/07/2023</td>
                <td class="py-2 px-4 border-b border-grey-light text-right">$1700</td>
            </tr>
            <tr class="hover:bg-grey-lighter">
                <td class="py-2 px-4 border-b border-grey-light">Laura Pérez</td>
                <td class="py-2 px-4 border-b border-grey-light">01/08/2023</td>
                <td class="py-2 px-4 border-b border-grey-light text-right">$2400</td>
            </tr>
            <tr class="hover:bg-grey-lighter">
                <td class="py-2 px-4 border-b border-grey-light">Pedro Hernández</td>
                <td class="py-2 px-4 border-b border-grey-light">02/08/2023</td>
                <td class="py-2 px-4 border-b border-grey-light text-right">$1950</td>
            </tr>
            <tr class="hover:bg-grey-lighter">
                <td class="py-2 px-4 border-b border-grey-light">Sara Ramírez</td>
                <td class="py-2 px-4 border-b border-grey-light">03/08/2023</td>
                <td class="py-2 px-4 border-b border-grey-light text-right">$1850</td>
            </tr>
            <tr class="hover:bg-grey-lighter">
                <td class="py-2 px-4 border-b border-grey-light">Daniel Torres</td>
                <td class="py-2 px-4 border-b border-grey-light">04/08/2023</td>
                <td class="py-2 px-4 border-b border-grey-light text-right">$2300</td>
            </tr>
            
        </tbody>
    </table>
    <!-- Botón "Ver más" para la tabla de Transacciones -->
    <div class="text-right mt-4">
        <button class="bg-cyan-500 hover:bg-cyan-600 text-white font-semibold py-2 px-4 rounded">
            Ver más
        </button>
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
        type: 'doughnut',
        data: {
            labels: ['Nuevos', 'Registrados'],
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
            labels: ['Nuevos', 'Registrados'],
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

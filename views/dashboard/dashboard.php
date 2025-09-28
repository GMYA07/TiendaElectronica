 <div class="container header-glass p-4 mt-3 text-center">
     <h2>Administracion</h2>
 </div>
 <div class="container mb-5">
     <div class="row">
         <div class="col-6 col-lg-3">
             <div class="container targetasTop p-2">
                 <div class="container-fluid pt-4">
                     <p class="tituloTargeta">Ventas Totales</p>
                 </div>
                 <div class="row px-3 mt-0">
                     <div class="col-6 d-flex flex-column">
                         <p class="informacionTargeta">$26</p>
                     </div>
                     <div class="col-6 d-flex justify-content-center">
                         <div class="iconoDisenoTargeta text-center ">
                             <i class="fa fa-money" aria-hidden="true"></i>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="col-6 col-lg-3">
             <div class="container targetasTop p-2">
                 <div class="container-fluid pt-4">
                     <p class="tituloTargeta">Productos Vendidos</p>
                 </div>
                 <div class="row px-3 mt-0">
                     <div class="col-6 d-flex flex-column">
                         <p class="informacionTargeta">35</p>
                     </div>
                     <div class="col-6 d-flex justify-content-center">
                         <div class="iconoDisenoTargeta text-center ">
                             <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="col-6 col-lg-3">
             <div class="container targetasTop p-2">
                 <div class="container-fluid pt-4">
                     <p class="tituloTargeta">Productos Totales</p>
                 </div>
                 <div class="row px-3 mt-0">
                     <div class="col-6 d-flex flex-column">
                         <p class="informacionTargeta">4500</p>
                     </div>
                     <div class="col-6 d-flex justify-content-center">
                         <div class="iconoDisenoTargeta text-center ">
                             <i class="fa fa-archive" aria-hidden="true"></i>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="col-6 col-lg-3">
             <div class="container targetasTop p-2">
                 <div class="container-fluid pt-4">
                     <p class="tituloTargeta">Clientes Nuevos</p>
                 </div>
                 <div class="row px-3 mt-0">
                     <div class="col-6 d-flex flex-column">
                         <p class="informacionTargeta">26</p>
                     </div>
                     <div class="col-6 d-flex justify-content-center">
                         <div class="iconoDisenoTargeta text-center ">
                             <i class="fa fa-user" aria-hidden="true"></i>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <div class="container mt-5 mb-5">
     <div class="row">
         <div class="col-8">
             <div class="container contenerdorGraficasTab">
                 <h2 style="text-align: center; color: #333; margin-bottom: 20px;">Ventas por Mes 2024</h2>
                 <div class="container">
                     <canvas id="ventasPorMes" style="width:100%;max-width:700px"></canvas>
                 </div>
             </div>
             <div class="container d-flex flex-row justify-content-center contenedorEstadisticas">
                 <div class="container targetasTop targetaEstadistica p-2">
                     <div class="stat-number" id="promedioMensual">$0</div>
                     <div class="stat-label">Promedio Mensual</div>
                 </div>
                 <div class="container targetasTop targetaEstadistica p-2">
                     <div class="stat-number" id="promedioMensual">$0</div>
                     <div class="stat-label">Mejor Mes</div>
                 </div>
                 <div class="container targetasTop targetaEstadistica p-2">
                     <div class="stat-number" id="promedioMensual">$0</div>
                     <div class="stat-label">Venta Máxima</div>
                 </div>
             </div>
         </div>
         <div class="col-4 ">
             <div class="container contenerdorGraficasTab">
                 <h3 style="text-align: center; color: #333; margin-bottom: 20px;">Productos por categoria</h3>
                 <div class="container">
                     <canvas id="productosPorCategoria" style="width:100%;max-width:300px"></canvas>
                 </div>
             </div>
             <div class="container d-flex justify-content-center align-items-center mt-5 targetasTop targetaBot pt-2">
                 <h3><i class="fa fa-pencil" aria-hidden="true"></i> Administrar Tablas</h3>
             </div>
         </div>
     </div>
 </div>
 <script>
     const meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
     const valoresVentasMeses = [4000, 5000, 1000, 15000, 1000, 3000, 4000, 10000, 12000, 5000, 40000, 100000];


     const graficaLineasVenta = new Chart("ventasPorMes", {
         type: 'line',
         data: {
             labels: meses,
             datasets: [{
                 backgroundColor: "rgba(54, 162, 235, 0.2)",
                 borderColor: "#36a2eb",
                 pointBackgroundColor: "#36a2eb",
                 pointBorderColor: "#ffffff",
                 pointBorderWidth: 2,
                 pointRadius: 5,
                 pointHoverRadius: 8,
                 label: 'Ventas Mensuales ($)',
                 data: valoresVentasMeses,
                 borderWidth: 3,
                 fill: true,
                 tension: 0.4
             }]
         },
         options: {
             responsive: true,
             maintainAspectRatio: false,
             backgroundColor: '#ffffff',
             plugins: {
                 legend: {
                     display: true,
                     position: 'top',
                     labels: {
                         usePointStyle: true,
                         font: {
                             size: 14
                         }
                     }
                 }
             }
         }

     });
 </script>
 <script>
     const barColors = ["#6366f1", "#06b6d4", "#10b981", "#f59e0b", "#ef4444"];
     const categorias = ["Computadoras", "Monitores", "Gaming", "Celulares"];
     const valoresCategoriasMeses = [300, 100, 1000, 35];
     const pastelProductoCategoria = new Chart("productosPorCategoria", {
         type: 'doughnut',
         data: {
             labels: categorias,
             datasets: [{
                 backgroundColor: barColors,
                 borderColor: '#ffffff',
                 borderWidth: 3,
                 hoverOffset: 8,
                 data: valoresCategoriasMeses
             }]
         },
         options: {
             responsive: true,
             maintainAspectRatio: false,
             plugins: {
                 legend: {
                     position: 'bottom',
                     labels: {
                         usePointStyle: true,
                         padding: 20,
                         font: {
                             size: 13
                         }
                     }
                 }
             }

         }
     });
 </script>
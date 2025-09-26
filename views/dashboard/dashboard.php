<div class="container p-3">
    <h2>Dashboard</h2>
</div>
<div class="container">
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
<div class="container">
    <div class="row">
        <div class="col-8">
            <div class="col-6 d-flex justify-content-center">
                <div class="iconoDisenoTargeta text-center ">
                    <i class="fa fa-user" aria-hidden="true"></i>
                </div>
            </div>
            <div class="chart-container" style="position: relative; height:40vh; width:80vw">
                <canvas id="chart2"></canvas>
            </div>
        </div>
        <div class="col-4">
            <div>
                <canvas id="myChart"></canvas>
            </div>
        </div>
    </div>
</div>
<script>
    const ctx = document.getElementById('myChart');
    const ctx2 = document.getElementById('chart2');

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    const chart = new Chart(ct2, {
        type: 'line',
        data: data,
        options: {
            onClick: (e) => {
                const canvasPosition = getRelativePosition(e, chart);

                // Substitute the appropriate scale IDs
                const dataX = chart.scales.x.getValueForPixel(canvasPosition.x);
                const dataY = chart.scales.y.getValueForPixel(canvasPosition.y);
            }
        }
    });
</script>
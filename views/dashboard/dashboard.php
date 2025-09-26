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
            <div class="chart-container" style="position: relative; height:50vh; width:100vh;">
                <canvas id="chart2"></canvas>
            </div>
        </div>
        <div class="col-4">
            <div>
                <canvas id="myChart"></canvas>
            </div>
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

    (async function() {
        const data = [{
                year: 2010,
                count: 10
            },
            {
                year: 2011,
                count: 20
            },
            {
                year: 2012,
                count: 15
            },
            {
                year: 2013,
                count: 25
            },
            {
                year: 2014,
                count: 22
            },
            {
                year: 2015,
                count: 30
            },
            {
                year: 2016,
                count: 28
            },
        ];

        new Chart(
            document.getElementById('chart2'), {
                type: 'line',
                data: {
                    labels: data.map(row => row.year),
                    datasets: [{
                        label: 'Acquisitions by year',
                        data: data.map(row => row.count)
                    }]
                }
            }
        );
    })();
</script>
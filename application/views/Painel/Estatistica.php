<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Estatística</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.html">Estatística</a></li>
                <li class="breadcrumb-item active">Gráficos</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-area me-1"></i>
                    Reflexão do saldo após movimento 
                </div>
                <div class="card-body"><canvas id="myAreaChart" width="100%" height="30"></canvas></div>

            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-chart-bar me-1"></i>
                           Clientes  para uma campanha de adiantamento salarial
                        </div>
                        <div class="card-body"><canvas id="myBarChart" width="100%" height="50"></canvas></div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-chart-pie me-1"></i>
                           Clientes com as idades mais peculiares do conjunto de dados.
                        </div>
                        <div class="card-body"><canvas id="myPieChart" width="100%" height="50"></canvas></div>
                    </div>
                </div>
            </div>
        </div>
    </main>
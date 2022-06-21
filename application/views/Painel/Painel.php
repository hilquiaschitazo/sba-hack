<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Painel</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Painel</li>
            </ol>
            <?php if ($this->session->userdata('id_perfil') == 1) { ?>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                      Total  Saldos e Movimentos
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>Designacao</th>
                                    <th>Tipo</th>
                                    <th>Valor</th>
                                    <th>Data</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Designacao</th>
                                    <th>Tipo</th>
                                    <th>Valor</th>
                                    <th>Data</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php foreach ($dados['movimentos'] as $linha) { ?>
                                    <tr>
                                        <td><?= $linha->designacao; ?></td>
                                        <td><?= $linha->tipo; ?></td>
                                        <td><?= number_format($linha->valor, 2, ',', '.') ?></td>
                                        <td><?= date('d-m-Y', strtotime($linha->data)); ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            <?php    } else { ?>
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-body">Conta Nº <?= $this->session->userdata('cliente_id') ?></div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-warning text-white mb-4">
                            <div class="card-body">C.Score: <?= number_format($dados['CreditScore'], 2, ',', '.') ?> / MCS: <?= number_format($dados['MediaCreditScore'], 2, ',', '.') ?> </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-success text-white mb-4">
                            <div class="card-body">Saldo Contabilístico: <?= number_format($dados['saldo'], 2, ',', '.') ?> </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-danger text-white mb-4">
                            <div class="card-body">Saldo Disponivel: <?= number_format($dados['saldo'], 2, ',', '.') ?></div>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Saldos e Movimentos
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>Designacao</th>
                                    <th>Tipo</th>
                                    <th>Produto</th>
                                    <th>Valor</th>
                                    <th>Data</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Designacao</th>
                                    <th>Tipo</th>
                                    <th>Produto</th>
                                    <th>Valor</th>
                                    <th>Data</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php foreach ($dados['movimentos'] as $linha) { ?>
                                    <tr>
                                        <td><?= $linha->designacao; ?></td>
                                        <td><?= $linha->tipo; ?></td>
                                        <td><?= $linha->produto; ?></td>
                                        <td><?= number_format($linha->valor, 2, ',', '.') ?></td>
                                        <td><?= date('d-m-Y', strtotime($linha->data)); ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            <?php    } ?>

        </div>
    </main>
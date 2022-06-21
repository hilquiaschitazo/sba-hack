<div id="layoutSidenav_content">
    <main>
        <?php if ($this->uri->segment(3) == 1) { ?>
            <div class="row">
                <div class="col-xl-12 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">Crédito Solicitado! </div>
                    </div>
                </div>
            </div>
        <?php } else { ?>
            <?php if (number_format($dados['CreditScore'], 2, ',', '.') > number_format($dados['MediaCreditScore'])) { ?>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Solicitar Crédito</h1>
      
                    <div class="card mb-12">
                        <h1 class="mt-4"></h1>
                        <form action="<?= base_url() ?>painel/submetercredito" method="post">
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Tipo De Crédito:</label>
                                            <select class="form-control" name="tipo" required>
                                                <option value="1">Crédito Pessoal</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Montante Total do Crédito:</label>
                                            <input type="text" name="montante" onkeyup="calculaCredito()" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Duração do Contrato:</label>
                                            <select class="form-control" name="duracao" onclick="calculaCredito()" required>
                                                <option value="1">12 meses</option>
                                                <option value="2">24 meses</option>
                                                <option value="3">48 meses</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Taxa de juro anual nominal (TAN): </label>
                                            <input type="text" name="taxa" class="form-control" value="10" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Total rembolso mensal: </label>
                                            <input type="text" name="totalmensal" class="form-control" value="0,00" readonly>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Total rembolso: </label>
                                            <input type="text" name="totalrembolso" class="form-control" value="0,00" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="mt-4 mb-0">
                                <div class="d-grid">
                                    <button class="btn btn-primary btn-block">Solicitar</button>
                                </div>
                        </form>
                    </div>
                </div>
            <?php } else { ?>
                <div class="row">
                    <div class="col-xl-12 col-md-6">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-body">Não pode solicitar crédito por possuir um CreditScore inferior a média! <br>CreditScore: <?=number_format($dados['CreditScore'],2,',','.') ?> / MCS: <?=number_format($dados['MediaCreditScore'],2,',','.') ?>  </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        <?php } ?>
    </main>

    <script>
        $(function() {

            calculaCredito();

        });

        function calculaCredito() {

            if (parseFloat($('[name=montante]').val()) > 0) {
                $('[name=totalmensal]').val((parseFloat($('[name=montante]').val()) * (parseFloat($('[name=taxa]').val()) / 100) * parseFloat($('[name=duracao]').val())).toFixed(2));
                $('[name=totalrembolso]').val((parseFloat($('[name=montante]').val()) + (parseFloat($('[name=montante]').val()) * (parseFloat($('[name=taxa]').val()) / 100) * parseFloat($('[name=duracao]').val())).toFixed(2)));
            }
        }
    </script>
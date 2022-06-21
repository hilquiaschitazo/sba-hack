<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <a class="nav-link" href="<?= base_url() ?>painel">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Painel
                    </a>
                    <div class="sb-sidenav-menu-heading">Interface</div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Serviços
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <?php if ($this->session->userdata('id_perfil') == 1) { ?>
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="<?= base_url() ?>painel/estatistica">Estatística</a>
                            </nav>
                        <?php } else { ?>
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="<?= base_url() ?>painel/solicitarcredito">Solicitar Crédito</a>
                            </nav>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </nav>
    </div>
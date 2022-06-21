<?php

defined('BASEPATH') or exit('No direct script access allowed');

class PainelController extends CI_Controller
{

    //Instacia
    public function __construct()
    {
        parent::__construct();
        $this->verificar_sessao();
        $this->load->model('PainelModel', 'base');
        $this->load->model('UserModel', 'baseuser');
    }


    //Verificar sessão
    public function verificar_sessao()
    {
        if ($this->session->userdata('auth') == false) {
            redirect('login');
        }
    }

    public function index()
    {

        if ($this->session->userdata('id_perfil') == 1) {
            $dados['dados'] =
                array(
                    "movimentos" => $this->base->getAllMovimentos(),
                );
        } else {

            $CreditScore = 0;
            $TotalCreditScore = 0;
            $MediaCreditScore = 0;
            $qtd = 0;
            foreach ($this->base->getClientes() as $key => $value) {
                $qtd++;
                $TotalCreditScore += floatval($value->CreditScore);
                if ($this->session->userdata('cliente_id') == $value->CustomerId) {
                    $CreditScore = $value->CreditScore;
                }
            }
            $MediaCreditScore = $TotalCreditScore / $qtd;

            $saldo = 0;
            foreach ($this->base->getMovimentos($this->session->userdata('cliente_id')) as $key => $value) {
                $saldo += floatval($value->valor);
            }

            $dados['dados'] =
                array(
                    "movimentos" => $this->base->getMovimentos($this->session->userdata('cliente_id')),
                    "saldo" => $saldo,
                    "CreditScore" => $CreditScore,
                    "MediaCreditScore" => $MediaCreditScore
                );
        }
        $this->load->view('Painel/include/cabecalho');
        $this->load->view('Painel/include/menu');
        $this->load->view('Painel/Painel', $dados);
        $this->load->view('Painel/include/rodape');
    }


    public function solicitarcredito()
    {

        $CreditScore = 0;
        $TotalCreditScore = 0;
        $MediaCreditScore = 0;
        $qtd = 0;
        foreach ($this->base->getClientes() as $key => $value) {
            $qtd++;
            $TotalCreditScore += floatval($value->CreditScore);
            if ($this->session->userdata('cliente_id') == $value->CustomerId) {
                $CreditScore = $value->CreditScore;
            }
        }
        $MediaCreditScore = $TotalCreditScore / $qtd;

        $dados['dados'] =
            array(
                "CreditScore" => $CreditScore,
                "MediaCreditScore" => $MediaCreditScore
            );
        $this->load->view('Painel/include/cabecalho');
        $this->load->view('Painel/include/menu');
        $this->load->view('Painel/SolicitarCredito', $dados);
        $this->load->view('Painel/include/rodape');
    }



    public function estatistica()
    {

        $this->load->view('Painel/include/cabecalho');
        $this->load->view('Painel/include/menu');
        $this->load->view('Painel/Estatistica',);
        $this->load->view('Painel/include/rodape');
    }



    public function submetercredito()
    {
        redirect('painel/solicitarcredito/1');
    }


    public function apimovimentos()
    {
        if (sha1($this->session->userdata('cliente_id')) == $this->input->get("_token")) {
            $dados = $this->base->getAllMovimentos();
            exit(json_encode($dados));
        } else {
            echo '401 Unauthorized';
        }
    }

    public function apiuser()
    {
        if (sha1($this->session->userdata('cliente_id')) == $this->input->get("_token")) {
            $dados =  $this->baseuser->listar();
            exit(json_encode($dados));
        } else {
            echo '401 Unauthorized';
        }
    }

    public function userxml()
    {
        if (sha1($this->session->userdata('cliente_id')) == $this->input->get("_token")) {
            $xml = '<?xml version="1.0" encoding="ISO-8859-1"?>';
            $xml .= '<links>';

            foreach ($this->baseuser->listar() as $value) {

                $xml .= '<link>';
                $xml .= '<id>' .  $value->id . '</id>';
                $xml .= '<title>' . $value->email . '</title>';
                $xml .= '<profile>' .  $value->id_perfil . '</profile>';
                $xml .= '</link>';
            }

            $xml .= '</links>';

            header('Content-Type: application/xml');
            header('Content-Disposition: attachment;filename=arquivo.xml');
            header('Cache-Control: max-age=0');
            header('Cache-Control: max-age=1');
            echo $xml;
        } else {
            echo '401 Unauthorized';
        }
    }
}

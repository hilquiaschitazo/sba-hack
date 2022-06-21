<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

//Instacia
    public function __construct() {
        parent:: __construct();
//        $this->verificar_sessao();
        $this->load->model('AgenteModel', 'baseagente');
        $this->load->model('CarteiraModel', 'basecarteira');
        $this->load->model('HistoricoModel', 'basehistorico');
//        $this->load->model('Sistema/HomeModel', 'basehome');
    }

    //Verificar sessão
    public function verificar_sessao() {
        if ($this->session->userdata('logado') == false) {
            redirect('login');
        }
    }

    private function criar_sessao($agente) {
        $dados_sessao['logado'] = true;
        $dados_sessao['nome'] = $agente->nome;
        $dados_sessao['imagem'] = $agente->imagem;
        $dados_sessao['id'] = $agente->id;
        $this->session->set_userdata($dados_sessao);
    }

    public function terminarsessao() {
        $this->session->sess_destroy();
        redirect('login');
    }

    public function arquivo($ficheiro) {
        $formato = array("jpeg", "jpg", "png", "gif");
        $extensao = pathinfo($ficheiro["arquivo"]["name"], PATHINFO_EXTENSION);
        if (in_array($extensao, $formato)) {
            $pasta = "assets/anexo/";
            if ($ficheiro["arquivo"]["tmp_name"] != null) {
                $temp = $ficheiro["arquivo"]["tmp_name"];
                $nome = uniqid() . ".$extensao";
                if (move_uploaded_file($temp, $pasta . $nome)) {
                    return $nome;
                }
            }
            return 'avatar.jpg';
        }
        return 'avatar.jpg';
    }

    //Funcao que efectua o login
    public function autenticar() {
        if (isset($_POST['entrar'])) {
            $email = filter_var($this->input->post('email'), FILTER_SANITIZE_STRING);
            $senha = filter_var($this->input->post('senha'), FILTER_SANITIZE_STRING);
            if ($this->baseagente->autenticar($email, $senha)) {
                $agente = $this->baseagente->autenticar($email, $senha)[0];
                $this->criar_sessao($agente);
                redirect('home');
            } else {
                $dados_sessao['mensagem'] = "Credênciais Inválidas";
                $this->session->set_userdata($dados_sessao);
                redirect('login');
            }
        } else {
            redirect('registar');
        }
    }

    public function cadastraragente() {
        $agente = array(
            "nome" => $this->input->post("nome"),
            "email" => $this->input->post("email"),
            "telefone" => $this->input->post("telefone"),
            "tipo" => $this->input->post("tipo"),
            "nif" => $this->input->post("nif"),
            "senha" => sha1($this->input->post("senha")),
            "imagem" => $this->arquivo($_FILES),
        );
        $this->baseagente->inserir($agente);
        $idagente = $this->db->insert_id();
        $carteira = array(
            "numconta" => $idagente,
            "idagente" => $idagente,
        );
        $this->basecarteira->inserir($carteira);
        redirect('login');
    }

    //Nova 
    public function index() {
        $this->load->view('include/cabecalho');
        $this->load->view('include/menu');
        $this->load->view('Login');
        $this->load->view('include/rodape');
    }

    public function registar() {
        $this->load->view('include/cabecalho');
        $this->load->view('include/menu');
        $this->load->view('Registrar');
        $this->load->view('include/rodape');
    }

}

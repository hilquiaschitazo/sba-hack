<?php

defined('BASEPATH') or exit('No direct script access allowed');

class LoginController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel', 'base');
        $this->load->model('PainelModel', 'basepainel');
    }

    private function criar_sessao($user)
    {
        $dados_sessao['auth'] = true;
        $dados_sessao['cliente_id'] = $user->cliente_id;
        $dados_sessao['email'] = $user->email;
        $dados_sessao['id'] = $user->id;
        $dados_sessao['id_perfil'] = $user->id_perfil;
        $this->session->set_userdata($dados_sessao);
    }

    public function terminarsessao()
    {
        $this->session->sess_destroy();
        redirect('login');
    }

    public function arquivo($ficheiro)
    {
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

    public function autenticar()
    {
        $email = filter_var($this->input->post('email'), FILTER_SANITIZE_STRING);
        $password = filter_var($this->input->post('password'), FILTER_SANITIZE_STRING);
        if ($this->base->autenticar($email, $password)) {
            $user = $this->base->autenticar($email, $password)[0];
            $this->criar_sessao($user);
            redirect('painel');
        } else {
            $dados_sessao['mensagem'] = "Credênciais Inválidas";
            $this->session->set_userdata($dados_sessao);
            redirect('login');
        }
    }

    public function registaruser()
    {
        $dados = array(
            "cliente_id" => $this->input->post("cliente_id"),
            "email" => $this->input->post("email"),
            "password" => sha1($this->input->post("password")),
            "id_perfil" => 0,
        );
        $this->base->inserir($dados);
        redirect('login');
    }

    public function index()
    {
        $this->load->view('Login');
    }

    public function registar()
    {
        $this->load->view('Registar');
    }

}

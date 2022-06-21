<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Recepcionista_model
 *
 * @author Graça Lambi
 */
class UserModel extends CI_Model {

    //put your code here
    public function __construct() {
        parent:: __construct();
    }

    public function autenticar($username, $password) {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('email', $username);
        $this->db->where('password', sha1($password));
        return $this->db->get()->result();
    }
    
        //funcao que insere 
    public function inserir($dados) {
        if ($this->db->insert('user', $dados)) {
            return TRUE;
        }
        return FALSE;
    }

    //funcao que lista 
    public function listar() {
        $this->db->select('*');
        $this->db->from('user');
        return $this->db->get()->result();
    }

    //função actualizar
    public function actualizar($id, $dados) {
        $this->db->where('id', $id);
        if ($this->db->update('user', $dados)) {
            return TRUE;
        }
        return FALSE;
    }

    //funcao que elimina 
    public function eliminar($id) {
        $this->db->where('id', $id);
        if ($this->db->delete('user')) {
            return TRUE;
        }
        return FALSE;
    }

    //funcao  GetId
    public function getId($id) {
        $this->db->select("*");
        $this->db->from("user");
        $this->db->where("id = $id");
        return $this->db->get()->result();
    }

    public function listarmax() {
        return $this->db->query("SELECT * FROM user ")->result();
    }

}

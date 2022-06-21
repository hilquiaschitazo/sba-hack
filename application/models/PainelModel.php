<?php

defined('BASEPATH') or exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description 
 *
 * @author 
 */
class PainelModel extends CI_Model
{

    //put your code here
    public function __construct()
    {
        parent::__construct();
    }
    public function getMovimentos($cliente_id)
    {
        return $this->db->query("SELECT movimentos.*,produtos.designacao'produto' FROM movimentos, produtos
        WHERE cliente_id=$cliente_id
        AND produtos.id=movimentos.produto_id
        ORDER BY data DESC;")->result();
    }

    public function getAllMovimentos()
    {
        return $this->db->query("SELECT * FROM movimentos LIMIT 100;")->result();
    }

    public function getSaldo($cliente_id)
    {
        $this->db->select("valor");
        $this->db->from("movimentos");
        $this->db->where("cliente_id = $cliente_id");
        return $this->db->get()->result();
    }

    public function getClientes()
    {
        $this->db->select("*");
        $this->db->from("clientes");
        return $this->db->get()->result();
    }
}

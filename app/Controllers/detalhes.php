<?php

namespace App\Controllers;

class detalhes extends BaseController
{
    public function index($id_sugestao)
    {
        if(!session()->has('usuario')){
            return redirect()->to($GLOBALS['baseurl']);
        }
        $sugestao = $this->db->table('sugestao')->getWhere([ 'id'=>$id_sugestao ])->getRowArray();
        echo view("detalhes.php", ['sugestao'=>$sugestao]);
    }
    
}
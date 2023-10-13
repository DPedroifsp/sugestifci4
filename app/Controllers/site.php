<?php

namespace App\Controllers;

class site extends BaseController
{
    public function index()
    {
        if(!session()->has('usuario')){
            return redirect()->to($GLOBALS['baseurl']);
        }
        $sugestoes = $this->db->table('sugestao')->orderBy('id', 'desc')->get()->getResultArray();
        echo view("site.php", ['sugestoes'=>$sugestoes]);
    }
    
}
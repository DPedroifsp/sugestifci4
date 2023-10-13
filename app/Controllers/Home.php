<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        if(session()->has('usuario')){
            return redirect()->to($GLOBALS['baseurl'] . '/SugestIF');
        }
        echo view("login.php");
    }
    public function entra()
    {
        $email = $_POST['email'];
        $senha = md5($_POST['senha']);
        $usuario = $this->db->table('usuario')->getWhere([ 'email' => $email, 'senha' => $senha ])->getRowArray();
        if($usuario){
            session()->set('usuario', $usuario);
            return redirect()->to($GLOBALS['baseurl'] . '/SugestIF');
        }else{
            echo "erro conta n achada";
        }
    }
}

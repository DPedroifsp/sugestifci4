<?php

namespace App\Controllers;

class Registra extends BaseController
{
    public function index()
    {
        if(session()->has('usuario')){
            return redirect()->to($GLOBALS['baseurl'] . '/SugestIF');
        }
        echo view("register.php");
    }
    public function registra()
    {
        $tabela = $this->db->table("usuario");
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $email = $_POST['email'];
        $pronturario = $_POST['prontuario'];
        $senha = md5($_POST['senha']);
       $r =  $tabela->insert(
            [
            'nome' => $nome,
            'sobrenome' => $sobrenome,
            'email' => $email,
            'prontuario' => $pronturario,
            'senha' => $senha,
            ]
        );
        if($r){
            $user = array(
                'nome' => $nome,
                'sobrenome' => $sobrenome,
                'email' => $email,
                'prontuario' => $pronturario,
                'senha' => $senha,
            );
            session()->set('usuario', $user);
            return redirect()->to($GLOBALS['baseurl'] . '/SugestIF');
        }else{
            echo "erro ao criar conta";
        }
    }
}
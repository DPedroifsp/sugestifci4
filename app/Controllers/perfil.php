<?php

namespace App\Controllers;

class perfil extends BaseController
{
    public function index()
    {
        if(!session()->has('usuario')){
            return redirect()->to($GLOBALS['baseurl']);
        }
        $perfil = array(
            'nome'=>session()->get('usuario')['nome'],
            'sobrenome'=>session()->get('usuario')['sobrenome'],
            'email'=>session()->get('usuario')['email'],
            'prontuario'=>session()->get('usuario')['prontuario'],
        );
        echo view("perfil.php", ["usuario"=>$perfil]);
    }
    public function altera()
    {
        $tabela = $this->db->table("usuario");
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $email = $_POST['email'];
        $r =  $tabela->update(
            [
            'nome' => $nome,
            'sobrenome' => $sobrenome,
            'email' => $email,
            ]
        );
        $user = array(
            'nome' => $nome,
            'sobrenome' => $sobrenome,
            'email' => $email,
            'prontuario' => session()->get('usuario')['prontuario'],
            'senha' => session()->get('usuario')['senha'],
        );
        session()->set('usuario', $user);
        return redirect()->to($GLOBALS['baseurl'] . '/SugestIF/Perfil');
    }
    
}
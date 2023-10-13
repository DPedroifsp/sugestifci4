<?php

namespace App\Controllers;

class sugira extends BaseController
{
    public function index()
    {
        if(!session()->has('usuario')){
            return redirect()->to($GLOBALS['baseurl']);
        }
        echo view("criasugestao.php",['msg'=>'']);
    }
    public function sugere()
    {
        $tabela = $this->db->table('sugestao');
        $titulo = $_POST['nomesugestao'];
        $areamelhora = $_POST['areamelhora'];
        $sugestao = $_POST['sugestao'];
        $nomeCriador = session()->get('usuario')['nome'];
        $usuario = $this->db->table('usuario')->getWhere([ 'email' => session()->get('usuario')['email'], 'senha' => session()->get('usuario')['senha'] ])->getRowArray();
        $idcriador = $usuario['id'];
        $r = $tabela->insert([
            'id_usuario'=>$idcriador,
            'nome_usuario'=>$nomeCriador,
            'nome'=>$titulo,
            'areamelhora'=>$areamelhora,
            'sugestao'=>$sugestao,
        ]);
        if($r){
            return redirect()->to($GLOBALS['baseurl'] . '/SugestIF');
        }else{
            echo view("criasugestao.php", ['msg'=>"não foi possivel criar a sugestao"]);
        }
    }
    
}
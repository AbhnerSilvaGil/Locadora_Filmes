<?php
class filme
{
    /*atributos = campos tablela*/
    public id;
    public nome;
    public historia;
    public ano_lancamento;

    /*métodos = funcionalidade entre seu sistema e o banco de dados*/

    public function listar(){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=locadora_filmes","root","");
        $query = "SELECT * FROM tb_filmes";

        /* usa quando precisa trazer informações do banco de dados */
        $resultado = $conexao->query($query);
        $listar = $resultado->fetchAll();

        return $listar;
    }
    public function criar(){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=locadora_filmes","root","");
    }
    public function alterar(){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=locadora_filmes","root","");
    }
    public function excluir(){
        $conexao = new PDO("mysql:host=127.0.0.1;dbname=locadora_filmes","root","");
    }
}
?>
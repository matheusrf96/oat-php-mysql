<?php

class Veiculo{
    private $id;
    private $nome;
    private $descricao;
    private $foto;
    private $valor;
    private $tipo;

    public function __construct($nome, $descricao, $valor, $tipo){
        if(strlen($nome) >= 45){
            $this->nome = substr($nome, 0, 41)."...";
        }
        else{
            $this->nome = $nome;
        }

        if(strlen($descricao) >= 1000){
            $this->descricao = substr($descricao, 0, 996)."...";
        }
        else{
            $this->descricao = $descricao;
        }

        $this->foto = "../default.jpg";

        if($valor < 0.0){
            $this->valor = 0.0;
        }
        else{
            $this->valor = $valor;
        }

        if($tipo == 'C' || $tipo == 'M'){
            $this->tipo = $tipo;
        }
        else{
            $this->tipo = '?';
        }
    }

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        if(strlen($nome) >= 45){
            $this->nome = substr($nome, 0, 41)."...";
        }
        else{
            $this->nome = $nome;
        }
    }

    public function getDescricao()
    {
        return $this->descricao;
    }
    public function setDescricao($descricao)
    {
        if(strlen($descricao) >= 1000){
            $this->descricao = substr($descricao, 0, 996)."...";
        }
        else{
            $this->descricao = $descricao;
        }
    }

    public function getFoto()
    {
        return $this->foto;
    }
    public function setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }

    public function getValor()
    {
        return $this->valor;
    }
    public function setValor($valor)
    {
        if($valor < 0.0){
            $this->valor = 0.0;
        }
        else{
            $this->valor = $valor;
        }
    }

    public function getTipo()
    {
        return $this->tipo;
    }
    public function setTipo($tipo)
    {
        if($tipo == 'C' || $tipo == 'M'){
            $this->tipo = $tipo;
        }
        else{
            $this->tipo = '?';
        }
    }
}
?>
<?php
class Usuario{ 
    private  $id;
    private  $nome;
    private  $sobrenome;
    private  $idade;
    private  $cep;
    private  $estado;
    private  $numero;
    private  $Rua;
    private  $cidade;
    private  $Complemento;
    private  $cpf;
    private  $genero; 

    public function getId(){
        return $this ->id;
    }

    public function getNome(){
        return $this->nome;     
    }
    public function getSobrenome(){
        return $this->sobrenome;
    }
    public function getIdade(){
        return $this->idade;
    }
    public function getCep(){
        return $this->cep;
    }
    public function getnumero(){
        return $this->numero;
    }
    public function getEstado(){
        return $this->estado;
    }
    public function getRua(){
        return $this->rua;
    }
    public function getCidade(){
        return $this->cidade;
    }
    public function getComplemento(){
        return $this->complemento;
    }
    public function getCPF(){
        return $this->cpf;
    }
    public function getGenero(){
        return $this->genero;
    }

    public function setID($id){
        $this->id = $id;
    }
    public function setNome($nome){
        $this->nome = $nome;     
    }
    public function setSobrenome($sobrenome){
        $this->sobrenome = $sobrenome;
    }
    public function setIdade($idade){
        $this->idade = $idade;
    }
    public function setRua($rua){
        $this->rua = $rua;
    }
    public function setCep($cep){
        $this->cep = $cep;
    }
    public function setCidade($cidade){
        $this->cidade = $cidade;
    }  
    public function setnumero($numero){
            $this->numero = $numero;
    }
    public function setComplemento($Complemento){
        $this->complemento = $Complemento;
    }
    public function setCPF($cpf){
        $this->cpf = $cpf;
    }
    public function setGenero($genero){
        $this->genero = $genero;
    }
    public function setEstado($estado){
        $this->estado = $estado;
    }

    
}

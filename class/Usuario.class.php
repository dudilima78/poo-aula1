<?php
class Usuario {
    //declaração dos atributos da classe
    //ENCAPISULAMENTO - se o atributo é public ( - ),
    //private ( + ) ou protected ( # )
    public $nome;
    public $email;
    public $celular;

    // function no PHP OO são os métodos
    function getUsuario($nome,$email,$celular){
        return "Nome do Cliente: {$nome} tem o e-mail: {$email} e celular:{$celular}" ;
    }

    function exibirCliente(){
        echo "Nome do Cliente: {$nome}<br>";
        echo "E-mail: {$email}<br>";
        echo "<hr>";
    }
}
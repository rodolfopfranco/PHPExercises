<?php
//Objeto criado:
class ContaBancaria{
    //modificadores de acesso:
    //public - private - protected
    private $nomeTitular;
    private $numeroAgencia;
    private $numeroConta;
    private $saldo;
    private $banco;

    //Construtor:
    public function __construct($banco, $nomeTitular, $numeroAgencia, $numeroConta, $saldo){
        $this->banco = $banco;
        $this->nomeTitular = $nomeTitular;
        $this->numeroAgencia = $numeroAgencia;
        $this->saldo = $saldo;
        $this->numeroConta = $numeroConta;
        echo "Objeto criado";
        //pode ser passado os atributos, criar banco, etc
    }

    //Métodos:
    public function obterSaldo(){
        return $this->saldo;
    }

    public function depositar($valor){
        $this->saldo+=$valor;
    }

    public function sacar($valor){
        $this->saldo -= $valor;
    }

}

//Instanciando:
$conta = new ContaBancaria(
    'Banco do Brasil',
    'Gustavo Fraga',
    '8244',
    '12345',
    300.00
);

echo $conta->obterSaldo();
?>
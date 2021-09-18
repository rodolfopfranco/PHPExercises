<?php
//Objeto criado:
class ContaBancaria{
    //modificadores de acesso:
    //public - private - protected
    //Pode se declarar o tipo do atributo assim:
    /**
     * @var string
     */
    private $nomeTitular;
    //ou assim:
    private string $numeroAgencia;
    /**
     * @var string
     */
    private $numeroConta;
    /**
     * @var float
     */
    private $saldo;
    /**
     * @var string
     */
    private $banco;

    //Construtor:
    //Recomendado definir os tipos das variáveis:
    public function __construct(
        string $banco,
        string $nomeTitular,
        string $numeroAgencia,
        string $numeroConta,
        float $saldo){
            
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
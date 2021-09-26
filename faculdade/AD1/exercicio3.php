<?php
class Aluno {
    private $nome, $cr;
    public function __construct(string $nome, float $cr){
        $this->nome=$nome;
        $this->cr=$cr;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getCr(){
        return $this->cr;
    }
    public function inscreveDisciplina($disciplina){
        $disciplina->inscreveAluno($this);
    }
}

class Disciplina {
    private $alunosInscritos = array();
    private $nomeDisciplina;

    public function __construct(string $nomeDisciplina){
        $this->nomeDisciplina=$nomeDisciplina;
    }

    public function getAlunosInscritos(){
        return $this->alunosInscritos;
    }

    public function inscreveAluno(Aluno $aluno){
        $this->alunosInscritos[] = $aluno;
    }

    public function ordenaAlunos(){
        usort($this->alunosInscritos, fn($a, $b) => strcmp($a->getCr(), $b->getCr()));
    }
    
}

class TurmasDisciplina {
    private $turmas = array(); // array de arrays de turmas
    private $nmax;

    public function __construct(int $nmax){
        $this->nmax=$nmax;
    }

    public function imprimeTurmas(){    
        $numero = 1;
        echo "Existem ".count($this->turmas)." Turmas:<p />";
        foreach($this->turmas as $turma){
            echo "Turma ".$numero.": <br/>";
            foreach($turma->getAlunos() as $aluno){
                echo "Nome: ".$aluno->getNome()." / CR: ".$aluno->getCr()."<br/>";
            }
            echo"<p/>";
            $numero++;
        }
    }

    public function calculaTurmas($disciplina){
        $turma = new Turma();
        $nAtual = 0;
        //Ordena por CR:
        $disciplina->ordenaAlunos();
        //Joga na ordem de maior pro menor os alunos na turma:
        for($i=count($disciplina->getAlunosInscritos())-1;$i>-1;$i--){
            //Se a turma lotou, salva ela e cria uma nova:
            if ($nAtual == $this->nmax){
                $this->turmas[]=$turma;
                $turma = new Turma();
                $nAtual = 0;
            }
            //Adiciona então o aluno:
            $turma->adicionaAluno($disciplina->getAlunosInscritos()[$i]);
            $nAtual++;
        }
        //Fecha jogando a turma restante na lista de turmas:
        $this->turmas[]=$turma;
    }
}

class Turma {
    private $alunos = array();
    public function adicionaAluno(Aluno $aluno){
        $this->alunos[]=$aluno;
    }
    public function getAlunos(){
        return $this->alunos;
    }
}

$aluno1 = new Aluno ("João", 8.5);
$aluno2 = new Aluno ("Maria", 9.5);
$aluno3 = new Aluno ("Ana", 9.0);

//...
$disciplina1 = new Disciplina("PAW");
$turmasDisciplina = new TurmasDisciplina(2); // $nmax = 2
$aluno1->inscreveDisciplina($disciplina1);
$aluno2->inscreveDisciplina($disciplina1);
$aluno3->inscreveDisciplina($disciplina1);
$turmasDisciplina->calculaTurmas($disciplina1);
$turmasDisciplina->imprimeTurmas();
// Imprime na tela o número de turmas e as listas de alunos com
//respectivos CRs
?>
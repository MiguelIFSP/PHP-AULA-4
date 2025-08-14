<?php
class Aluno {
    public $nome;
    public $dataNascimento;
    public $matricula;
    public $curso;

    public function __construct($nome, $dataNascimento, $matricula, $curso) {
        $this->nome = $nome;
        $this->dataNascimento = $dataNascimento;
        $this->matricula = $matricula;
        $this->curso = $curso;
    }

    public function idade() {
        $dataNasc = new DateTime($this->dataNascimento);
        $dataAtual = new DateTime();
        $idade = $dataAtual->diff($dataNasc)->y;
        return $idade;
    }
}
?>
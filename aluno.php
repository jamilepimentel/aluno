<?php

function capturarDadosAlunos($dados) {
    $alunos = [];

    for ($i = 1; $i <= 10; $i++) {
        $nome = $dados["nome$i"];
        $nota = floatval($dados["nota$i"]);

        $alunos[] = ["nome" => $nome, "nota" => $nota];
    }

    return $alunos;
}

function calcularMediaNotas($alunos) {
    $somaNotas = 0;

    foreach ($alunos as $aluno) {
        $somaNotas += $aluno['nota'];
    }

    return $somaNotas / count($alunos);
}

function encontrarAlunoComMaiorNota($alunos) {
    $maiorNota = 0;
    $melhorAluno = "";

    foreach ($alunos as $aluno) {
        if ($aluno['nota'] > $maiorNota) {
            $maiorNota = $aluno['nota'];
            $melhorAluno = $aluno['nome'];
        }
    }

    return [$melhorAluno, $maiorNota];
}

$alunos = capturarDadosAlunos($_POST);

$media = calcularMediaNotas($alunos);

list($melhorAluno, $maiorNota) = encontrarAlunoComMaiorNota($alunos);

echo "A média de notas da turma é: " . number_format($media, 2) . "<br>";
echo "O aluno com a maior nota é: " . $melhorAluno . " com a nota " . $maiorNota . "<br>";
?>
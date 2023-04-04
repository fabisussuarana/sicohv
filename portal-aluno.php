<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/padrao.css">
    <link rel="stylesheet" href="css/portal-aluno.css">
    <title>SICOHV</title>
</head>
<body>
    <!--Início da página-->
    <div class="cabecalho">
        <div id="logo">
            <a href="index.html"><img src="img/if.png"></a>
        </div>
        <div id="portal">
            <h1>SICOHV</h1>
        </div>
    </div>
    
    <div class="row" id="turma">
        <h2>IPI - 3°</h2>
    </div>
    <!--Horários da turma-->
    <div class="row">
        <?php

        // Conexão com o banco (dados da conexão armazendados na variável $conn)
        require 'conexao.php';

        // Consulta sql:
        $sql = "SELECT hora,
            (SELECT materia FROM materias WHERE materias.id = ipi3.seg) AS seg,
            (SELECT materia FROM materias WHERE materias.id = ipi3.ter) AS ter,
            (SELECT materia FROM materias WHERE materias.id = ipi3.qua) AS qua,
            (SELECT materia FROM materias WHERE materias.id = ipi3.qui) AS qui,
            (SELECT materia FROM materias WHERE materias.id = ipi3.sex) AS sex,
            (SELECT materia FROM materias WHERE materias.id = ipi3.sab) AS sab
            FROM ipi3";

        $result = $conn->query($sql);

        // Construção do html da tabela dos horários
        $table = '<table id="horarios"><tr>';
        $columns = ['hora', 'seg', 'ter', 'qua', 'qui', 'sex', 'sab'];
        for ($i = 0; $i < 7; $i++) {
            $table .= '<th>' . $columns[$i] . '</th>';
        }
        $table .= '<tr><td colspan="7">MATUTINO<td></tr>';        
        while($row = $result->fetch()) {
            $table .= '<tr>';
            for ($i = 0; $i < 7; $i++) {
                $table .= '<td>' . $row[$columns[$i]] . '</td>';
            }
            $table .= '</tr>';
            if ($row['hora'] == '08:40') $table .= '<tr><td>09:30</td><td colspan="6">INTERVALO<td></tr>';
            else if ($row['hora'] == '11:30') $table .= '<tr><td colspan="7">VESPERTINO<td></tr>';
            else if ($row['hora'] == '15:10') $table .= '<tr><td>16:00</td><td colspan="6">INTERVALO<td></tr>';
        }
        $table .= '</table>';

        echo $table;

        ?>
    </div>
</body>
</html>
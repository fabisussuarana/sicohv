<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/padrao.css">
    <link rel="stylesheet" href="css/admin.css">
    <title>SICOHV</title>
</head>
<body>
    <!--logo da página-->
    <div class="cabecalho">
        <div id="logo">
            <a href="index.html"><img src="img/if.png"></a>
        </div>
        <div id="portal">
            <h1>SICOHV</h1>
        </div>
    </div>

    <!--ações-->
    <div class="row">
        <table>
            <tr>
                <th>ID</th>
                <th>Usuario</th>
                <th>Senha</th>
                <th>Email</th>
                <th>Matricula</th>
                <th></th>
                <th></th>
            </tr>
            <?php
            include('conexao.php');
            $sql = "SELECT * FROM profs";
            $result = $conn->query($sql);
            $registers = $result->fetchAll();
            $num_registers = count($registers);
            $column_names = array('usuario', 'senha', 'email', 'matricula');
            for ($i = 0; $i < $num_registers; $i++) {
                $tr = '<tr>';
                $tr .= '<form method="post" action="alterar-banco.php">';
                $tr .= '<td><input type="text" name="id" value="' . $registers[$i][0] . '" readonly></td>';
                for ($j = 1; $j < 5; $j++) {
                    $tr .= '<td><input type="text" name="' . $column_names[$j - 1] . '" value="' . $registers[$i][$j] . '"></td>';
                }
                $tr .= '<td class="atualiza"><input type="submit" name="update" value="Atualizar"></td>';
                $tr .= '<td class="deleta"><input type="submit" name="delete" value="Deletar"></td>';
                $tr .= '</form>';
                $tr .= '</tr>';
                echo $tr;
            }
            ?>
        </table>
    </div>
</body>
</html>
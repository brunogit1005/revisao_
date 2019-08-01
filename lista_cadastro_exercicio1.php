<?php session_start(); ?>
<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8" />
        <title> Lista pessoas </title>
    </head>
    <body>
        <?php
                $email = $_SESSION["email"];
                $nome = $_SESSION["nome"];
                $sexo = $_SESSION["sexo"];
                $escolar = $_SESSION["escolar"];
                $lingua = $_SESSION["lingua"];
                
                echo "
                        <table class=\"tabela1\" width=\"30%\" border=\"1\".
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Sexo</th>
                                <th>Escolar</th>
                                <th>Lingua</th>
                            </tr>
                        </thead>
                        <tbody>";
                for($i=0;$i<sizeof($_SESSION["nome"]);$i++)
                {
                    echo "<tr>
                                <td>".$nome[$i]."</td>
                                <td>".$email[$i]."</td>
                                <td>".$sexo[$i]."</td>
                                <td>".$escolar[$i]."</td>
                                <td>".$lingua[$i]."</td>
                            </tr>";
                }
                echo " </tbody>
                        <table>
                    ";
        ?>
    </body>
    </html>
<?php
require_once('Funcionario.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/jquery.js"></script>
    <title>Projeto Empresa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="img/logo.png" rel="icon" />
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
    <ul class="nav nav-tabs">
        <img src="img/logo.png" class="logo">
        <li class="nav-item" style="cursor: pointer;">
            <a class="nav-link active" id="cadFuncionario" aria-current="page">Cadastrar Funcionário</a>
        </li>
        <li class="nav-item" style="cursor: pointer;">
            <a class="nav-link" id="calcSalario">Calcular Salário</a>
        </li>
        <li class="nav-item" style="cursor: pointer;">
            <a class="nav-link" id="calcAumentarSal">Calcular Aumento de Salário</a>
        </li>
        <li class="nav-item" style="cursor: pointer;">
            <a class="nav-link" id="showData">Mostrar Dados</a>
        </li>
    </ul>
    <div class="container">
        <div class="row">
            <div class="form-style-8">
                <form name="cadFuncionario" method="POST">
                    <div class="col-md-12">
                        <div class="funcao">
                            <div class="cadFunc">
                                <h2>Cadastrar Funcionário</h2>
                                <label for="nome">Nome:</label>
                                <input type="text" name="nome" placeholder="Digite o nome">
                                <label for="cidade">Cidade:</label>
                                <input type="text" name="cidade" placeholder="Digite a cidade">
                                <label for="salHora">Salário por Hora:</label>
                                <input type="text" name="salHora" placeholder="Digite o salário por hora">
                                <label for="horasTrab">Horas Trabalhadas:</label>
                                <input type="text" name="horasTrab" placeholder="Digite as horas trabalhadas">
                                <div class="btnEnviar">
                                    <input type="submit" value="Cadastrar" name="btnCadastrar">
                                </div>
                                <?php
                                if (!empty($_POST['nome']) && !empty($_POST['cidade']) && !empty($_POST['salHora']) && !empty($_POST['horasTrab']) && isset($_POST["btnCadastrar"])) {
                                    $funcionarioCadastrado = new Funcionario();
                                    $funcionarioCadastrado->setNome($_POST['nome']);
                                    $funcionarioCadastrado->setCidade($_POST['cidade']);
                                    $funcionarioCadastrado->setSalHora($_POST['salHora']);
                                    $funcionarioCadastrado->setHorasTrab($_POST['horasTrab']);
                                    $funcionarioCadastrado->setSalarioFinal($_POST['salHora'] * $_POST['horasTrab']);
                                    echo "<div style='text-align:center;'>O funcionário " . $funcionarioCadastrado->getNome() . " foi cadastrado.</div>";
                                } else if (isset($_POST['btnCadastrar'])) {
                                    echo "<div style='text-align:center;'>Todos os dados devem ser preenchidos.</div>";
                                }
                                ?>
                            </div>
                </form>
                <form name="aumentoSal" method="POST">
                    <div class="aumentoSal">
                        <h2>Calcular aumento de salário</h2>
                        <label for="nome">Nome:</label>
                        <input type="text" name="nome" class="apenasLeitura" value="<?php echo $funcionarioCadastrado->getNome() ?>" readonly>
                        <label for="cidade">Cidade:</label>
                        <input type="text" name="cidade" class="apenasLeitura" value="<?php echo $funcionarioCadastrado->getCidade() ?>" readonly>
                        <label for="salHora">Salário por Hora:</label>
                        <input type="text" name="salHora" value="<?php echo $funcionarioCadastrado->getSalHora() ?>">
                        <label for="horasTrab">Horas Trabalhadas:</label>
                        <input type="text" name="horasTrab" value="<?php echo $funcionarioCadastrado->getHorasTrab() ?>">
                        <label for="salarioFinal">Salario Final:</label>
                        <input type="text" name="salarioFinal" value="<?php echo $funcionarioCadastrado->getSalarioFinal() ?>">
                        <div class="btnEnviar">
                            <input type="submit" value="DarAumento" name="btnCadastrar">
                        </div>
                        <?php
                        if (isset($_POST["btnCadastrar"])) {
                            $funcionarioCadastrado->setSalHora($_POST['salHora']);
                            $funcionarioCadastrado->setHorasTrab($_POST['horasTrab']);
                        }
                        ?>
                    </div>
                </form>
                <form name="calcSal" method="POST">
                    <div class="calcSal">
                        <h2>Calcular Salário</h2>
                        <label for="nome">Nome:</label>
                        <input type="text" name="nome" class="apenasLeitura" value="<?php echo $funcionarioCadastrado->getNome() ?>" readonly>
                        <label for="cidade">Cidade:</label>
                        <input type="text" name="cidade" class="apenasLeitura" value="<?php echo $funcionarioCadastrado->getCidade() ?>" readonly>
                        <label for="salHora">Salário por Hora:</label>
                        <input type="text" name="salHora" value="<?php echo $funcionarioCadastrado->getSalHora() ?>">
                        <label for="horasTrab">Horas Trabalhadas:</label>
                        <input type="text" name="horasTrab" value="<?php echo $funcionarioCadastrado->getHorasTrab() ?>">
                        <label for="salarioFinal">Salario Final:</label>
                        <input type="text" name="salarioFinal" value="<?php echo $funcionarioCadastrado->getSalarioFinal() ?>">
                        <?php
                        echo "<div style='text-align:center;'>Salário calculado automaticamente.</div>";
                        ?>
                    </div>
                </form>
                <div class="showData">
                    <h2>Mostrar Dados</h2>
                    <?php
                    echo $funcionarioCadastrado->mostrarDados();
                    ?>
                </div>
            </div>

        </div>
        </form>
    </div>
    </div>
    </div>
</body>

</html>
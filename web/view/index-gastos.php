<?php
session_start();

require_once '../assets/dist/functions/funcoes.php';
//require '../assets/dist/functions/verifica_login.php';


?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>FinAI</title>

    <!-- Styles -->
    <link rel="stylesheet" href="../assets/dist/css/home.css" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />

    <!-- Booststrap Icons -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />


  <body>
    <!-- =============== Navigation ================ -->
    <div class="container">
      <div class="navigation">
        <ul>
          <li>
            <a href="inicio.php">
              <span class="logo">
                <img src="../assets/dist/img/logofinAI.png" alt=" Logo">
              </span>
              <span class="title"></span>
            </a>
          </li>

          <li>
            <a href="inicio.php">
              <span class="icon">
               <i class="bi bi-house"></i>
              </span>
              <span class="title">Início</span>
            </a>
          </li>

          <li>
            <a href="#">
              <span class="icon">
               <i class="bi bi-activity"></i>
              </span>
              <span class="title">Despesas</span>
            </a>
          </li>

          <li>
            <a href="#">
              <span class="icon">
               <i class="bi bi-clipboard-data"></i>
              </span>
              <span class="title">Limites Gastos</span>
            </a>
          </li>

          <li>
            <a href="#">
              <span class="icon">
                <i class="bi bi-graph-up"></i>
              </span>
              <span class="title">Extrato</span>
            </a>
          </li>

          <li>
            <a href="ai-financeira.php">
              <span class="icon">
                <i class="bi bi-coin"></i>
              </span>
              <span class="title">AI Financeira</span>
            </a>
          </li>

          <li>
            <a href="#">
              <span class="icon">
                <i class="bi bi-gear"></i>
              </span>
              <span class="title">Configurações</span>
            </a>
          </li>

          <li>
            <a href="../assets/dist/functions/sair.php">
              <span class="icon">
               <i class="bi bi-box-arrow-right"></i>
              </span>
              <span class="title">Sair</span>
            </a>
          </li>
        </ul>
      </div>

      <!-- ========================= Main ==================== -->
      <div class="main">
        <div class="topbar">
          <div class="toggle">
            <ion-icon name="menu-outline"></ion-icon>
          </div>

          <div class="search">
            <label>
              <input type="text" placeholder="Busque informações aqui" />
              <ion-icon name="search-outline"></ion-icon>
            </label>
          </div>

          <div class="user">
            <img src="../assets/dist/img/customer01.jpg" alt="" />
          </div>
        </div>

       

        <!-- ================ Order Details List ================= -->
        <div class="details">
          <div class="recentOrders">
            <div class="cardHeader">
              <h2>Despesas</h2>
              <a href="adicionar-despesa.php" class="btn">Adicionar Despesa</a>
            </div>

            <table>
              <thead>
                <tr>
                  <td>Titulo</td>
                  <td>Valor</td>
                  <td>Data</td>
                  <td>Categoria</td>
                </tr>
              </thead>
              <?php
                                    // codigo inserido do editar-aluno-func.php
                                    require_once '../assets/dist/functions/funcoes.php';

                                    $conexao = criarConexao();
                                   
                                    $sql = "SELECT * FROM despesas WHERE id_usuario = $id_usuario";

                                    echo($sql);
                                    die();


                                    $resultado = mysqli_query($conexao, $sql);
                                    $gastos = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
                                    require_once 'index-gastos.php';
                                    mysqli_close($conexao);

                                    foreach ($usuarios as $usuario) {
                                        echo "<tr>";
                                        echo "<td>" . $usuario['email'] . "</td>";
                                        echo "<td>" . $usuario['nome'] . "</td>";
                                        echo "<td>" . $usuario['cpf'] . "</td>";
                                        echo "<td>" . $usuario['telefone'] . "</td>";
                                        echo "<td>" . $usuario['senha'] . "</td>";
                                        if ($usuario['id_unico'] != 1) {
                                        echo "<td><a href='excluir-admin.php?id_unico=" . $usuario['id_unico'] . "'>Deletar</a></td>";
                                        }
                                    }
                                    ?>
              
            </table>
          </div>

          

    <!-- =========== Scripts =========  -->
    <script src="../assets/dist/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>

  </body>
</html>

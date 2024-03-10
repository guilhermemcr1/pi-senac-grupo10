<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FinAI</title>

    <!-- Styles -->
    <link rel="stylesheet" href="../assets/dist/css/ia-page.css" />


    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet" />

    <!-- Booststrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
   
</head>
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
              <a href="index-gastos.php">
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
              <a href="#">
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

            <main>
                <section id="chat">
                    <div id="mensagens" class="chat-box">
                        <!-- Aqui serão exibidas as mensagens do chat -->
                        <div class="chat-message received">
                            <p>Hello! How can I help you today?</p>
                        </div>
                        <div class="chat-message sent">
                            <p>Hi! I have a question about...</p>
                        </div>
                    </div>
                    <div id="enviar-mensagem" class="user-input">
                        <input type="text" id="texto-mensagem" placeholder="Digite sua mensagem">
                        <button id="botao-enviar">Enviar</button>
                    </div>
                </section>
            </main>
        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="../assets/dist/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>

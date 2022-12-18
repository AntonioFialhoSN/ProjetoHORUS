<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/37957a4d51.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style2.css">
    <script src="mecanismo.js"></script>
    <title>Document</title>
</head>
<body>
    <header>
        <div class="center">
            <div class="logo">
                <h2>Project Hórus</h2>
            </div><!-- logo -->
            <div class="menu">
                <a href="index.html">
                    Home
                </a>
                <a href="index.html#sobre">
                    About
                </a>
                <a href="index.html#conquista">
                    Differential
                </a>
                <a class="btn-menu" href="form.php">
                    Get Started
                </a>
            </div><!-- menu -->
        </div>
        <div class="menu-mobile">
            <i class="fa-solid fa-bars" onclick="mostra_menu()"></i>
            <div class="itens">
                <a href="index.html">
                    Home
                </a><br>
                <a href="index.html#sobre">
                    About
                </a><br>
                <a href="index.html#conquista">
                    Differential
                </a><br>
                <a class="btn-menu" href="form.php">
                    Get Started
                </a>
            </div>
        </div>
    </header>
    <section class="papel">
        <div class="center">
            <form action="conexao.php" method="POST">
                <div class="titulo">
                    Registration Form
                </div>
                <div class="corpo">
                    <input type="name" name="nome" placeholder="Responsible Name"><br>
                    <input type="email" name="email" placeholder="E-mail"><br>
                    <textarea cols="30"  name="texto" rows="5" placeholder="How can we help"></textarea><br>
                    <button type="submit" value="Salvar" > Submit </button>
                </div>
            </form>
        </div>

    </section>
</body>
</html>
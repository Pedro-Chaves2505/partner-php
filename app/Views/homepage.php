<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= APP_NAME?></title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">

    <!-- STYLES -->

    <style {csp-style-nonce}>
        * {
            transition: background-color 300ms ease, color 300ms ease;
            color: #0c0a09
 
        }
        *:focus {
            background-color: rgba(221, 72, 20, .2);
            outline: none;
        }
        html, body {
            color: rgba(33, 37, 41, 1);
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
            font-size: 16px;
            margin: 0;
            padding: 0;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            text-rendering: optimizeLegibility;

        }

        .container {
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
        }

        .display-block{
            display: block;
        }

        header {
            background-color: rgba(247, 248, 249, 1);
            padding: .4rem 0 0;
        }
        .menu {
            padding: .4rem 2rem;
        }

        header ul {
            border-bottom: 1px solid rgba(242, 242, 242, 1);
            list-style-type: none;
            margin: 0;
            overflow: hidden;
            padding: 0;
            text-align: right;
        }
        header li {
            display: inline-block;
        }
        header li a {
            border-radius: 5px;
            color: rgba(0, 0, 0, .5);
            display: block;
            height: 44px;
            text-decoration: none;
        }
        header li.menu-item a {
            border-radius: 5px;
            margin: 5px 0;
            height: 38px;
            line-height: 36px;
            padding: .4rem .65rem;
            text-align: center;
        }
        header li.menu-item a:hover,
        header li.menu-item a:focus {
            background-color: rgba(221, 72, 20, .2);
            color: rgba(221, 72, 20, 1);
        }
        header .logo {
            float: left;
            height: 44px;
            padding: .4rem .5rem;
        }
        header .menu-toggle {
            display: none;
            float: right;
            font-size: 2rem;
            font-weight: bold;
        }
        header .menu-toggle button {
            background-color: rgba(221, 72, 20, .6);
            border: none;
            border-radius: 3px;
            color: rgba(255, 255, 255, 1);
            cursor: pointer;
            font: inherit;
            font-size: 1.3rem;
            height: 36px;
            padding: 0;
            margin: 11px 0;
            overflow: visible;
            width: 40px;
        }
        header .menu-toggle button:hover,
        header .menu-toggle button:focus {
            background-color: rgba(221, 72, 20, .8);
            color: rgba(255, 255, 255, .8);
        }
        header .heroe {
            margin: 0 auto;
            max-width: 1100px;
            padding: 1rem 1.75rem 1.75rem 1.75rem;
        }
        header .heroe h1 {
            font-size: 2.5rem;
            font-weight: 500;
        }
        header .heroe h2 {
            font-size: 1.5rem;
            font-weight: 300;
        }
        .further {
            background-color: rgba(247, 248, 249, 1);
            border-bottom: 1px solid rgba(242, 242, 242, 1);
            border-top: 1px solid rgba(242, 242, 242, 1);
        }
        .further h2:first-of-type {
            padding-top: 0;
        }
        .svg-stroke {
            fill: none;
            stroke: #000;
            stroke-width: 32px;
        }

        textarea{
            width: 800px;
            height: 150px;
            border-radius: 10px;
            resize: none
        }

        input{
            height: 35px;
            width: 350px;
            border-radius: 10px;
            font-size: 18px;
        }

        .create-walk {
            border: 1px solid #737373;
            width: 50%;
            margin: 30px 0px 20px 0px;
            box-shadow: 0px 0px 10px 3px rgba(12, 10, 9, 0.08);
            border-radius: 4px;

        }

        .create-walk h3 {
            margin-left: 38%;
        }

        .create-walk textarea, input, button{
            margin-bottom: 10px
        }

        

        .feed-heading{
            margin-left: 17.5%;
        }

        .walk-card{
            border: 1px solid #78716c;
            border-radius: 30px;
            width: 65%;
            margin-bottom: 15px;
            background-color: #f8f8f8;
            padding: 30px 50px;
            box-sizing: border-box;
            box-shadow: 0px 0px 10px 3px rgba(12, 10, 9, 0.15);

        }

        .walk-card h3{
            font-size: 30px;
            color: #0c0a09;
        }

        .walk-card p {
            font-size: 20px;
            color: #78716c;
        }

        footer {
            background-color: rgba(221, 72, 20, .8);
            text-align: center;
        }
        footer .environment {
            color: rgba(255, 255, 255, 1);
            padding: 2rem 1.75rem;
        }
        footer .copyrights {
            background-color: rgba(62, 62, 62, 1);
            color: rgba(200, 200, 200, 1);
            padding: .25rem 1.75rem;
        }
        @media (max-width: 629px) {
            header ul {
                padding: 0;
            }
            header .menu-toggle {
                padding: 0 1rem;
            }
            header .menu-item {
                background-color: rgba(244, 245, 246, 1);
                border-top: 1px solid rgba(242, 242, 242, 1);
                margin: 0 15px;
                width: calc(100% - 30px);
            }
            header .menu-toggle {
                display: block;
            }
            header .hidden {
                display: none;
            }
            header li.menu-item a {
                background-color: rgba(221, 72, 20, .1);
            }
            header li.menu-item a:hover,
            header li.menu-item a:focus {
                background-color: rgba(221, 72, 20, .7);
                color: rgba(255, 255, 255, .8);
            }
        }
    </style>
</head>
<body>

<!-- HEADER: MENU + HEROE SECTION -->
<header>

    <div class="menu">
        <ul>
            <li class="logo">
                <a href="https://codeigniter.com" target="_blank">
                    <?= APP_NAME?>
                </a>
            </li>
            <li class="menu-toggle">
                <button id="menuToggle">&#9776;</button>
            </li>
            <li class="menu-item hidden"><a href="https://www.linkedin.com/in/pedro-chaves-028b84305/" target="_blank">LinkedIn do Autor</a>
            </li>
            <li class="menu-item hidden"><a href="https://github.com/Pedro-Chaves2505/partner-php/" target="_blank">Repositório do Projeto</a></li>
        </ul>
    </div>

    <!-- WELCOMING -->
    <div class="heroe">

        <h1> Bem-vindo ao  <?= APP_NAME ?></h1>

        <h2>A plataforma que te ajuda a encontrar pessoas próximas a você 
            para que, juntas, façam caminhadas!
        </h2>

    </div>

</header>

<!-- WALK CREATION -->
<div class="container">
    <div class = "create-walk">
        <h3>
            Publique sua caminhada
        </h3>
        <div class="container">
            <?=form_open('/walk')?>
                <input type="text" class= "display-block" name="starting_point" placeholder="Ponto de partida" >
                <label for="trajectory" class= "display-block">Descrição do trajeto:</label>
                <textarea class= "display-block" name="trajectory" rows=5 columns = 30 >
                </textarea>
                <input type="datetime-local" class= "display-block" name="appointment_datetime">
                <input type="text" class= "display-block" name="person_name" placeholder="Seu nome" >
                <button class= "display-block" type="submit">Convidar a caminhada</button>
            <?= form_close() ?>
        </div>
    </div>
</div>


<!-- WALK POSTS -->
 <div class="walk-posts">
    <h2 class="feed-heading">Caminhadas com datas mais próximas</h2>
    <div class="container">
        <?php foreach ($walks as $walk): ?>
            <div class="walk-card" >
                <!-- <label for="">Ponto de partida:</label> -->
                <h3><?= $walk->starting_point ?></h3>
                <p>Trajetória: <?= $walk->trajectory ?></p>
                <p>Data da caminhada: <?= $walk->appointment_datetime?></p>
                <p>Nome do organizador: <?= $walk->person_name?></p>
        </div>
        <?php endforeach; ?>
    </div>
 </div>


<!-- FOOTER: DEBUG INFO + COPYRIGHTS -->

<footer>
    <div class="environment">

        <p>Page rendered in {elapsed_time} seconds using {memory_usage} MB of memory.</p>

        <p>Environment: <?= ENVIRONMENT ?></p>

    </div>

    <div class="copyrights">

        <p>&copy; <?= date('Y') ?> <?= APP_NAME?>. <?=APP_NAME?> is open source project released under the MIT
            open source licence.</p>

    </div>

</footer>

<!-- SCRIPTS -->

<script {csp-script-nonce}>
    document.getElementById("menuToggle").addEventListener('click', toggleMenu);
    function toggleMenu() {
        var menuItems = document.getElementsByClassName('menu-item');
        for (var i = 0; i < menuItems.length; i++) {
            var menuItem = menuItems[i];
            menuItem.classList.toggle("hidden");
        }
    }
</script>

<!-- -->

</body>
</html>

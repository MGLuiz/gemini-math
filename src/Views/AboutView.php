<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GMath</title>
    <link rel="shortcut icon" href="/favicon.png" type="image/x-icon">

    <!-- CSS -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/about.css">

    <!-- JavaScript -->
    <script type="module" src="/assets/js/script.js"></script>
    <script src="https://kit.fontawesome.com/cabc112fe2.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
</head>
<body>

<div class="top-menu">
    <div class="top-menu-btn">
        <i class="fa-solid fa-bars"></i>
    </div>
    <nav>
        <ul class="">
            <a href="/">
                <li>Answer by Image</li>
            </a>
            <a href="/solveText">
                <li>Answer by Text</li>
            </a>
            <a href="/vrteacher">
                <li>Virtual Teacher</li>
            </a>
            <a href="/about">
                <li>About Gmath</li>
            </a>
        </ul>
    </nav>
</div>

<section class="container">
    <header>
        <span>GMath by Luiz Brito</span>
        <div class="social">
            <a href="https://github.com/MGLuiz" target="_blank"><img class="logo" src="https://cdn-icons-png.flaticon.com/512/25/25231.png" alt="GitHub Logo"></a>
            <a href="https://www.linkedin.com/in/luiz-miguel-xavier-de-brito/" target="_blank"><img class="logo" src="https://upload.wikimedia.org/wikipedia/commons/c/ca/LinkedIn_logo_initials.png" alt="Linkedin Logo"></a>
            <a href="https://www.instagram.com/mgluizbrito/" target="_blank"><img class="logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Instagram_icon.png/1200px-Instagram_icon.png" alt="Instagram Logo"></a>
        </div>
    </header>

    <section id="about">
        <div class="title">
            <h1>Sobre o </h1>
            <img src="/logo.png" alt="Gemini Math Logo">
        </div>
        <div class="body">
            Olá, me chamo Luiz Miguel, aspirante da área de tecnologia/computação e fui responsável pela idealização e desenvolvimento desse sistema que está usando no momento. <br> <br>
            Certa vez, estava precisando da resolução de uns sistemas de equação, então tentei utilizar um software de resoluções matemáticas, o "Photomath". Primeiramente, desejava utilizar no meu desktop, mas sem emular, não havia alternativa. Baixei-o pelo meu celular e ele até me deu o resultado, porém a explicação que desejava fazia parte de um recurso pago. Como (uma simples) solução para não ter de pagar uma assinatura a mais, resolvi criar meu próprio Photomath utilizando a inteligência artificial do Google, o Gemini, apelidei-o de Gemini Math (criatividade para nomes não é o meu forte). <br> <br>
            Conhecia a API do Google que permitia o uso pelo Python e JavaScript, mas desejava me aprimorar no PHP, e pelo vídeo do canal Código Fonte: <a href="https://youtu.be/wLR6s-lbvpQ?si=8AgQb6FyxbgeBqol" target="_blank">ESSE TIPO DE INTEGRAÇÃO COM INTELIGÊNCIA ARTIFICIAL SERÁ CADA VEZ MAIS COMUM</a>, conheci o repositório do GitHub que fazia a integração entre o Gemini e o PHP. Com o Composer e MVC Puro, criei uma simples API que gera as respostas para o JavaScript em tempo real ao usuário, elaborei o design pelo Figma, criando-o com HTML/CSS Puro e assim finalizando um projeto simples, porém muito divertido e interessante que estive desenvolvendo nesse fim de 2024.
        </div>
    </section>
</section>

</body>
</html>
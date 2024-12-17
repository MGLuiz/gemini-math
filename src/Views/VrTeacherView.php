<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GMath</title>
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">

    <!-- CSS -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/vrTeacher.css">

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
            <a href="">
                <li>About Gmath</li>
            </a>
        </ul>
    </nav>
</div>

<section class="container">
    <div class="top">
        <div class="logo"><img src="logo.png" alt="Gemini Math Logo"></div>
        
        <div class="question-output">
            <div id="question-output">

                <div class="teacher-msg">
                    <div class="pp"><img src="/favicon.png" alt="Math Teacher profile picture"></div>
                    <div class="msg-box">
                        <p>
                            Olá, a partir de agora serei o seu guia na jornada fascinante pelo mundo dos números e das formas!
                            <br>
                            <br>
                            Como posso te ajudar?
                            <br>

                            <ul>
                                <li>Explicar conceitos: Tenho à disposição uma vasta gama de conhecimentos matemáticos e posso te ajudar a entender qualquer conceito, desde os mais básicos até os mais complexos.</li>
                                <li>Resolver exercícios: Se você estiver com dificuldade em algum exercício, me mostre que eu te darei uma mãozinha.</li>
                                <li>Tirar dúvidas: Qualquer dúvida que você tiver sobre matemática, pode perguntar sem medo!</li>
                                <li>Propor desafios: Para te ajudar a aprimorar suas habilidades, posso te propor desafios e problemas interessantes.</li>
                            </ul>
                            Então, vamos começar essa jornada juntos?
                            <br>
                            <br>
                            Qualquer dúvida, é só perguntar!
                        </p>
                    </div>
                </div>
                
                <div class="user-msg">
                    <div class="pp"><img src="https://cdn-icons-png.flaticon.com/512/5951/5951752.png" alt="User profile picture"></div>
                    <div class="msg-box">
                        <p></p>
                    </div>
                </div>

            </div>
        </div> 
    </div>

        <div class="question-input">
            <input type="text" name="prompt" id="prompt" placeholder="Say your question or context of the problem " required>

            <button type="submit" class="send-icon" id="send-text-btn">
                <img src="/assets/icons/paper-plane.svg" accept=".jpg, .jpeg, .png" alt="send icon">
            </button>
        </div>
</section>

</body>
</html>
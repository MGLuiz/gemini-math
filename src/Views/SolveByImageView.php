<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GMath</title>
    <link rel="shortcut icon" href="/assets/favicon.ico" type="image/x-icon">

    <!-- CSS -->
    <link rel="stylesheet" href="/assets/css/style.css">

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
            <a href="">
                <li>Answer by Image</li>
            </a>
            <a href="">
                <li>Answer by Text</li>
            </a>
            <a href="">
                <li>Virtual Teacher</li>
            </a>
            <a href="">
                <li>About Gmath</li>
            </a>
        </ul>
    </nav>
</div>

<section class="container">
        <div class="logo"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/45/Gemini_language_model_logo.png/640px-Gemini_language_model_logo.png" alt="Gemini Math Logo"></div>
        
        <form method="POST">

            <div class="answer-switch">
                <span>Quick Answer</span>
                <label class="switch">
                    <input type="checkbox" name="answerSwitch" value="">
                    <span class="slider"></span>
                </label>
                <span>Detailed Answer</span>
            </div>    
        

            <div class="question-input">
                <input type="file" name="image-input" id="image-input">
                <label for="image-input" class="btn-image-input">
                    <img src="/assets/icons/image-icon.svg" alt="image selector">
                </label>
                <label for="image-input" style="cursor: pointer">Click and add an Image or drag here</label>
            </div>

        </form>

        <div class="question-output">
            <textarea id="question-output" class="" name="question" readonly>
            </textarea>
        </div>
</section>

</body>
</html>
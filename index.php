<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;1,100;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <title>Sabrina Menegassi</title>
</head>
<body>
    <header>
        <div>
            <img src="./Front-end (5).png" alt="Logo Sabrina Menegassi">
        </div>
        <ul>
            <li>
                <a target="_blank" href="mailto:bina.lira@hotmail.com">Email</a>
            </li>
            <li>
                <a target="_blank" href="https://www.instagram.com/sabrinamenegassi/">Instagram</a>
            </li>
            <li>
                <a target="_blank" href="https://wa.me/14999999999">Whatsapp</a>
            </li>
        </ul>
    </header>
    <main>
        <section class="container">
            <div class="name">
                <h1>Sabrina Menegassi</h1>
                <h5>Front-End</h5>
            </div>

            <div onclick="displayAbout()" id="arrow">
                <i id="animation" class="fas fa-sort-down"></i>
            </div>

            <div style="display:none" id="about">
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book
                </p>
            </div>

            <div class="form">
                <div>
                    <p>Deixe seu contato!</p>
                </div>
                <form action="">
                    <input type="text" placeholder="Seu melhor e-mail :)">
                    <button>Enviar!</button>
                </form>

            </div>
        </section>
    </main>

    <script>
        function displayAbout() {
            var arrow = document.getElementById('animation');
            arrow.classList.toggle('rotate');
            var display = document.getElementById('about');
            display.classList.toggle('active');
        }
    </script>
</body>
</html>
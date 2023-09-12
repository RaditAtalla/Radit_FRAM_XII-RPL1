<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portofolio Website</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'poppins', helvetica, sans-serif;
            scroll-behavior: smooth;
        }

        body {
            background-color: var(--white-bg);
        }

        :root {
            --orange: #E34C26;
            --white-bg: #F2F2F2;
            --white-text: #F4F4F4;
            --black-primary: #0C0C0C;
            --black-secondary: #1C1C1C;
            --black-tri: #2C2C2C;
            --black-quad: #3C3C3C;
            --css-blue: #264DE4;
            --js-yellow: #FFFF00;
            --php-purple: #777BB3;
        }

        header {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 5em;
            padding: 5em 0 1em 0;
        }

        .title-wrapper {
            display: flex;
            align-items: center;
            gap: 1em;
        }

        .title-wrapper img {
            border-radius: 100%;
        }

        .header-content h2 {
            font-weight: 400;
            color: var(--orange);
        }

        .header-content h1 {
            font-weight: 600;
            color: var(--black-primary);
            font-size: 3rem;
        }

        .html,
        .css,
        .js,
        .php {
            display: flex;
            align-items: center;
            gap: 0.5em;
        }

        .dot {
            width: 15px;
            height: 15px;
            border-radius: 100%;
        }

        .my-language {
            display: flex;
            gap: 2em;
        }

        nav {
            display: flex;
            border-radius: 10px;
        }

        nav a {
            color: var(--black-secondary);
            text-decoration: none;
            padding: 0.5em 6em;
            transition: 0.15s;
        }

        nav a:first-of-type {
            border-radius: 10px 0 0 10px;
        }

        nav a:last-of-type {
            border-radius: 0 10px 10px 0;
        }

        nav a:hover {
            color: var(--white-text);
            background-color: #ae3a1d;
        }

        .active {
            background-color: var(--orange);
            color: var(--white-text);
        }

        main {
            padding: 5em;
        }

        .card-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1em;
        }

        .card img {
            width: 100%;
        }
    </style>
</head>

<body>
    <header>
        <div class="title-wrapper">
            <div class="my-img">
                <img src="{{ asset('mee.jpg') }}" alt="Photo of me" width="150px" />
            </div>
            <div class="header-content">
                <h2>My Portofolio</h2>
                <h1>Raditya A. Rachmadie</h1>
                <div class="my-language">
                    <div class="html">
                        <div class="dot" style="background-color: #e34c26"></div>
                        <p>HTML</p>
                    </div>
                    <div class="css">
                        <div class="dot" style="background-color: #264de4"></div>
                        <p>CSS</p>
                    </div>
                    <div class="js">
                        <div class="dot" style="background-color: #ffff00"></div>
                        <p>JS</p>
                    </div>
                    <div class="php">
                        <div class="dot" style="background-color: #777bb3"></div>
                        <p>PHP</p>
                    </div>
                </div>
            </div>
        </div>

        <nav>
            <a href="#" class="active">Portofolio</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
        </nav>
    </header>

    <main>
        <div class="card-container">
            <div class="card">
                <img src="{{ asset('nimg.png') }}" alt="project preview">
                <div class="card-desc">
                    <h3>Website title</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, maxime.</p>
                </div>
            </div>
            <div class="card">
                <img src="{{ asset('nimg.png') }}" alt="project preview">
                <div class="card-desc">
                    <h3>Website title</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, maxime.</p>
                </div>
            </div>
            <div class="card">
                <img src="{{ asset('nimg.png') }}" alt="project preview">
                <div class="card-desc">
                    <h3>Website title</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, maxime.</p>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
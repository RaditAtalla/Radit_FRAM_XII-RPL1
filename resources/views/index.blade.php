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
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
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
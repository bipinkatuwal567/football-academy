<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./components/navbar.css">
</head>

<body>
    <div id="root">
        <?php
        require "./components/navbar.php";
        ?>

        <main class="hero-section">
            <div class="hero-content">
                <h2>Welcome to the best <span>Football</span> Academy</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, commodi? Deserunt voluptatem aliquam nobis voluptates?</p>
                <button><a href="#">Join Now</a></button>
            </div>
        </main>

        <section class="our-service">
            <h2>Let's Check Our Services</h2>
            <div class="cards">
                <div class="card">
                    <div class="img"><img src="../assets/soccer-player.png" alt=""></div>
                    <h3>Training</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <button><a href="#">Learn More</a></button>
                </div>
                <div class="card">
                    <div class="img"><img src="../assets/document.png" alt=""></div>
                    <h3>Authority</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <button><a href="#">Learn More</a></button>
                </div>
                <div class="card">
                    <div class="img"><img src="../assets/clock.png" alt=""></div>
                    <h3>Precison & Timing</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <button><a href="#">Learn More</a></button>
                </div>
                <div class="card">
                    <div class="img"><img src="../assets/trophy.png" alt=""></div>
                    <h3>Championship</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <button><a href="#">Learn More</a></button>
                </div>
            </div>
        </section>
    </div>
</body>

</html>
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

        <section class="about-us">
            <h2>About us</h2>
            <div class="about-us-content">
                <h2>Find Out Why You Admit Our Academy</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam quo dolore minus ea vitae ad ut quidem eaque.</p>
                <button><a href="#">Join Now</a></button>
            </div>
        </section>

        <section class="stats">
            <div class="stats-container">
                <div class="stats-card">
                    <p>Awards</p>
                    <h3>35</h3>
                </div>
                <div class="stats-card">
                    <p>Awards</p>
                    <h3>35</h3>
                </div>
                <div class="stats-card">
                    <p>Awards</p>
                    <h3>35</h3>
                </div>
                <div class="stats-card">
                    <p>Awards</p>
                    <h3>35</h3>
                </div>
            </div>
        </section>

        <section class="staff-details">
            <h2>Meet our coaching staff</h2>
            <div class="staff-cards">
                <div class="staff-card">
                    <img src="../assets/coach.jpg" alt="coach">
                    <h3>Marvin MacKinney</h3>
                    <p>Coach</p>
                </div>
                <div class="staff-card">
                    <img src="../assets/coach.jpg" alt="coach">
                    <h3>Marvin MacKinney</h3>
                    <p>Coach</p>
                </div>
                <div class="staff-card">
                    <img src="../assets/coach.jpg" alt="coach">
                    <h3>Marvin MacKinney</h3>
                    <p>Coach</p>
                </div>
                <div class="staff-card">
                    <img src="../assets/coach.jpg" alt="coach">
                    <h3>Marvin MacKinney</h3>
                    <p>Coach</p>
                </div>
                <div class="staff-card">
                    <img src="../assets/coach.jpg" alt="coach">
                    <h3>Marvin MacKinney</h3>
                    <p>Coach</p>
                </div>
                <div class="staff-card">
                    <img src="../assets/coach.jpg" alt="coach">
                    <h3>Marvin MacKinney</h3>
                    <p>Coach</p>
                </div>
            </div>
        </section>
    </div>
</body>

</html>
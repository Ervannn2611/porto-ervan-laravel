<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/responsive.css">

    <title>Muhamad Ervan - Web Portfolio</title>
</head>
<body>
    <nav class="navbar">
        <a href="./index.html" class="navbar-logo">
            <span class="text-secondary">M</span>Ervan
        </a>

        <ul class="navbar-list">
            <li><a href="#home" class="navbar-link">Home</a></li>
            <li><a href="#about" class="navbar-link">About</a></li>
            <li><a href="#skills" class="navbar-link">Skills</a></li>
            <li><a href="#contact" class="navbar-link">Contact</a></li>
        </ul>

        <button type="button" class="hamburger-menu" title="Hamburger Menu">
            <i class="bx bx-menu"></i>
        </button>
    </nav>
    <section class="content" id="home">
        <div class="home-text">
            <h1>Hello, I'am Muhamad Ervan</h1>
            <p>
                I'm <span class="text-secondary">Frontend Developer and Web Developer</span>
                Saya adalah orang yang bermotivasi tinggi, dilengkapi dengan integritas dan tujuan.
            </p>
        </div>
        <div class="home-img">
            <img src="img/logo.png" alt="">
        </div>
    </section>

    <section class="content" id="about">
        <h1 class="content-title">Who Is Muhamad Ervan?</h1>
        <p>
            Perkenalkan saya Muhamad Ervan, Berasal dari Bogor, Jawa Barat. Saya memliki keahlian dibidang Pengembangan
            Perangkat Lunak dan Gim, Memulai hobi Coding Dari Tahun 2023 Dengan berbagai Bahasa Programan yang saya gunakan. 
            Saya berambisi untuk menjadi seorang Fullstack Developer Dengan meningkatkan Keterampilan Coding saya.
        </p>
    </section>

    <section class="content" id="skills">
        <h1 class="content-title">What is My Skills?</h1>
        <ul class="skill-box-group">
            <li class="skill-box" id="html">
                <span class="skill-text">
                    <i class="bx bxl-html5"></i> HTML
                </span>
                <span class="skill-percentage">
                    80%
                </span>
            </li>
            <li class="skill-box" id="css">
                <span class="skill-text">
                    <i class="bx bxl-css3"></i> CSS
                </span>
                <span class="skill-percentage">
                    70%
                </span>
            </li>
            <li class="skill-box" id="javascript">
                <span class="skill-text">
                    <i class="bx bxl-javascript"></i> Javascript
                </span>
                <span class="skill-percentage">
                    40%
                </span>
            </li>
            <li class="skill-box" id="php">
                <span class="skill-text">
                    <i class='bx bxl-php'></i> PHP
                </span>
                <span class="skill-percentage">
                    70%
                </span>
            </li>
        </ul>
    </section>

    <section class="content" id="contact">
        <h1 class="content-title">Get In Touch With Me</h1>
        <form action="">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Enter Your Full Name">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Enter Your Email Address">
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" id="message" cols="30" rows="10" placeholder="Describe Your Message"></textarea>
            </div>
        </form>

    </section>

    <footer class="footer">
        <a href="./index.html" class="footer-logo">
            <span class="text-primary">M</span>Ervan
        </a>
        <ul class="footer-list">
            <li><a href="#home" class="footer-link">Home</a></li>
            <li><a href="#about" class="footer-link">About</a></li>
            <li><a href="#skills" class="footer-link">Skills</a></li>
            <li><a href="#contact" class="footer-link">Contact</a></li>
        </ul>
        <ul class="social-media-group">
            <li>
                <a href="">
                    <i class="bx bxl-facebook"></i>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="bx bxl-instagram"></i>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="bx bxl-tiktok"></i>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="bx bx-envelope"></i>
                </a>
            </li>
        </ul>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>
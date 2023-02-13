<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Pembelajaran</title>
<!-- FOnt Awesome Cdn -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

<!-- koneksi css -->
<link rel="stylesheet" href="css/style.css">

</head>
<body>
    <!-- header awal  -->
    <header class="header">
        <section class="flex">

        <a href="home.php" class="logo">Educa.</a>
        <form action="" method="post" class="search-form">
            <input type="text" class="search_box" placeholder="Cari Materi..." required maxlength="100">
             <button type="submit" class="fas fa-search" name="search_box"></button>
        </form>
        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <div id="search-btn" class="fas fa-search"></div>
            <div id="user-btn" class="fas fa-user"></div>
            <div id="toggle-btn" class="fas fa-sun"></div>
        </div>
        <div class="profile">
            <img src="images/pic-1.jpg" alt="">
            <h3>Buvan Alfarezy</h3>
            <span>Pelajar</span>
            <a href="profil.php" class="btn">Lihat Profil</a>
            <div class="flex-btn">
                <a href="login.php" class="option-btn">Login</a>
                <a href="register.php" class="option-btn">Register</a>
            </div>
        </div>
        </section>
    </header>
    <!-- Akhir Header -->

    <!-- Sidebar start -->
    <div class="side-bar">

        <div class="close-side-bar">
            <i class="fas fa-times"></i>
        </div>

        <div class="profile">
            <img src="images/pic-1.jpg" alt="">
            <h3>Buvan Alfarezy</h3>
            <span>Pelajar</span>
            <a href="profil.php" class="btn">Lihat Profil</a>
        </div>

        <nav class="navbar">
            <a href="home.php"><i class="fas fa-home"></i><span>Beranda</span></a>
            <a href="about.php"><i class="fas fa-question"></i><span>Tentang Kami</span></a>
            <a href="materi.php"><i class="fas fa-graduation-cap"></i><span>Materi Kami</span></a>
            <a href="guru.php"><i class="fas fa-chalkboard-user"></i><span>Pengajar</span></a>
            <a href="contact.php"><i class="fas fa-headset"></i><span>Contact</span></a>
        </nav>

    </div>


<!-- Sidebar end -->

<!-- footer start -->

<footer class="footer">


    &copy; Dibuat Oleh <span>Buvan Alfarezy</span> 2023


</footer>

<!-- footer end -->



<!-- koneksi js -->
<script src="js/script.js"></script>
</body>
</html>

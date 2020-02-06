<header id="top-bar">
    <h1>
        <a href="index.php">
            <img onmouseover="animatedLemon(this)" onmouseout="staticLemon(this)" id="lemon-logo" src="images/giodme-logo.png" alt="Giodme's Lemon Logo">
        </a>
    </h1>

    <nav id="nav-links">
        <ul>
            <li><a class="yellow" href="about.php">ABOUT</a></li>
            <li><a class="yellow" href="programs.php">PROGRAMS</a></li>
            <li><a class="yellow" href="contact.php">CONTACT</a></li>
        </ul>
    </nav>

    <!-- "Hamburger menu" to toggle the navigation links -->
    
    <button id="menu-button" class="hamburger hamburger--emphatic" onclick="toggleMenu()" type="button">
        <span class="hamburger-box">
            <span class="hamburger-inner"></span>
        </span>
    </button>

</header>

<!-- Nav Bar for Mobile -->

<nav id="mobile-nav-links">
    <ul>
        <li><a class="yellow" href="about.php">ABOUT</a></li>
        <li><a class="yellow" href="programs.php">PROGRAMS</a></li>
        <li><a class="yellow" href="contact.php">CONTACT</a></li>
    </ul>
</nav>
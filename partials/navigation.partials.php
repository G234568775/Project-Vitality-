<nav>
    <a href="/index"><img src="images/logo2.jpeg"></a>
    <div class="nav-links" id="navLinks">  
        <i class="fa fa-close" onclick="hideMenu()"></i>
        <ul>
            <li><a href="/index">HOME</a></li>
            <li><a href="/about">ABOUT</a></li>
            <li><a href="/course">COURSE</a></li>
            <li><a href="/blog">BLOG</a></li>
            <li><a href="/contact">CONTACT</a></li> 
            <li><a href="/appointement">APPOINTEMENT</a></li> 
            <?php if (auth()->id()) { ?>
                <li><a href="/dashboard">Dashboard</a></li>
                <li><a href="/logout">Logout</a></li>
            <?php } else { ?>
                <li><a href="/Login">Login/Registration</a></li>
            <?php }?>
        </ul>
    </div>
    <i class="fa fa-bars" onclick="showMenu()"></i>
</nav>
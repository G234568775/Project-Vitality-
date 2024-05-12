<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Homecare website for elderly people</title>
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,600,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
</head>
<body>
    <section class="header">
        
        <?php require 'partials/navigation.partials.php'; ?>
        
        <div class="text-box">
            <h1>World's Best Homecare for elderly</h1>
            <p>If you are looking for exceptional homecare support for elderly people we can help. <br>Or maybe we can give support or adive.</p>
            <a href="/contact" class="hero-btn">Visit Us to Know More</a>
        </div>
    </section>
    
<!---------- course ----------->
    
    <section class="course">
        <h1>What We Offer</h1>
        <p>We offer varieties of things.</p>
        <div class="row">
            <div class="course-col">
                <h3>Wellbeing calls</h3>
                <p>As well as responding to calls made to us through pressing of the pendant alarms, we can also arrange to make regular calls at a time suited to the individual. We call these wellbeing.</p>
            </div>
            <div class="course-col">
                <h3>Community</h3>
                <p>We are finally able to allow our Community Engagement Worker Janet undertake the role we had recruited her for at the start of last year. Janet has been with Carelink as an Operator for 10 years and also undertakes installations when need be.</p>
            </div>
            <div class="course-col">
                <h3>Keysafe</h3>
                <p>For many of our customers, knowing they can press a button if they are feeling unwell or fall and Carelink arranging emergency help is of great comfort. A common issue that we come across is gaining access to the property during an emergency.</p>
            </div>
        </div>
    </section>
    
<!---------- campus ---------->
    
    <section class="campus">
        <h1>Our Global loctions</h1>
        <p>We have 3 diffrent loctions for our centers.</p>
            <div class="row">
                <div class="campus-col">
                    <img src="images/london.png">
                    <div class="layer">
                        <h3>LONDON</h3>
                    </div>
                </div>
                <div class="campus-col">
                    <img src="images/newyork.png">
                    <div class="layer">
                        <h3>NEW YORK</h3>
                    </div>
                </div>
                <div class="campus-col">
                    <img src="images/washington.png">
                    <div class="layer">
                        <h3>WASHINGTON</h3>
                    </div>
                </div>
                
            </div>
    </section>
    
<!---------- Facilities ---------->
    
    <section class="facility">
        <h1>Our Facilities</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <div class="row">
                <div class="facility-col">
                    <img src="images/library.png">
                    <h3>World Class Library</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque aliquet turpis nulla.</p>
                </div>
                <div class="facility-col">
                    <img src="images/sport.png">
                    <h3>Play Ground</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque aliquet turpis nulla.</p>
                </div>
                <div class="facility-col">
                    <img src="images/cafeteria.png">
                    <h3>Tasty and Healthy Food</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque aliquet turpis nulla.</p>
                </div>
            </div>
    </section>
    
    
<!---------- testimonials ---------->
    
    <section class="testimonials">
        <h1>What Our Customers says</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <div class="row">
                <div class="testimonial-col">
                    <img src="images/user1.jpg">
                    <div> 
                        <p>The staff are very kind and helpful even though sometimes it is not very easy. It would be helpful if full instructions on how to find Roger's address were written in the notes as new carers can never find his house and have to phone. Thank you for what you do.</p>
                        <h3>Christine Berkley</h3>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                </div>
                <div class="testimonial-col">
                    <img src="images/user2.jpg">
                    <div>
                        <p>The staff are very kind and helpful even though sometimes it is not very easy. It would be helpful if full instructions on how to find Roger's address were written in the notes as new carers can never find his house and have to phone. Thank you for what you do.</p>
                        <h3>David Byer</h3>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                </div>
                
            </div>
    </section>
    
<!------ Call To Action ------>

<section class="cta">
    
       <h1>Tips on how to stay healthy with older age</h1>
        <a href="https://www.youtube.com/watch?v=cWvSC5o9l74" class="hero-btn">WATCH THIS </a>
    
</section>    
 
<!-------- footer ---------->

<section class="footer">
        <h4>About Us</h4>
        <p>Live-in Care Comparison is here to help you find the right care and the right price. Established in 2005 we have helped thousands of users find the right services for their needs.Working with a number of the UKs top Care Providers, compare services and prices..</p>
        <div class="icons">
            <i class="fa fa-facebook"></i></a>
            <i class="fa fa-twitter"></i></a>
            <i class="fa fa-instagram"></i></a>
            <i class="fa fa-linkedin"></i></a>
            
        </div>
        <a href="https://www.youtube.com/c/EasyTutorialsVideo?sub_confirmation=1" class="footer-link"><p>Group project<i class="fa fa-heart-o"></i> by eveyones</p></a>
</section>    
  
  
<!----JavaScript for toggle menu---->
<script>
    var navLinks = document.getElementById("navLinks");

    function showMenu() {
        navLinks.style.right = "0";
    }

    function hideMenu() {
        navLinks.style.right = "-200px";
    }
</script> 
    
</body>
</html>








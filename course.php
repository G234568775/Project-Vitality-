<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Homecare website for elderly people</title>
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,600,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
</head>
<body>
    <section class="sub-header">
        <?php require 'partials/navigation.partials.php'; ?>
        <h1>Our facility</h1>
    </section>
    
    
<!---------- course ----------->
    
    <section class="course">
        <h1>What We Offer</h1>
        <p>We offer varieties of things.</p>
        <div class="row">
            <div class="course-col">
                <h3>Wellbeing Calls</h3>
                <p>As well as responding to calls made to us through pressing of the pendant alarms, we can also arrange to make regular calls at a time suited to the individual. We call these wellbeing.</p>
            </div>
            <div class="course-col">
                <h3>Community</h3>
                <p>We are finally able to allow our Community Engagement Worker Janet undertake the role we had recruited her for at the start of last year. Janet has been with Carelink as an Operator for 10 years and also undertakes installations when need be.</p>
            </div>
            <div class="course-col">
                <h3>Post Keysafe</h3>
                <p>For many of our customers, knowing they can press a button if they are feeling unwell or fall and Carelink arranging emergency help is of great comfort. A common issue that we come across is gaining access to the property during an emergency.</p>
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
                    <h3>Largest Play Ground</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque aliquet turpis nulla.</p>
                </div>
                <div class="facility-col">
                    <img src="images/cafeteria.png">
                    <h3>Tasty and Healthy Food</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque aliquet turpis nulla.</p>
                </div>
            </div>
    </section>
    
<!-------- footer ---------->

<section class="footer">
        <h4>About Us</h4>
        <p>Live-in Care Comparison is here to help you find the right care and the right price. Established in 2005 we have helped thousands of users find the right services for their needs.Working with a number of the UKs top Care Providers, compare services and prices.</p>
        <div class="icons">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-linkedin"></i>
        </div>
        <p>Group project <i class="fa fa-heart-o"></i> by eveyones</p>
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
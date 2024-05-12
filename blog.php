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
        <h1>Some blog about how to stay Healthy in elderly age</h1>
    </section>
    
<!---------- Blog Page Content ---------->
    
    <section class="blog-content">
    <div class="row">
    <div class="blog-left">
        <img src="images/takecare5.jpg">
        <h2>We know it’s not just about living longer, it’s about living healthily and happily for longer.</h2>
        
        <p>We’ve formulated this guide from personal experience and spoke to many people who battle with keeping health in old age. We’ve formulated our top 10 musts to keep healthy.</p>
        <br>
        <p>The NHS offers everyone 40 – 74 a full health check every 5 years, aimed at reducing the risk of heart disease, stroke, Type 2 diabetes, kidney disease and some types of dementia. Most surgeries offer an annual check-up for all patients over 75.Read about how to get an NHS Health check here: NHS health check up.</p>
        <br>
        <p>The NHS offers a full programme of screening for a wide range of diseases and conditions, including breast cancer, prostate cancer, cholesterol, heart disease. The screening offered depends on age, health and family history. They also offer annual flu and pneumonia vaccinations</p>
        <br>
        <p>If possible accompany your elderly relative to their GP regularly to review their medication. Ask questions about possible drug interactions, and take note of any new symptoms (drowsiness, allergic reactions, loss of appetite and others) after starting or changing medications. Ensure that drugs are being dispensed in a way which makes it easy to take them regularly (using daily Dosette boxes, for example) and for you to monitor if necessary. Also, make sure to get the right medicines and avoid substance abuse no matter what!.</p>
        
        <div class="comment-box">
            <h3>Leave a comment</h3>
            <form class="comment-form">
                    <input type="text" placeholder="Enter Name">
                    <input type="email" placeholder="Enter email">
                    <textarea rows="5" placeholder="Your Comment"></textarea>
                    <button type="submit" class="hero-btn red-btn">POST COMMENT</button>
            </form>
        </div>
    </div>
        
    <div class="blog-right">
        
        
            <h3>Stay Physically active</h3>
            <div>
                <span>Walking the dog</span>
                <span>Everyday</span>
            </div>
            <div>
                <span>Gardening</span>
                <span>Everyday</span>
            </div>
            <div>
                <span>Days out with friends</span>
                <span>Every week</span>
            </div>
            <div>
                <span>Exercises Classes</span>
                <span>Everyday</span>
            </div>
            <div>
                <span>Gym</span>
                <span>Everyday</span>
            </div>
            <div>
                <span>Swimming</span>
                <span>Everyday</span>
            </div>
            <div>
                <span>Eat Healthily</span>
                <span>Everyday</span>
            </div>
           
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
        <p>Group <i class="fa fa-heart-o"></i> by eveyones</p>
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
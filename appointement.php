<?php

// Instantiate the Database class
$db = new Database();

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Clean and retrieve form data
    $name = clean_input($_POST['name']);
    $email = clean_input($_POST['email']);
    $phone = clean_input($_POST['phone']);
    $date = clean_input($_POST['date']);
    $time = clean_input($_POST['time']);
    $age = clean_input($_POST['age']);
    $sex = clean_input($_POST['sex']);
    $nhs_number = clean_input($_POST['nhs_number']);
    $weight = clean_input($_POST['weight']);
    $service = clean_input($_POST['service']);

    // Prepare data to be inserted into the database
    $appointmentData = [
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'date' => $date,
        'time' => $time,
        'age' => $age,
        'sex' => $sex,
        'nhs_number' => $nhs_number,
        'weight' => $weight,
        'service' => $service,
    ];

    // Validate
    $validator = new Validator($appointmentData, [
        'name' => ['required', 'max:255'],
        'email' => ['required', 'email'],
        'phone' => ['required'],
        'date' => ['required'],
        'age' => ['required'],
        'sex' => ['required'],
        'nhs_number' => ['required'],
        'weight' => ['required'],
        'time' => ['required'],
    ]);

    $validator->validateAndRedirect();

    // Insert appointment data into the database
    $result = $db->insert('appointments', $appointmentData);

    Session::flash('success', 'Appointment Booked');
    Response::redirect('/appointement');
}

?>

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
        
        <?php load_partials('navigation'); ?>
         
            <div class="container">
                <h2>Book an Appointment</h2>
                <?php load_partials('alert'); ?>
                <form action="#" method="post" novalidate>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="phone">Phone:</label>
                    <input type="text" id="phone" name="phone" required>
                    
                    <label for="age">age:</label>
                    <input type="number" id="age" name="age" required>

                    <label for="sex">Gender:</label> 
                    <select id="sex" name="sex" required>
                        <option value="Blood Test">Male</option>
                        <option value="Routing Check">Female</option>
                    </select>

                    <label for="nhs">NHS Number:</label>
                    <input type="text" id="nhs_number" name="nhs_number" required>

                    <label for="weight">Weight:</label>
                    <input type="text" id="weight" name="weight" required>

                    <label for="date">Preferred Date:</label>
                    <input type="date" id="date" name="date" required>

                    <label for="time">Preferred Time:</label>
                    <input type="time" id="time" name="time" required>
                    
                    <label for="service">Select Service:</label> 
                    <select id="service" name="service" required>
                        <option value="Blood Test">Blood test</option>
                        <option value="Routing Check">Routing Check</option>
                        <option value="Diet Plan">Diet plan</option>
                        <option value="Therapist">Therapist</option>
                        <option value="Others">Other</option>
                    </select>

                    <input type="submit" value="Book Appointment">
                </form>
            </div>
      
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








<?php
$auth = new Authentication();
if (!$auth->id()) {
    Response::redirect('/');
}

// Instantiate the Database class
$db = new Database();

// Retrieve appointments from the database
$result = $db->query('SELECT * FROM appointments');

$appointments = $result->fetch_all(MYSQLI_ASSOC);
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
    <section class="sub-header">
        <?php require 'partials/navigation.partials.php'; ?>
        <h1>Dashboard</h1>
    </section>

    <section class="about-us">
        <h3>All Appointments</h3>
    <div style="overflow-x:auto">
    <table class="appointment-table">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Age</th>
            <th>Sex</th>
            <th>NHS Number</th>
            <th>Weight</th>
            <th>Date</th>
            <th>Time</th>
            <th>Service</th>
        </tr>
        <?php foreach ($appointments as $appointment) { ?>
                <tr>
                <td><?php echo $appointment['name']; ?></td>
                <td><?php echo $appointment['email']; ?></td>
                <td><?php echo $appointment['phone']; ?></td>
                <td><?php echo $appointment['age']; ?></td>
                <td><?php echo $appointment['sex']; ?></td>
                <td><?php echo $appointment['nhs_number']; ?></td>
                <td><?php echo $appointment['weight']; ?></td>
                <td><?php echo $appointment['date']; ?></td>
                <td><?php echo $appointment['time']; ?></td>
                <td><?php echo $appointment['service']; ?></td>
                </tr>
            <?php } ?>
    </table>
    </div>
</section>


    <!-------- footer ---------->

<section class="footer">
        <h4>All Appointments</h4>
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
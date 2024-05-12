<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form data
    $data = [
        'email' => clean_input($_POST['email']),
        'password' => clean_input($_POST['password']),
    ];

    // Validate
    $validator = new Validator($data, [
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    $validator->validateAndRedirect();

    if (!auth()->login($data['email'], $data['password'])) {
        Session::flash('error', 'Invalid credentials');
        Response::redirect('/login');
    }

    Session::flash('error', 'Invalid credentials');
    Response::redirect('/dashboard');
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
    <section class="sub-header">
    <?php load_partials('navigation'); ?>
        <h1>Login and Register</h1>
    </section>
  
    <div class="container">
    <?php load_partials('alert'); ?>
        <h2>Login</h2>
        <form action="#" method="post" novalidate>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <button type="submit">Login</button>
            </div>
            <div class="Remember-forgot">
                <label><input type="checkbox">
                 Remember me</label>
            </div>
            <div class="form-group">
                <p>If you don't have an account, <a href="/register">register here</a>.</p>
            </div>
        </form>
    </div>

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
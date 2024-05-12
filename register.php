<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = [
        'name' => clean_input($_POST['name']),
        'email' => clean_input($_POST['email']),
        'password' => clean_input($_POST['password']),
        'password_confirmation' => clean_input($_POST['password_confirmation']),
        'agree' => clean_input($_POST['agree']),
    ];

    // Validation
    $validator = new Validator($data, [
        'name' => ['required', 'max:255', 'min:2'],
        'email' => ['required', 'email', 'unique:users,email'],
        'password' => ['required', 'confirmed', 'min:8', 'max:255'],
        'agree' => ['required'],
    ]);

    $validator->validateAndRedirect();

    // Save user information
    $db = new Database();

    unset($data['password_confirmation'], $data['agree']);
    $data['password'] = password_hash($data['password'], PASSWORD_BCRYPT);

    $db->insert('users', $data);

    Session::flash('success', 'Account has been created.');
    Response::redirect('/login');
}
?>


<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration - Homecare website for elderly people</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <section class="sub-header">
    <?php load_partials('navigation'); ?>
        <h1>Registration</h1>
    </section>
   
    <div class="container">
    <?php load_partials('alert'); ?>
        <h2>Register</h2>
        <form action="" method="post" novalidate>
        <div class="form-group">
            <label for="Full name">Enter Your Full Name:</label>
            <input type="text" id="Full name" name="name" required value="<?php echo old('name'); ?>">
        </div>
        <div class="form-group">
            <label for="reg_email">Email:</label>
            <input type="email" id="reg_email" name="email" required value="<?php echo old('email'); ?>">
        </div>
        <div class="form-group">
            <label for="reg_password">Password:</label>
            <input type="password" id="reg_password" name="password" required>
        </div>
        <div class="form-group">
            <label for="reg_password">Confirm Password:</label>
            <input type="password" id="reg_password" name="password_confirmation" required>
        </div>
        <div class="Remember-forgot">
            <label>
                <input type="checkbox" name="agree">
                I agree to the terms and conditions
            </label>
        </div>
        <div class="form-group">
            <button type="submit">Register</button>
        </div>
        <div class="form-group">
            <p>If you already have an account, <a href="/login">login here</a>.</p>
        </div>
    </form>
    </div>

    <!-------- footer ---------->

    <section class="footer">
        <h4>About Us</h4>
        <p>Live-in Care Comparison is here to help you find the right care and the right price. Established in 2005 we have helped thousands of users find the right services for their needs. Working with a number of the UKs top Care Providers, compare services and prices.</p>
        <div class="icons">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-linkedin"></i>
        </div>
        <p>Group project <i class="fa fa-heart-o"></i> by everyone</p>
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
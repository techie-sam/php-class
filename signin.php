<?php
$error = [
    'firstname' => null,
    'lastname' => null,
    'email' => null,
];
include("db_connector.php");
if (isset($_POST['submit'])) {

    // echo(htmlspecialchars($_POST['firstname']));
    // preg_match

    // echo ($_POST['firstname'])
    // print_r();

    $email = $_POST['email'];
    $password = $_POST['password'];


    // Email  validation
    if (empty($email)) {
        $error['email'] = "Email is Empty";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error['email'] = "Email is invalid";
    }


    if (!array_filter($error)) {
        // print_r($allUsers);
        $checkEmailQuery = "SELECT * FROM users where email='$email'";
        $checkEmailQueryResult = mysqli_query($connect, $checkEmailQuery);
        if ($checkEmailQueryResult->num_rows === 1) {
            echo ("Email Exist");
            $currentUser = mysqli_fetch_assoc($checkEmailQueryResult);
            $verify = password_verify($password, $currentUser['password']);
            if ($verify) {
                session_start();
                $_SESSION['userIndex'] = $currentUser['user_id'];
                header("Location: dashboard.php");
            }
        } else {
            echo ("Email does not exist");
        }

    }
}
;
?>
<?php require('header.php') ?>
    <form action="signin.php" method="POST" >
        <div class='bg-light col-6 m-auto p-4'>
            <input class='form-control mt-2' type="text" placeholder="Email" name='email'>
            <small class="text-danger"><?php echo ($error['email']) ?></small>
            <input class='form-control mt-2' type="text" placeholder="password" name='password'>
            <!-- <button class='btn btn-primary w-100 mt-3'>Submit</button> -->
            <input type="submit" name="submit" class='btn btn-primary w-100 mt-3'/>
        </div> 
    </form>
<?php require('footer.php') ?>
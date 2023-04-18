<?php
$error = [
    'firstname' => null,
    'lastname' => null,
    'email' => null,
];
require('db_connector.php');
if (isset($_POST['submit'])) {

    // echo(htmlspecialchars($_POST['firstname']));
    // preg_match

    // echo ($_POST['firstname'])
    // print_r();

    $firstname = htmlspecialchars($_POST['firstname']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $email = htmlspecialchars($_POST['email']);
    $hashedPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
    // echo($hashedPassword);
    $password = $hashedPassword;

    // Firstname VAlidation
    if (empty($firstname)) {
        $error['firstname'] = "Firstname is empty";
    } else if (!preg_match("/^[a-zA-Z]+$/", $firstname)) {
        $error['firstname'] = "First name does not match regex";
    }

    // Lastname Validation
    if (empty($lastname)) {
        $error['lastname'] = "Lastname is empty";
    } else if (!preg_match("/^[a-zA-Z]+$/", $firstname)) {
        $error['lastname'] = "Last does not match regex";
    }

    // Email  validation
    if (empty($email)) {
        $error['email'] = "Email is Empty";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error['email'] = "Email is invalid";
    }


    if (!array_filter($error)) {
        $searchemail = "SELECT * FROM users WHERE email = '$email'";
        $foundemail = mysqli_query($connect, $searchemail);
        // print_r($foundemail);
        if ($foundemail->num_rows === 0) {
            echo ("User already exist");
                $result = mysqli_query($connect, "INSERT INTO users (firstname, lastname, email, password) VALUES ('$firstname','$lastname','$email','$password')");
                header("Location: signin.php");
        }else{
            echo("User Exits");
        }
        //     print($firstname);

        //     // print_r($result);

        //     // print_r($allUsers);
    }
}
;
?>
<?php require('header.php') ?>
    <form action="register.php" method="POST" class="flex items-center" >
        <div class='p-5 border-2 space-y-6'>
            <div>
                <input class='px-4 py-2 border rounded-md text-gray-700 bg-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent' type="text" placeholder="Firstname" name='firstname'>
                
                <small class="text-red-400 block"><?php echo ($error['firstname']) ?></small>
            </div>
            <div>
                <input class='px-4 py-2 border rounded-md text-gray-700 bg-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent' type="text" placeholder="Lastname" name='lastname'>
                <small class="text-danger block"><?php echo ($error['lastname']) ?></small>
            </div>
            <div>
                <input class='px-4 py-2 border rounded-md text-gray-700 bg-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent' type="text" placeholder="Email" name='email'>
                <small class="text-danger block"><?php echo ($error['email']) ?></small>
            </div>
            <div>
                <input class='px-4 py-2 border rounded-md text-gray-700 bg-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent' type="text" placeholder="password" name='password'>
            </div>
            <!-- <button class='btn btn-primary w-100 mt-3'>Submit</button> -->
            <input type="submit" value="Sign Up" name="submit" class='rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600'/>
        </div> 
    </form>
    <!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
<!--
  This example requires updating your template:

  ```
  <html class="h-full bg-white">
  <body class="h-full">
  ```
-->
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
    <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Sign in to your account</h2>
  </div>

  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form class="space-y-6" action="#" method="POST">
      <div>
        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
        <div class="mt-2">
            <input type="text" class="px-4 py-2 border rounded-md text-gray-700 bg-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
        </div>

      </div>

      <div>
        <div class="flex items-center justify-between">
          <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
          <div class="text-sm">
            <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">Forgot password?</a>
          </div>
        </div>
        <div class="mt-2">
          <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>

      <div>
        <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign in</button>
      </div>
    </form>

    <p class="mt-10 text-center text-sm text-gray-500">
      Not a member?
      <a href="#" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Start a 14 day free trial</a>
    </p>
  </div>
</div>

<?php require('footer.php') ?>
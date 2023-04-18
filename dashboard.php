<?php
require('db_connector.php');
$select_blogs_result = mysqli_query($connect, "SELECT * from blogs");
$blogs = mysqli_fetch_all($select_blogs_result, MYSQLI_ASSOC);
print_r($blogs);
session_start();
echo ($_SESSION['userIndex']);
if (isset($_POST['post_blog'])) {

    $title = mysqli_real_escape_string($connect, $_POST['title']);
    $content = $_POST['content'];
    //   validation
    // if (empty($title)) {
    //     $error['email'] = "Email is Empty";
    // }
    // $query = "INSERT INTO `blogs`(`blog_title`, `blog_content`) VALUES ('$title','$content')";
    $result = mysqli_query($connect, "INSERT INTO `blogs`(`blog_title`, `blog_content`) VALUES ('$title','$content')");
    // $blogs = mysqli_fetch_all($result, MYSQLI_ASSOC);
    // print_r($blogs);
    // free previous result from memory

    // mysqli_free_result($result);

    // close connection

    // mysqli_close($connect);
}
if (isset($_POST['delete_blog'])) {
    print_r($_POST);
}


?>

<?php require('header.php') ?>
<h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-red-700">Sign in to your account</h2>
    <div>
        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Blog Title</label>
        <div class="mt-2">
          <input name="email" placeholder="Blog Title" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          
        </div>
    </div>    
    <div>
        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Content</label>
        <div class="mt-2">
          <textarea name="email" placeholder="Blog COntent" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
        </div>
    </div>

swehjk
    <div class='bg-light col-6 m-auto p-4'>
        ekek

            Blogs
            <?php
            for ($i = 0; $i < count($blogs); $i++) {
                echo ('<h3>Content</h3>' . $blogs[$i]['blog_title'] . '<form method="POST" action="dashboard.php"><input type="text" name="index" value="2"/><input type="submit" name="delete_blog"/></form>' . '<button> Edit </button>');
                echo ('<h3>Content</h3>' . $blogs[$i]['blog_content']);
            }
            ?>
        </div> 
<?php require('footer.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> -->
</head>
<body>
    <?php 
            $allGoods = [
        [
            "title" => "Two-sided Business Cards",
            "desc" => "STARTING AT",
            "price" => "8000",
            "link" => "https://printivo.s3-us-west-2.amazonaws.com/files/category_thumbnails/1440201227_two-sided-business-cards-by-printivo.png"
        ],
        [
            "title" => "Round Stickers (3.5 Diameter)",
            "desc" => "STARTING AT",
            "price" => "8000",
            "link" => "https://printivo.s3-us-west-2.amazonaws.com/files/category_thumbnails/1656003107_social-media--15.png"
        ],
        [
            "title" => "A5 flyers (Single Sided)",
            "desc" => "STARTING AT",
            "price" => "8000",
            "link" => "https://printivo.s3-us-west-2.amazonaws.com/files/category_thumbnails/1572522725_flyer-1sided.png"
        ],
        [
            "title" => "Two-sided Business Cards",
            "desc" => "STARTING AT",
            "price" => "8000",
            "link" => "https://printivo.s3-us-west-2.amazonaws.com/files/category_thumbnails/1661456358_social-media--16.png"
        ],
        [
            "title" => "Two-sided Business Cards",
            "desc" => "STARTING AT",
            "price" => "8000",
            "link" => "https://printivo.s3-us-west-2.amazonaws.com/files/category_thumbnails/1439790190_postcard.jpg"
            
        ],
        [
            "title" => "Two-sided Business Cards",
            "desc" => "STARTING AT",
            "price" => "8000",
            "link" => "https://printivo.s3-us-west-2.amazonaws.com/files/category_thumbnails/1439790190_postcard.jpg"
        ],
        ];

    // print_r($allStudents[1]["firstname"]);
    for ($i=0; $i < count($allGoods); $i++) { 
        echo("
        <div class='card col-sm-3 border border-danger' style='width: 18rem;'>
        <img src={$allGoods[$i]["link"]} class='card-img-top' alt='...'>
        <div class='card-body'>
          <h5 class='card-title'>{$allGoods[$i]["title"]}</h5>
          <p class='card-text'>{$allGoods[$i]["desc"]}</p>
          <a href='#' class='btn btn-primary'>Browse {$allGoods[$i]["title"]}</a>
        </div>
        </div>
");
        // echo("<h1></h1>");
        // echo("<div>{$allGoods[$i]["desc"]}</div>");
    };
    ?>
<?php
include("connect.php");

$error="";

if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $image = $_FILES ['image']['name'];
    $tmp_image = $_FILES ['image']['tmp_name'];
    $imageType = $_FILES ['image']['type'];
    $cuisine = $_POST['cuisine'];
    $summary = $_POST['summary'];


    $query_item = mysqli_query ($con, "SELECT * FROM products WHERE title = '$title'");
    $numItem = mysqli_num_rows ($query_item);

    $imageExt = explode("/", $imageType);
    $image1 = $title.$category.rand(0,10).".".$imageExt[1];

    //Validation
    if($numItem > 0) {
        $error = "Product is already registered!";
    }
    else {
        
        $insertQuery = "INSERT INTO products (title, price, meal_type, summary, cuisine, image) VALUES ('$title', '$price', '$category', '$summary', '$cuisine', '$image1')";

        if(mysqli_query($con, $insertQuery)){
            
            if(move_uploaded_file($tmp_image, "assets/images/$image1")){
                $error = "Product Entered Successfully!";
            }
            else {
                $error = "Image is not uploaded!";
            }    
        }
    }
    
}


?>


<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Happy Faces</title>
    <link rel="stylesheet" href="assets/css/style11.css"/>
    <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>

</head>

<body>
    <div id="wrapper">

        <div id="error" style=" <?php  if($error !=""){ ?>  display:block; <?php } ?> "><?php echo $error; ?></div>

        <div id="formdiv">
            <form method="POST" action="additems.php" enctype="multipart/form-data">
                <label>Dish Name: </label><br/>
                <input type="text" name="title" class="inputFields" required/> <br/><br/>

                <label>Price: </label><br/>
                <input type="text" name="price" class="inputFields" required/><br/><br/>

                <label>Image: </label><br/>
                <input type="file" name="image" id="imageupload"/><br/><br/>

                <label>Cuisine: </label><br/>
                <input type="text" name="cuisine" class="inputFields" required/> <br/><br/>

                <label>Category: </label><br/>
                <input list="cat" name="category" class="" required/><br/><br/>
                <datalist id="cat">
                    <option value="Lunch">
                    <option value="Dinner">
                    <option value="Sides">
                    <option value="Drinks">
                </datalist>

                <label>Summary: </label><br/>
                <textarea name="summary" rows="4" cols="50" required> </textarea> <br/><br/>

                

                <input type="submit" name="submit" class="theButtons"/><br/>
            </form>
        </div>
    </div>

</body>
</html>
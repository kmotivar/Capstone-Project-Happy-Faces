<?php
include("connect.php");

$error="";

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $tag = $_POST['tag'];
    $email = $_POST['email'];
    $image = $_FILES ['image']['name'];
    $tmp_image = $_FILES ['image']['tmp_name'];
    $imageType = $_FILES ['image']['type'];
    $phone = $_POST['phone'];
    $about = $_POST['about'];
    $s1 = $_POST['s1'];
    $y1 = $_POST['y1'];
    $g1 = $_POST['g1'];
    $s2 = $_POST['s2'];
    $y2 = $_POST['y2'];
    $g2 = $_POST['g2'];
    $skills = $_POST['skills'];
    $exp = $_POST['exp'];
    $age = $_POST['age'];




    $query_item = mysqli_query ($con, "SELECT * FROM resume WHERE name = '$name'");
    $numItem = mysqli_num_rows ($query_item);

    $imageExt = explode("/", $imageType);
    $image1 = $name.rand(0,10).".".$imageExt[1];

    //Validation
    if($numItem > 0) {
        $error = "Resume is already added!";
    }
    else {
        
        $insertQuery = "INSERT INTO resume (Name, tag, email, phone, img, about, grade1, school1, year1, grade2, school2, year2, skills, experience ,age) VALUES ('$name', '$tag', '$email', '$phone', '$image1', '$about', '$g1', '$s1', '$y1', '$g2', '$s2', '$y2', '$skills', '$exp', '$age')";

        if(mysqli_query($con, $insertQuery)){
            
            if(move_uploaded_file($tmp_image, "assets/images/$image1")){
                $error = "Resume Entered Successfully!";
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
            <form method="POST" action="addresume.php" enctype="multipart/form-data">
                <label>Full Name: </label><br/>
                <input type="text" name="name" class="inputFields" required/> <br/><br/>

                <label>Tagline: </label><br/>
                <input type="text" name="tag" class="inputFields" required/><br/><br/>

                <label>Image: </label><br/>
                <input type="file" name="image" id="imageupload"/><br/><br/>

                <label>email: </label><br/>
                <input type="text" name="email" class="inputFields" required/> <br/><br/>

                <label>phone: </label><br/>
                <input type="text" name="phone" class="inputFields" required/> <br/><br/>

                <label>About: </label><br/>
                <textarea name="about" rows="4" cols="50" required> </textarea> <br/><br/>

                <label>School1: </label><br/>
                <input type="text" name="s1" class="inputFields" required/> <br/><br/>
                
                <label>Year1: </label><br/>
                <input type="text" name="y1" class="inputFields" required/> <br/><br/>

                <label>Grade1: </label><br/>
                <input type="text" name="g1" class="inputFields" required/> <br/><br/>

                <label>School1: </label><br/>
                <input type="text" name="s2" class="inputFields" required/> <br/><br/>
                
                <label>Year1: </label><br/>
                <input type="text" name="y2" class="inputFields" required/> <br/><br/>

                <label>Grade1: </label><br/>
                <input type="text" name="g2" class="inputFields" required/> <br/><br/>

                <label>Skills: </label><br/>
                <input type="text" name="skills" class="inputFields" required/> <br/><br/>
                
                <label>Experience: </label><br/>
                <input type="text" name="exp" class="inputFields" required/> <br/><br/>

                <label>Age: </label><br/>
                <input type="text" name="age" class="inputFields" required/> <br/><br/>

                

                <input type="submit" name="submit" class="theButtons"/><br/>
            </form>
        </div>
    </div>

</body>
</html>
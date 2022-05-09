<?php
include("connect.php");
include("functions.php");

    $error="";
    $abc = $_GET['id'];
    $query = mysqli_query($con, "SELECT * FROM resume WHERE idresume = '$abc'");
    $data = mysqli_fetch_row($query);

?>
<html>
    <head>
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
        <link rel="stylesheet" type="text/css" href="assets/css/stylep.css">
        <title>Resume</title>
        
    </head>
    <body>

        <div class="container">
            <div class="w100 f18 ff2">
                <p style="letter-spacing: 5px; padding:30px; background-color: rgb(241, 241, 241);"><?php echo $data[1];?></p>
            </div>
            <div class="w100 ff1" style="margin-bottom: 50px;">
                <p class="f28">Hi, my name is <?php echo $data[1];?>.</p>
                <p class="f28"><?php echo $data[2];?></p>
                <p class="f18"><?php echo $data[3];?></p>
                <p class="f18"><?php echo $data[4];?></p>
                <ul class="ff3 f18">
                    <a href="#about"><li>About Me</li></a>
                    <a href="#es"><li>Education & Skills</li></a>
                    <a href="#exp"><li>Experience</li></a>

                </ul>
                <button class="btn ff2" onclick="window.print();" type="button">DOWNLOAD RESUME</button>
            </div>
            <div class="w100">
                <img src="assets/images/<?php echo $data[5];?>" height="80%" width="80%">
            </div>
            <div id="about" class="w100 ff3" style="margin: 0 25%; padding-bottom: 3em; ">
                <p style="font-size: 54px;">About me? 🧐</p>
                <p><?php echo $data[6];?></p>
                <br/>
            </div>
            <div id="es" class="w100 grid-container ff1" style="background-color: whitesmoke; margin: 0; " >
                <div class="item1 ff3" style="font-size: 50px;">
                    <p>Schools that I went to</p>
                    <p>and</p> 
                    <p>Things that I know</p>
                </div>
                <div class="item2 f28 ff2">
                    Education
                </div>
                <div class="item3 f18">
                    <p class="ff2"><?php echo $data[7];?> </p>
                    <p><?php echo $data[8];?></p>
                    <p><?php echo $data[9];?></p>
                </div>
                <div class="item4 f18">
                    <p class="ff2"><?php echo $data[10];?></p>
                    <p><?php echo $data[11];?></p>
                    <p><?php echo $data[12];?></p>
                </div>
                <div class="item2 f28 ff2">
                    Skills
                </div>
                <?php 
                    $parts = explode(',', $data[13]);
                ?>
                <div class="item3 f18">
                    <?php 
                    for ($x = 0; $x < count($parts)/2; $x++) {
                    echo '<p>'.$parts[$x].'</p>';
                    }
                    
                    ?>  
                </div>
                <div class="item4 f18">
                <?php 
                    for ($x = count($parts)/2; $x < count($parts); $x++) {
                    echo '<p>'.$parts[$x].'</p>';
                    }
                    
                    ?>  
                </div>
            </div>
            
            <div id="exp" class="w50 ff3" style="font-size: 50px; padding: 2em;"><p>Experience</p></div>
            <div class="w50 f18 ff1" style="padding: 6em 2em;">
                <p><li><?php echo $data[14];?></li></p>
            </div>
            
            <div id="acc" class="w50 ff3" style="font-size: 50px; background-color: rgb(241, 241, 241); padding: 2em; "><p>Thank You!</p></div>    

        </div>
        <script type="text/javascript" src="../script.js"></script>
    </body>
</html>


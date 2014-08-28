<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <title>swarje</title>
    </head>
    <body>
        <?php
        $kungen = 1337;
        $satan = 666;
        $livet = 42;
        $robin = "swag";
        $alex = "volvo";
        
        #swag
        if($kungen==1337){
            echo "<div><p>VÄLFÄRD!</p></div>";
            echo "<br>";
        }
        else if($satan==1337){
            echo "dra åt helvete";
        }
        else{
            echo "RYSSEN KOMMER";
            echo "<br>";
        }
        switch($robin){
            case "swag":
                echo "<p>KNUGEN!</p>";
                echo "<br>";
                break;
            default: 
                echo "404 swag not found";
                echo "<br>";
        }
        ?>
    </body>
</html>

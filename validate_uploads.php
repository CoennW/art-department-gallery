<?php

include 'db_connect.php';

$sql = "SELECT id, artist, name_artwork, instagram, path FROM uploaded_art";
$result = mysqli_query($conn, $sql);


?>


    <!doctype html>

    <html lang="en">

    <head>
        <meta charset="utf-8">

        <title>Upload your art</title>
        <meta name="description" content="THEARTDEPARTMENT">
        <meta name="author" content="SitePoint">





    </head>

    <body>


        <html>

        <body>

            <?php
            
                if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                        echo "id: " . $row["id"]. " - Artist: " . $row["artist"]. " - Name of artwork: " . $row["name_artwork"] . " - Instagram: " . $row["instagram"] . "<img src=" . $row["path"] . " alt='nothing'>" . "<br>";
                            }
                        } else {
                        echo "0 results";
                        }
            
            ?>

        </body>

        </html>

    </body>

    </html>

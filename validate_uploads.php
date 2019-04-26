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
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
        
        



    </head>

    <body>


        <html>

        <body>
                <p>ID: <span id="txtHint"></span></p>
            <?php
                
            
            
            
            
                if (mysqli_num_rows($result) > 0) {
                    
                    echo "<table border='1'> <tr>
                            <th>ID</th>
                            <th>Artist</th>
                            <th>Name Artwork</th>
                            <th>Art piece</th>
                            <th>Yes/No</th>
                            </tr>"; 
                    
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            
                            
                        echo "<tr><td>".$row["id"]."</td>
                        <td>".$row["artist"]."</td>
                        <td>".$row["name_artwork"]."</td>
                        <td><img src=".$row["path"]." height='30%'></td>
                        <td><input type='submit' id=".$row["id"]." class='button' name='ok' value='ok' onclick='validate(".$row["id"].")'/>
                        
                        
                        
                        <input type='submit' id=".$row["id"]." class='button' name='delete' value='delete' onclick='validate(".$row["id"], ")'/></td></tr>";
                            
                        
                            
                            
                            }
                        } else {
                        echo "0 results";
                        }
            
            ?>
                
        </body>
            
        </html>
<script src="js/main.js"></script>
    </body>

    </html>

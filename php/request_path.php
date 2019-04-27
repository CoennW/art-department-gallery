 <?php

include 'db_connect.php';



$sql = 'SELECT id, artist, name_artwork, instagram, path, validation FROM uploaded_art WHERE validation="OK"';

$result = mysqli_query($conn, $sql);
    
if (mysqli_num_rows($result) > 0)

{



    // output data of each row

    while($row = mysqli_fetch_assoc($result))

    {
        
      echo '<img src="' . $row['path'] . '" alt="' . $row['name_artwork'] . '">';

      

    }

}

else

{

  echo '0 results';

}

include 'db_closeCon.php';

?>
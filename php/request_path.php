 <?php

include 'db_connect.php';



$sql = 'SELECT id, artist, name_artwork, instagram, path, validation FROM uploaded_art WHERE validation="OK"';

$result = mysqli_query($conn, $sql);
    
if (mysqli_num_rows($result) > 0)

{

echo '<table border="1"> <tr>

        <th>ID</th>

        <th>Artist</th>

        <th>Name Artwork</th>

        <th>Art piece</th>

        <th>Yes/No</th>

        <th>Validation</th>

        </tr>';



    // output data of each row

    while($row = mysqli_fetch_assoc($result))

    {

      echo

      '<tr><td>' . $row['id'] . '</td>

      <td>' . $row['artist'] . '</td>

      <td>' . $row['name_artwork'] . '</td>

      <td><img src="' . $row['path'] . '" height="30%"></td>

      <td><input type="submit" id="' . $row['id'] . '" class="button" name="ok" value="ok" onclick="validate(' . $row['id'] . ',\'ok\')">';



      echo

      '<input type="submit" id="' . $row['id'] . '" class="button" name="delete" value="delete" onclick="validate(' . $row['id'] . ',\'delete\')"></td>

      <td>' . $row['validation'] . '</td></tr>';

    }

}

else

{

  echo '0 results';

}

include 'db_closeCon.php';

?>
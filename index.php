<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">

    <title>Upload your art</title>
    <meta name="description" content="THEARTDEPARTMENT">
    <meta name="author" content="SitePoint">
    <link rel="stylesheet" type="text/css" href="css/uploadform_style.css">




</head>



    <html>

    <body>
        <img src="img/logo.png" alt="">
        <form action="php/db_upload.php" method="POST" enctype="multipart/form-data">
            <ul class="form-style-1">
                <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />


                <li><label>Artist </label><input type="text" name="artist" class="field-divided" placeholder="Your name(optional)" />


                    <li>
                        <label>Instagram </label>
                        <input type="text" name="instagram" class="field-long" placeholder="Let other people find you(optional)" />
                    </li>

                    <li>
                        <label>Art file <span class="required">*</span></label>
                        <input type="file" name="pictures" class="field-long" />
                    </li>

                    <li>
                        <label>Name of art piece <span class="required">*</span></label>
                        <input type="text" name="name_artwork" class="field-long" />
                    </li>

                    <!--Artist: <input type="text" name="artist" /> <br>
                Instagram: <input type="text" name="instagram"> <br>  
                Art file: <input type="file" name="pictures" accept="image/*" /> <br>
                Art name: <input type="text" name="name_artwork"> <br>-->
                    <li>
                        <input type="submit" value="upload" />
                        <label>All your data will be destroyed when The Art Depertment ends.</label>
                    </li>
            </ul>
        </form>

 

</body>

</html>

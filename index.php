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

            <form  action="php/db_upload.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="MAX_FILE_SIZE" value="10000000" /> 
                Artist: <input type="text" name="artist" /> <br>
                Instagram: <input type="text" name="instagram"> <br>  
                Art file: <input type="file" name="pictures" accept="image/*" /> <br>
                Art name: <input type="text" name="name_artwork"> <br> 
                
                <input type="submit" value="upload" />
            </form>

        </body>

        </html>

    </body>

    </html>

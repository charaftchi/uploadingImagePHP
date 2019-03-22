<!DOCTYPE html>
<html lang="en">

<?php
require_once 'temp.php';
require_once 'uploadFiles/master.php';
?>
<body>



    <div class="container-fluid bg-dark">
        <h1 align="center" class="text-white"> © Charaf Tchi
        </h1>
    </div>

    <div class="container img-thumbnail" style="margin-top:10%;">
        <form enctype="multipart/form-data" action="uploadFiles/insert.php" method="post">

            <div class="form-group">
                <label for="img"><span class="badge badge-dark"><i class="fa fa-picture-o" aria-hidden="true"></i>
 upload your image:</span></label>
                <div class="custom-file">
                    <input type="file" name="files[]" multiple class="custom-file-input" id="customFile" required>
                    <label class="custom-file-label" for="customFile">Choose image</label>
                </div>

            </div>
            <button type="submit" name="submit" class="btn btn-dark btn-block"><i class="fa fa-upload" aria-hidden="true"></i>
upload</button>
        </form>
    </div>

</body>

</html>
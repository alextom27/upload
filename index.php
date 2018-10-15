<!DOCTYPE html>


<?php

require_once 'upload.php';
require_once 'unlink.php';

?>

<html lang="en">
<head>
    <meta charset="UTF-8">

    <!--bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Multiple images upload</title>
</head>
<body>


<div class="container">
    <div class="row" style="padding-top: 3%">
        <div class="col">

            <form action="upload.php" method="post" enctype="multipart/form-data">
                <input type="file" name="files[]" multiple="multiple"/>
                <input type="submit" value="Upload"/>
            </form>
        </div>
    </div>

    <div class="row" style="padding-top: 3%">
        <?php

        $files = scandir('uploads');

        foreach ($files as $file) {
            if ($file != '.' and $file != '..') {

                ?>

                <div class="col">
                    <div class="card" style="width:18rem;">
                        <img class="card-img-top" src="uploads/<?php echo $file ?>" alt="Numero <?= $file ?>">
                        <div class="card-body">
                            <p class="card-title"><?= $file ?></p>
                            <a href="index.php?delete=<?php echo $file; ?>"
                               class="btn btn-outline-danger">Delete</a>
                        </div>
                    </div>
                </div>
            <?php }
        } ?>

    </div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

</body>


<?php

if(isset($_REQUEST['delete'])) {
    $link = 'uploads/'.$_REQUEST['delete'];
    if(unlink($link)) {
        echo "deleted";
    } /* else {
        echo "fail delete";
    }*/
}

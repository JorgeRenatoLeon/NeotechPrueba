<?php

    $connect=mysqli_connect('35.229.92.94','root','test','prueba_jorge');

    if(mysqli_connect_errno($connect))
    {
        echo 'Failed to connect';
    }
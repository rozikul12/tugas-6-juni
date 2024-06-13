<?php
    $NIM       = $_POST['NIM'];
    $Password  = $_POST['Password'];

    $N = 'A12.2022.06816';//NIM
    $P = 'polke001';//Password

    if($NIM == $N AND $Password ==$P)
    {
        session_start();
        $_SESSION['nama'] = $NIM;
        $_SESSION['is_logged_id'] = TRUE;

        header("Location: beranda.html");
    }
    else
    {
        echo "NIM atau Password salah";
    }

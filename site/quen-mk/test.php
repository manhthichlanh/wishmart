<?php

    $passnew = password_hash("M0M0MLTc@", PASSWORD_DEFAULT);
    echo $passnew;
    if (password_verify("168256", '$2y$10$JhqgCL.Vioxe72n9CB8OWuRourlFfO/pMdriwDLWl1bAtp6IDje8q')) {
        echo "Password is valid!";
    } else {
        echo "Invalid password.";
    }
   
?>


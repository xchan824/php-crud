<?php
    require ('./connection/database.php');

    // $query_create = "INSERT INTO register (first_name, last_name, email, password, gender, user_role)
    // VALUES('$first_name', '$last_name', '$email', '$password', '$gender', '$user_role')";

    $query_retrieve =  "SELECT * from register";

    $sql_retrieve = mysqli_query($connection, $query_retrieve) OR trigger_error('Query FAILED! sql:$query_retrieve ERROR: '.mysqli_error($connection), E_USER_ERROR);
?>
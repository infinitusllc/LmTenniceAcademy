<?php

session_start();

if(isset($_POST['submit'])){

    include 'dbc.inc.php';

    $uname = mysqli_real_escape_string($conn, $_POST['username']);
    $pass = mysqli_real_escape_string($conn, $_POST['password']);

    //Error handlers
    //check if empty
    if (!(empty($uname) || empty($pass))) {
        $sql = "SELECT * FROM admins WHERE username ='$uname'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck < 1){
            header("Location: ../ind.php?message=error3");
            exit();
        } else {
            if ($row = mysqli_fetch_assoc($result)) {
                //dehashing the password
                if($row['password'] != $pass) {
                    echo "incorrect password";
                    exit();
                } else if ($row['password'] == $pass) {
                    //Log in the admin here
                    $_SESSION['admin'] = true;
                    header("Location: ../index.php");
                    exit();
                }
            } else {
                header("Location: ../ind.php?message=error4");
                exit();
            }
        }
    } else {
        header("Location: ../ind.php?message=error2");
        exit();
    }
} else {
    header("Location: ../ind.php?message=error1");
    exit();
}

?>
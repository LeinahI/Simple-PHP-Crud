<?php
include 'config.php';
session_start();

/* deletedata start */
if (isset($_POST['deletedata'])) {
    $id = $_POST['delete_id'];

    $query = "DELETE tbl_info, tbl_user
    FROM tbl_info  
    JOIN tbl_user ON tbl_info.id = tbl_user.id_user
    WHERE tbl_user.id_user = '$id'";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        $_SESSION['status'] = "Data is deleted!";
        $_SESSION['status_code'] = "success";
        header("Location:page_admin.php");
    } else {
        die(mysqli_error($conn));
    }
}
/* deletedata end */

/* updatedataAdmin start */
if (isset($_POST['updatedataAdmin'])) {
    $id  = $_POST['update_id'];

    $uname = $_POST['username']; 
    $pw = $_POST['password'];
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $addr = $_POST['address'];
    $gender = $_POST['gender_type'];
    $bdate = $_POST['birthdate'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $user_type = $_POST['user_type'];

    $uname_query = " SELECT * FROM tbl_user WHERE uname = '$uname'";
    $uname_query_run = mysqli_query($conn, $uname_query);

    if (mysqli_num_rows($uname_query_run) > 1) {
        $_SESSION['status'] = "username is already taken";
        $_SESSION['status_code'] = "error";
        header('location:page_admin.php');
    } else {
        $updateAdmin = "UPDATE tbl_user
        JOIN tbl_info ON tbl_user.id_user = tbl_info.id
        SET
        tbl_user.uname = '$uname', 
        tbl_user.password = '$pw', 
        tbl_info.fname = '$fname', 
        tbl_info.lname = '$lname', 
        tbl_info.address = '$addr', 
        tbl_info.gender = '$gender', 
        tbl_info.age = '$age', 
        tbl_info.birthdate = '$bdate', 
        tbl_info.email = '$email', 
        tbl_user.user_type = '$user_type'
        WHERE tbl_user.id_user = '$id';";

        mysqli_query($conn, $updateAdmin);

        $_SESSION['status'] = "Data updated!";
        $_SESSION['status_code'] = "success";
        header("location:page_admin.php");
    }
};
/* updatedataAdmin end */

/* updatedataUser start */
if (isset($_POST['updatedataUser'])) {
    $id  = $_POST['update_id'];

    $uname = $_POST['username'];
    $pw = $_POST['password'];
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $addr = $_POST['address'];
    $gender = $_POST['gender_type'];
    $bdate = $_POST['birthdate'];
    $age = $_POST['age'];
    $email = $_POST['email'];

    $uname_query = " SELECT * FROM tbl_user WHERE uname = '$uname'";
    $uname_query_run = mysqli_query($conn, $uname_query);

    if (mysqli_num_rows($uname_query_run) > 1) {
        $_SESSION['status'] = "username is already taken";
        $_SESSION['status_code'] = "error";
        header('location:page_user.php');
    } else {
        $updateUser = "UPDATE tbl_user
        JOIN tbl_info ON tbl_user.id_user = tbl_info.id
        SET
        tbl_user.uname = '$uname', 
        tbl_user.password = '$pw', 
        tbl_info.fname = '$fname', 
        tbl_info.lname = '$lname', 
        tbl_info.address = '$addr', 
        tbl_info.gender = '$gender', 
        tbl_info.age = '$age', 
        tbl_info.birthdate = '$bdate', 
        tbl_info.email = '$email'
        WHERE tbl_user.id_user = '$id';";
        mysqli_query($conn, $updateUser);

        $_SESSION['status'] = "Data updated!";
        $_SESSION['status_code'] = "success";
        header("location:page_user.php");
    }
};
/* updatedataUser end */

/* addData start */
if (isset($_POST['addDataAdmin'])) {
    $uname = mysqli_real_escape_string($conn, $_POST['username']);
    $pw = ($_POST['password']);
    $fname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $addr = mysqli_real_escape_string($conn, $_POST['address']);
    $gender = $_POST['gender_type'];
    $bdate = $_POST['birthdate'];
    $age = mysqli_real_escape_string($conn, $_POST['age']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $user_type = $_POST['user_type'];

    $uname_query_add = " SELECT * FROM tbl_user WHERE uname = '$uname'";
    $uname_query_add_run = mysqli_query($conn, $uname_query_add);

    if (mysqli_num_rows($uname_query_add_run) > 0) {
        $_SESSION['status'] = "username is already taken";
        $_SESSION['status_code'] = "error";
        header('location:page_admin.php');
    } else {
        $insertUser = "INSERT INTO
        tbl_user(uname, password, user_type)
        VALUES('$uname','$pw','$user_type')";

        $insertInfo = "INSERT INTO
        tbl_info(fname, lname, address,
        gender, age, birthdate, email)
        VALUES ('$fname','$lname','$addr',
        '$gender', '$age','$bdate,','$email')";

        mysqli_query($conn, $insertUser);
        mysqli_query($conn, $insertInfo);

        $_SESSION['status'] = "New Profile Added";
        $_SESSION['status_code'] = "success";
        header('location:page_admin.php');
    }
};

/* addData end */

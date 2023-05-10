<?php
@include 'config.php';

if (isset($_POST['submit'])) {
    $fname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $addr = mysqli_real_escape_string($conn, $_POST['address']);
    $gender = $_POST['gender_type'];
    $age = mysqli_real_escape_string($conn, $_POST['age']);
    $bdate = $_POST['birthdate'];
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    $uname = mysqli_real_escape_string($conn, $_POST['username']);
    $pw = ($_POST['password']);
    $cpw = ($_POST['cpassword']);
    $user_type = $_POST['user_type'];

    $select = " SELECT * FROM tbl_user 
        WHERE uname = '$uname'";

    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {
        $error[] = 'user already exists!';
    } else {
        if ($pw != $cpw) {
            $error[] = 'password is not matched!';
        } else {
            $insertUser = "INSERT INTO tbl_user(uname, password, user_type)
            VALUES('$uname','$pw','$user_type')";
            $insertInfo = "INSERT INTO tbl_info(fname, lname, address,
            gender, age, birthdate, email) VALUES ('$fname','$lname',
            '$addr', '$gender', '$age','$bdate,','$email')";
            mysqli_query($conn, $insertUser);
            mysqli_query($conn, $insertInfo);
            header('location:form_login.php');
        }
    }
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>

    <!--bootstrap & font-awesome icons cdn start-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!--bootstrap & font-awesome icons cdn end-->

    <!--css start-->
    <link rel="stylesheet" href="style.css">
    <!--css end-->

    <style>
        .pw-eye {
            position: absolute;
            top: 64%;
            left: 63.3%;
            cursor: pointer;
            color: black;
            user-select: none;
        }

        /*//!Media Queries start */
        @media only screen and (max-width: 1280px) {

            /*Nesthub max */
            .pw-eye {
                position: absolute;
                top: 72.5%;
                left: 69%;
            }
        }

        @media only screen and (max-width: 1024px) {

            /*Nesthub */
            .pw-eye {
                position: absolute;
                top: 96.5%;
                left: 74%;
            }
        }

        @media only screen and (max-width: 912px) {

            /*SP 7 */
            .pw-eye {
                position: absolute;
                top: 59.3%;
                left: 77%;
            }
        }

        @media only screen and (max-width: 820px) {

            /*iPad Air */
            .pw-eye {
                position: absolute;
                top: 60.8%;
                left: 80%;
            }
        }

        @media only screen and (max-width: 768px) {

            /*iPad Mini */
            .pw-eye {
                position: absolute;
                top: 62.4%;
                left: 82%;
            }
        }

        @media only screen and (max-width: 540px) {

            /*Surface Duo */
            .pw-eye {
                position: absolute;
                top: 80.4%;
                left: 86%;
            }
        }

        @media only screen and (max-width: 414px) {

            /*iphone xr */
            .pw-eye {
                position: absolute;
                top: 64.6%;
                left: 82%;
            }
        }

        @media only screen and (max-width: 412px) {

            /*smg s20 u & sg a51/71*/
            .pw-eye {
                position: absolute;
                top: 63.3%;
                left: 82%;
            }
        }

        @media only screen and (max-width: 393px) {

            /*Pixel 5*/
            .pw-eye {
                position: absolute;
                top: 68%;
                left: 81%;
            }
        }

        @media only screen and (max-width: 390px) {

            /*iphone 12 pro*/
            .pw-eye {
                position: absolute;
                top: 68.7%;
                left: 81%;
            }
        }

        @media only screen and (max-width: 375px) {

            /*iphone se*/
            .pw-eye {
                position: absolute;
                top: 87%;
                left: 80.5%;
            }
        }

        @media only screen and (max-width: 280px) {

            /*galaxy fold*/
            .pw-eye {
                position: absolute;
                top: 88.7%;
                left: 77%;
            }
        }



        /*//!Media Queries end */
    </style>

    <!--jquery start-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js" integrity="sha512-57oZ/vW8ANMjR/KQ6Be9v/+/h6bq9/l3f0Oc7vn6qMqyhvPd1cvKBRWWpzu0QoneImqr2SkmO4MSqU+RpHom3Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--jquery end-->
</head>

<body>
    <div class="form-container container-fluid">
        <form action="" method="post">
            <h3>Registration</h3>
            <?php
            if (isset($error)) {
                foreach ($error as $error) {
                    echo '<span class="error-msg">' . $error . '</span>';
                };
            };
            ?>
            <input type="text" name="firstname" required placeholder="enter your first name">
            <input type="text" name="lastname" required placeholder="enter your last name">
            <input type="text" name="address" required placeholder="enter your address">
            <select name="gender_type" required placeholder="Gender">
                <option value="" disabled selected>Gender</option>
                <option value="male">male</option>
                <option value="female">female</option>
                <option value="other">other</option>
            </select>
            <input type="date" class="bdate" name="birthdate" required placeholder="enter your birthdate">
            <input readonly type="text" name="age" class="ageget" placeholder="Your age is: ">
            <input style="margin-bottom: 30px;" type="email" name="email" required placeholder="enter your email">

            <input type="text" name="username" required placeholder="enter your username">
            <input type="password" name="password" class="pwdfa" required placeholder="enter your password">
            <i class="fa-solid fa-eye pw-eye"></i>

            <input type="password" name="cpassword" class="pwdfb" required placeholder="confirm your password">
            <select name="user_type" required>
                <option value="" disabled selected>Role</option>
                <option value="user">user</option>
                <option value="admin">admin</option>
            </select>

            <input type="submit" name="submit" value="register now" class="form-btn">
            <p>Already have an account? <a href="form_login.php">Log in now</a></p>
        </form>
    </div>

    <script>
        $(function() {
            var dtToday = new Date();

            var month = dtToday.getMonth() + 1;
            var day = dtToday.getDate();
            var year = dtToday.getFullYear();

            if (month < 10)
                month = '0' + month.toString();
            if (day < 10)
                day = '0' + day.toString();

            var maxDate = year + '-' + month + '-' + day;
            $('.bdate').attr('max', maxDate);

        });
        $(document).ready(function() {
            $('.bdate').change(function() {
                var dob = new Date($(this).val());
                var today = new Date();
                var age = Math.floor((today - dob) / (365.25 * 24 * 60 * 60 * 1000));
                $('.ageget').val(age);
            });
        });

        function formatDate(date) {
            var parts = date.split("-");
            return parts[1] + "/" + parts[2] + "/" + parts[0];
        }

        //* update Password eye icon start
        const passwordInput = document.querySelector(".pwdfa")
        const passwordInputb = document.querySelector(".pwdfb")
        const eye = document.querySelector(".pw-eye")
        eye.addEventListener("click", function() {
            this.classList.toggle("fa-eye-slash")
            const type = passwordInput.getAttribute("type") === "password" ? "text" : "password"
            passwordInput.setAttribute("type", type)
            const typeb = passwordInputb.getAttribute("type") === "password" ? "text" : "password"
            passwordInputb.setAttribute("type", typeb)
        })
        //* update Password eye icon end
    </script>
</body>

</html>
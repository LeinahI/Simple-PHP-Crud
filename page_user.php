<?php
include 'config.php';
session_start();
$usrN = $_SESSION['user_name'];
if (!isset($_SESSION['user_name'])) {
    header('location:form_login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>

    <!--jquery cdn start-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--jquery cdn end-->

    <!--bootstrap cdn start-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--bootstrap cdn end-->

    <!--popper cdn start-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <!--bootstrap cdn end-->

    <!--bootstrap & font-awesome icons cdn start-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!--bootstrap & font-awesome icons cdn end-->

    <!-- css start -->
    <style>
        .eyeLogin {
            position: absolute;
            top: 51%;
            right: 3%;
            cursor: pointer;
            color: black;
            user-select: none;
        }
        .udbtn {
            background: #157347;
            color: #E5EFEA;
            cursor: pointer;
        }
        .udbtn:hover {
            background: #B1D0C1;
            color: #157347;
        }
    </style>
    <!-- css end -->
</head>

<body>
    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="page_admin.php">User Page</a>
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">

                    </li>
                </ul>
                <div class="d-flex">
                    <!--about us Button trigger modal start-->
                    <button type="button" class="btn btn-secondary shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#abtusModal">
                        About us
                    </button>
                    <!--about us  Button trigger modal start-->
                    <button type="button" class="btn btn-secondary shadow-none me-lg-3 me-2" onclick="location.href='logout.php';">
                        Log out
                    </button>
                </div>
            </div>
        </div>
    </nav>
    <!-- navbar end -->

    <!--//! Modals start -->
    <!--//?about us modal start-->
    <div class="modal fade mt-4" id="abtusModal" data-bs-backdrop="static" tabindex="-1" data-bs-keyboard="false" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center">
                            About Us
                        </h5>
                        <button type="reset" class="btn-close btnLogin shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-2">
                            <h3 class="form-label">Developed by</h3>
                        </div>
                        <div class="mb-1">
                            <label class="form-label">Nathaniel Gatpandan:&nbsp;
                                <a href="https://github.com/LeinahI" target="_blank" style="color: inherit;"><i class="fa-brands fa-github fa-lg"></i></a>&nbsp;
                                <a href="https://www.behance.net/leinaharts" target="_blank" style="color: inherit;"><i class="fa-brands fa-behance fa-lg"></i></a>&nbsp;
                                <a href="https://www.artstation.com/leinaharts" target="_blank" style="color: inherit;"><i class="fa-brands fa-artstation fa-lg"></i></a>&nbsp;
                                <a href="https://sketchfab.com/leinaharts" target="_blank" style="color: inherit; text-decoration:none; font-weight: bold;">sketchfab</a>
                            </label>
                        </div>
                        <div class="mb-1">
                            <label class="form-label">Ana Bien Beatriz Salazar</label>
                        </div>
                        <div class="mb-1">
                            <h3>References</h3>
                            <label class="form-label"><a style="color: inherit; text-decoration:none; font-weight: bold;" href="https://youtu.be/fC3j2U_UZrQ">link 1</a></label>
                            <label class="form-label"><a style="color: inherit; text-decoration:none; font-weight: bold;" href="https://www.youtube.com/playlist?list=PLRheCL1cXHrsnOsrT3PxmHDMLbZEwqPZ5">link 2</a></label>
                            <label class="form-label"><a style="color: inherit; text-decoration:none; font-weight: bold;" href="https://youtu.be/C4N3sMg25fQ">link 3</a></label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--//?about us modal end-->

    <!--//?Update Modal start -->
    <div class="modal fade mt-5" id="updateModal" tabindex="-1" data-bs-backdrop="static" tabindex="-1" data-bs-keyboard="false" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center">
                    <h5 class="modal-title d-flex align-items-center">
                        <i class="bi bi-person-lines-fill fs-3 me-2"></i>Update Data
                    </h5>
                    <button type="button" class="btn-close close-update" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="confirm.php" method="POST">
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <input type="hidden" class="update_id" name="update_id">
                                <div class="col-md-6 ps-0 mb-3 form-floating">
                                    <input type="text" name="username" id="unamefloat" placeholder="uname" class="form-control uname shadow-none">
                                    <label for="unamefloat">username</label>
                                </div>
                                <div class="col-md-6 p-0 mb-3 form-floating">
                                    <input type="password" name="password" id="floatingPassword" placeholder="Password" class="form-control pw passwords shadow-none">
                                    <label for="floatingPassword">password</label>
                                    <i class="fa-solid fa-eye eyeLogin" id="eyeLogin"></i>
                                </div>
                                <div class="col-md-6 ps-0 mb-3 form-floating">
                                    <input type="text" name="firstname" id="fnfloatud" placeholder="fname" class="form-control fname shadow-none">
                                    <label for="fnfloatud">First Name</label>
                                </div>
                                <div class="col-md-6 ps-0 mb-3 form-floating">
                                    <input type="text" name="lastname" id="lnfloatud" placeholder="lname" class="form-control lname shadow-none">
                                    <label for="lnfloatud">Last Name</label>
                                </div>
                                <div class="col-md-6 ps-0 mb-3 form-floating">
                                    <input type="text" name="address" id="addrfloatud" placeholder="addr" class="form-control addr shadow-none">
                                    <label for="addrfloatud">Address</label>
                                </div>
                                <div class="col-md-6 ps-0 mb-3 form-floating">

                                    <select name="gender_type" class="gender form-select" id="genderfloatud" placeholder="Gender" required>
                                        <option value="male">male</option>
                                        <option value="female">female</option>
                                        <option value="other">other</option>
                                    </select>
                                    <label for="genderfloatud">Gender</label>
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Birthdate</label>
                                    <input type="date" id="bdate" name="birthdate" placeholder="enter your birthdate" style="width: 100%; font-size: 15px; padding: 6px; border-color: #CED4DA; border-radius: 5px;">
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Age</label>
                                    <input readonly type="text" name="age" class="form-control ageget shadow-none">
                                </div>
                                <div class="col-md-6 ps-0 mb-3 form-floating">
                                    <input type="email" name="email" id="rolefloatud" placeholder="roletype" class="form-control email shadow-none">
                                    <label for="rolefloatud">Email</label>
                                </div>
                            </div>
                        </div>
                        <div class="text-center my-1 mt-2 mb-2">
                            <button type="submit" name="updatedataUser" class="btn btn-success udbtn" data-bs-dismiss="modal">Update Data</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <!--//?Update Modal end -->
    <!--//! Modals end -->

    <!-- table start -->
    <div class="container mt-5">
        <div class="jumbotron">
            <div class="card">
                <div class="card-body">
                    <!-- main table start -->
                    <h3 class="d-flex justify-content-center">welcome <span style="color:crimson;"> <?php echo '&nbsp;' . $usrN; ?></span></h3>
                    <div class="table-responsive mt-3">
                        <table class="table mx-auto my-auto table-bordered table-hover" id="myTable" style="width: 80%;">
                            <thead class="table-danger">
                                <tr>
                                    <th scope="col" class="text-center">ID</th>
                                    <th scope="col">username</th>
                                    <th scope="col">password</th>
                                    <th scope="col">first name</th>
                                    <th scope="col">last name</th>
                                    <th scope="col">address</th>
                                    <th scope="col">gender</th>
                                    <th scope="col">age</th>
                                    <th scope="col">birthdate</th>
                                    <th scope="col">email</th>
                                    <th scope="col" class="text-center">Operation</th>
                                </tr>
                            </thead>

                            <!--PHP mysql select table start-->
                            <?php
                            $sql = "SELECT
                                tbl_user.id_user, tbl_user.uname, tbl_user.password,
                                tbl_info.fname, tbl_info.lname, tbl_info.address,
                                tbl_info.gender, tbl_info.age, tbl_info.birthdate,
                                tbl_info.email FROM tbl_user  JOIN tbl_info
                                ON tbl_user.id_user = tbl_info.id
                                WHERE tbl_user.uname = '$usrN';";
                            $result = mysqli_query($conn, $sql);
                            if ($result) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $id = $row['id_user'];
                                    $uname = $row['uname']; ?>
                                    <!--PHP mysql select table end-->

                                    <tbody>
                                        <tr>
                                            <td class="text-center"><?php echo $id ?></td>
                                            <td><?php echo $uname ?></td>
                                            <td><?php echo $row['password']; ?></td>
                                            <td><?php echo $row['fname']; ?></td>
                                            <td><?php echo $row['lname']; ?></td>
                                            <td><?php echo $row['address']; ?></td>
                                            <td><?php echo $row['gender']; ?></td>
                                            <td><?php echo $row['age']; ?></td>
                                            <td><?php echo $row['birthdate']; ?></td>
                                            <td><?php echo $row['email']; ?></td>
                                            <td id="opr" class="text-center">

                                                <!-- Update btn trigger modal start -->
                                                <button type="button" class="btn btn-success updadeBtn udbtn" data-bs-toggle="modal" data-bs-target="#updateModal">
                                                    Update
                                                </button>
                                                <!-- Update btn trigger modal end -->

                                            </td>
                                    </tbody>
                                    <!--//!PHP mysql select table if & while brackets start -->
                            <?php
                                }
                            }
                            ?>
                            <!--//!PHP mysql select table if & while brackets start -->
                        </table>
                    </div>
                    <!-- main table end -->
                </div>
            </div>
        </div>
    </div>
    <!-- table end -->


    <!--javascript start-->
    <script>
        //* Automatig get age after birthdate input start
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
            $('#bdate').attr('max', maxDate);

        });
        $(document).ready(function() {
            $('#bdate').change(function() {
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
        //* Automatig get age after birthdate input end

        //* Transfer data from table to update modal start
        $('.updadeBtn').on('click', function() {
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            $('.update_id').val(data[0]);
            $('.uname').val(data[1]);
            $('.pw').val(data[2]);
            $('.fname').val(data[3]);
            $('.lname').val(data[4]);
            $('.addr').val(data[5]);
            $('.gender').val(data[6]);
            $('.ageget').val(data[7]);
            $('#bdate').val(data[8]);
            $('.email').val(data[9]);
            $('#roleType').val(data[10]);
        });
        //* Transfer data from table to update modal end

        //* Password eye icon start
        const passwordInput = document.querySelector(".passwords")
        const eye = document.querySelector(".eyeLogin")
        const closebtn = document.querySelector(".close-update");
        eye.addEventListener("click", function() {
            this.classList.toggle("fa-eye-slash")
            const type = passwordInput.getAttribute("type") === "password" ? "text" : "password"
            passwordInput.setAttribute("type", type)
        })
        closebtn.addEventListener("click", function() {
            if (eye.classList.contains("fa-eye-slash") == true) {
                eye.setAttribute("class", "fa-solid fa-eye eyeLogin")
                passwordInput.setAttribute("type", "password")
            }
        })
        //* Password eye icon end
    </script>
    <!--javascript end-->

    <!-- add scripts into scripts.php start -->
    <?php
    include('scripts.php');
    ?>
    <!-- add scripts into scripts.php start -->

    <!--Bootsrap JS cdn start-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!--Bootsrap JS cdn end-->
</body>

</html>
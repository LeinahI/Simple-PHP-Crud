<?php
include 'config.php';
session_start();
$admnN = $_SESSION['admin_name'];
if (!isset($_SESSION['admin_name'])) {
    header('location:form_login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>

    <!--jquery cdn start-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!--jquery cdn end-->

    <!--popper cdn start-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <!--bootstrap cdn end-->

    <!--bootstrap cdn start-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <!--bootstrap cdn end-->

    <!-- datatables css cdn start -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <!-- datatables css cdn end -->

    <!--bootstrap & font-awesome icons cdn start-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!--bootstrap & font-awesome icons cdn end-->

    <!-- css start -->
    <style>
        .update-eye,
        .addeye {
            position: absolute;
            top: 51%;
            right: 5%;
            cursor: pointer;
            color: black;
            user-select: none;
        }

        #delbtn {
            background: #fbd0d9;
            color: crimson;
            cursor: pointer;
        }

        #delbtn:hover {
            color: #fff;
            background: crimson;
        }

        .udBtn {
            background: #157347;
            color: #E5EFEA;
            cursor: pointer;
        }

        .udBtn:hover {
            background: #B1D0C1;
            color: #157347;
        }

        .addDatabtn {
            background: #0B5ED7;
            color: #fff;
            cursor: pointer;
        }

        .addDatabtn:hover {
            background: #ADC9F1;
            color: #0B5ED7;
        }
    </style>
    <!-- css end -->
</head>

<body>
    <!--Nav bar start-->
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="page_admin.php">Admin Page</a>
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
                <div class="d-flex">
                    <!--about us Button trigger modal start-->
                    <button type="button" class="btn btn-secondary shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#abtusModal">
                        About us
                    </button>
                    <!--about us  Button trigger modal start-->
                    <button type="button" class="btn btn-secondary shadow-none" onclick="location.href='logout.php';">
                        Log out
                    </button>
                </div>
            </div>
        </div>
    </nav>
    <!--Nav bar end-->

    <!--//!Modals start -->
    <!--//?about us Modal start-->
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
                                <a href="https://github.com/LeinahI" style="color: inherit;" target="_blank"><i class="fa-brands fa-github fa-lg"></i></a>&nbsp;
                                <a href="https://www.behance.net/leinaharts" style="color: inherit;" target="_blank"><i class="fa-brands fa-behance fa-lg"></i></a>&nbsp;
                                <a href="https://www.artstation.com/leinaharts" style="color: inherit;" target="_blank"><i class="fa-brands fa-artstation fa-lg"></i></a>&nbsp;
                                <a href="https://sketchfab.com/leinaharts" style="color: inherit; text-decoration:none; font-weight: bold;" target="_blank">sketchfab</a>
                            </label>
                        </div>
                        <div class="mb-1">
                            <label class="form-label">Ana Bien Beatriz Salazar</label>
                        </div>
                        <div class="mb-1">
                            <h3>References</h3>
                            <label class="form-label"><a style="color: inherit; text-decoration:none; font-weight: bold;" target="_blank" href="https://youtu.be/fC3j2U_UZrQ">link 1</a></label>
                            <label class="form-label"><a style="color: inherit; text-decoration:none; font-weight: bold;" target="_blank" href="https://www.youtube.com/playlist?list=PLRheCL1cXHrsnOsrT3PxmHDMLbZEwqPZ5">link 2</a></label>
                            <label class="form-label"><a style="color: inherit; text-decoration:none; font-weight: bold;" target="_blank" href="https://youtu.be/C4N3sMg25fQ">link 3</a></label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--//?about us Modal end-->

    <!--//?add data Modal start-->
    <div class="modal fade mt-5" id="adddataModal" tabindex="-1" data-bs-backdrop="static" tabindex="-1" data-bs-keyboard="false" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center">
                    <h5 class="modal-title d-flex align-items-center">
                        <i class="fa-solid fa-user-plus fs-4 me-2"></i>Add Data
                    </h5>
                    <button type="button" class="btn-close close-update addclose" id="ADclose" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="confirm.php" id="ADform" method="POST">
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 ps-0 mb-3 form-floating">
                                    <input type="text" placeholder="username" name="username" id="floatinguname" required class="form-control ADuname shadow-none">
                                    <label for="floatinguname">username</label>
                                </div>
                                <div class="col-md-6 ps-0 mb-3 form-floating">
                                    <input type="password" name="password" class="form-control ADpw addpw" id="floatingPassword" required placeholder="Password">
                                    <label for="floatingPassword">Password</label>
                                    <i class="fa-solid fa-eye addeye"></i>
                                </div>
                                <div class="col-md-6 ps-0 mb-3 form-floating">
                                    <input type="text" name="firstname" id="floatingfn" required placeholder="first name" class="form-control ADfname shadow-none">
                                    <label for="floatingfn">First Name</label>
                                </div>
                                <div class="col-md-6 ps-0 mb-3 form-floating">
                                    <input type="text" name="lastname" id="floatingln" required placeholder="last name" class="form-control ADlname shadow-none">
                                    <label for="floatingln">Last Name</label>
                                </div>
                                <div class="col-md-6 ps-0 mb-3 form-floating">
                                    <input type="text" name="address" id="floatingaddr" placeholder="address" required class="form-control ADaddr shadow-none">
                                    <label for="floatingaddr">Address</label>

                                </div>
                                <div class="col-md-6 ps-0 mb-3 form-floating">
                                    <select name="gender_type" id="floatingSelect" class="form-select" required placeholder="Gender">
                                        <option value="male">male</option>
                                        <option value="female">female</option>
                                        <option value="other">other</option>
                                    </select>
                                    <label for="floatingSelect">Gender</label>
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Birthdate</label>
                                    <input type="date" id="ADbdate" name="birthdate" required placeholder="enter your birthdate" style="width: 100%; font-size: 15px; padding: 6px; border-color: #CED4DA; border-radius: 5px;">
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Age</label>
                                    <input readonly type="text" name="age" id="ADageget" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 ps-0 mb-3 form-floating">
                                    <input type="email" id="floatemail" name="email" placeholder="email@email.com" required class="form-control ADemail shadow-none">
                                    <label for="floatemail">Email</label>
                                </div>
                                <div class="col-md-6 ps-0 mb-3 form-floating">
                                    <select name="user_type" id="floatRole" placeholder="Role" class="form-select" required>
                                        <option value="user">user</option>
                                        <option value="admin">admin</option>
                                    </select>
                                    <label for="floatRole">Role Type</label>
                                </div>
                            </div>
                        </div>
                        <div class="text-center my-1 mt-2 mb-2">
                            <button type="submit" name="addDataAdmin" class="btn btn-primary addDatabtn">Add Data</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <!--//?add data Modal end-->

    <!--//?Delete Modal start -->
    <div class="modal fade" id="deleteModal" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">

                <form action="confirm.php" method="POST">
                    <div class="modal-header">
                        <input type="hidden" name="delete_id" class="delete_id">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Do you want to delete this data?</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="deletedata" class="btn btn-danger" id="delbtn" data-bs-dismiss="modal">Yes delete it</button>
                        <button type="button" class="btn btn-success updadeBtn" data-bs-dismiss="modal">No</button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
    <!--//?Delete Modal end -->

    <!--//?Update Modal start -->
    <div class="modal fade mt-5" id="updateModal" tabindex="-1" data-bs-backdrop="static" tabindex="-1" data-bs-keyboard="false" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center">
                    <h5 class="modal-title d-flex align-items-center">
                        <i class="bi bi-person-lines-fill fs-3 me-2"></i>Update Data
                    </h5>
                    <button type="button" class="btn-close close-update closeUD" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                <div class="form-floating col-md-6 ps-0 mb-3">
                                    <input type="password" name="password" class="form-control pw updatepw" id="floatingPasswordUD" placeholder="Password">
                                    <label for="floatingPasswordUD">Password</label>
                                    <i class="fa-solid fa-eye update-eye"></i>
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
                                    <select name="gender_type" class="gender form-select" id="genderfloatud" placeholder="Gender">
                                        <option value="male">male</option>
                                        <option value="female">female</option>
                                        <option value="other">other</option>

                                    </select>
                                    <label for="genderfloatud">Gender</label>
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Birthdate</label>
                                    <input type="date" class="bdate" name="birthdate" placeholder="enter your birthdate" style="width: 100%; font-size: 15px; padding: 6px; border-color: #CED4DA; border-radius: 5px;">
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Age</label>
                                    <input readonly type="text" name="age" class="form-control ageget shadow-none">
                                </div>
                                <div class="col-md-6 ps-0 mb-3 form-floating">
                                    <input type="email" name="email" id="emailfloatud" placeholder="email" class="form-control email shadow-none">
                                    <label for="emailfloatud">Email</label>
                                </div>
                                <div class="col-md-6 ps-0 mb-3 form-floating">
                                    <select name="user_type" class="roleType form-select" id="rolefloatud" placeholder="roletype">
                                        <option value="user">user</option>
                                        <option value="admin">admin</option>
                                    </select>
                                    <label for="rolefloatud">Role Type</label>
                                </div>
                            </div>
                        </div>
                        <div class="text-center my-1 mt-2 mb-2">
                            <button type="submit" name="updatedataAdmin" class="btn btn-success udBtn" data-bs-dismiss="modal">Update Data</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <!--//?Update Modal end -->
    <!--//!Modals end -->

    <!--Table start-->
    <div class="container mt-5">
        <div class="jumbotron">
            <div class="card">
                <div class="card-body">
                    <h3 class="d-flex justify-content-center">welcome <span style="color:crimson;"> <?php echo '&nbsp;' . $admnN; ?></span></h3>
                    <!--add data Button trigger modal start-->
                    <button type="button" class="btn addDatabtn btn-primary" data-bs-toggle="modal" data-bs-target="#adddataModal">
                        Add Data
                    </button>
                    <!--add data Button trigger modal start-->

                    <!-- Main Table start -->
                    <div class="table-responsive mt-3">
                        <table id="DTsid" class="table mx-auto my-auto table-bordered table-hover">
                            <caption>List of admins/users</caption>
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
                                    <th scope="col">Role Type</th>
                                    <th scope="col" class="text-center">Operation</th>
                                </tr>
                            </thead>

                            <!--PHP mysql select table start-->
                            <?php
                            $sql = "SELECT
                                tbl_user.id_user, tbl_user.uname, tbl_user.password,
                                tbl_info.fname, tbl_info.lname, tbl_info.address,
                                tbl_info.gender, tbl_info.age, tbl_info.birthdate,
                                tbl_info.email, tbl_user.user_type FROM tbl_user  
                                JOIN tbl_info ON tbl_user.id_user = tbl_info.id
                                WHERE tbl_user.user_type = 'admin' & 'user';";
                            $result = mysqli_query($conn, $sql);
                            if ($result) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $id = $row['id_user'];
                                    $uname = $row['uname']; ?>
                                    <!--PHP mysql select table end-->

                                    <!-- <tbody> -->
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
                                        <td><?php echo $row['user_type']; ?></td>
                                        <td id="opr">
                                            <div class="d-flex gap-1 ">
                                                <!-- Update btn trigger modal start -->
                                                <button type="button" class="btn btn-success updadeBtn udBtn" data-bs-toggle="modal" data-bs-target="#updateModal">
                                                    Update
                                                </button>
                                                <!-- Update btn trigger modal end -->

                                                <!-- Delete btn trigger modal start -->
                                                <?php
                                                $show_data = '<button type="button" class="btn btn-danger deleteBtn" id="delbtn" data-bs-toggle="modal" data-bs-target="#deleteModal" aria-hidden="true">
                                                 Delete</button>';
                                                $hide_data = '<script> const link = document.querySelector("#delbt"); link.remove();</script>';
                                                if ($admnN != $uname) { //?if sesson uname != uname Delete button show
                                                    echo $show_data;
                                                } ?>
                                                <!-- Delete btn trigger modal end -->
                                            </div>
                                        </td>
                                        <!--//!PHP mysql select table if & while brackets start -->
                                <?php
                                }
                            }
                                ?>
                                <!-- </tbody> -->
                                <!--//!PHP mysql select table if & while brackets start -->
                        </table>
                    </div>
                    <!-- Main Table end -->
                </div>
            </div>
        </div>
    </div>
    <!--Table end-->
    <!--javascript start-->
    <script>
        //*Remove values of text box start
        $(document).ready(function() {
            $('#adddataModal').on('hidden.bs.modal', function(e) {
                $('#ADform')[0].reset();
            });
        });
        //*Remove values of text box end

        //* Automatic get age after birthdate input update start
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
        //* Automatic get age after birthdate input update end

        //* Automatic get age after birthdate input add start
        $(function() {
            var dtToday1 = new Date();

            var month1 = dtToday1.getMonth() + 1;
            var day1 = dtToday1.getDate();
            var year1 = dtToday1.getFullYear();

            if (month1 < 10)
                month1 = '0' + month1.toString();
            if (day1 < 10)
                day1 = '0' + day1.toString();

            var maxDate1 = year1 + '-' + month1 + '-' + day1;
            $('#ADbdate').attr('max', maxDate1);

        });
        $(document).ready(function() {
            $('#ADbdate').change(function() {
                var dob1 = new Date($(this).val());
                var today1 = new Date();
                var age1 = Math.floor((today1 - dob1) / (365.25 * 24 * 60 * 60 * 1000));
                $('#ADageget').val(age1);
            });
        });

        function formatDate1(date) {
            var parts1 = date.split("-");
            return parts1[1] + "/" + parts1[2] + "/" + parts1[0];
        }
        //* Automatic get age after birthdate input add end

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
            $('.bdate').val(data[8]);
            $('.email').val(data[9]);
            $('.roleType').val(data[10]);
        });
        //* Transfer data from table to update modal end

        //* Transfer data from table to delete modal start
        $('.deleteBtn').on('click', function() {
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();
            $('.delete_id').val(data[0]);
        });
        //* Transfer data from table to delete modal end

        //* add Password eye icon start
        const passwordInput = document.querySelector(".addpw")
        const eye = document.querySelector(".addeye")
        const closebtn = document.querySelector(".addclose");
        eye.addEventListener("click", function() {
            this.classList.toggle("fa-eye-slash")
            const type = passwordInput.getAttribute("type") === "password" ? "text" : "password"
            passwordInput.setAttribute("type", type)
        })
        closebtn.addEventListener("click", function() {
            if (eye.classList.contains("fa-eye-slash") == true) {
                eye.setAttribute("class", "fa-solid fa-eye addeye")
                passwordInput.setAttribute("type", "password")
            }
        })
        //* add Password eye icon end

        //* update Password eye icon start
        const passwordInput1 = document.querySelector(".updatepw")
        const eye1 = document.querySelector(".update-eye")
        const closebtn1 = document.querySelector(".closeUD");
        eye1.addEventListener("click", function() {
            this.classList.toggle("fa-eye-slash")
            const type = passwordInput1.getAttribute("type") === "password" ? "text" : "password"
            passwordInput1.setAttribute("type", type)
        })
        closebtn1.addEventListener("click", function() {
            if (eye1.classList.contains("fa-eye-slash") == true) {
                eye1.setAttribute("class", "fa-solid fa-eye update-eye")
                passwordInput1.setAttribute("type", "password")
            }
        })
        //* update Password eye icon end

        //* Data Tables searchbox start 
        $(document).ready(function() {
            $('#DTsid').DataTable({
                pageLength: 0,
                lengthMenu: [ [5, 7, -1], [5, 7, "All"] ],
                responsive: true,
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search records"
                }
            });
        });
        //* Data Tables searchbox start 
    </script>
    <!--javascript end-->

    <!-- add scripts into scripts.php start -->
    <?php
    include('scripts.php');
    ?>
    <!-- add scripts into scripts.php start -->

    <!--Bootsrap JS cdn start-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!--Bootsrap JS cdn end-->

    <!-- datatables js cdn start -->
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <!-- datatables js cdn end -->


</body>

</html>
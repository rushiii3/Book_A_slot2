<!DOCTYPE html>
<html lang="en">
<head>
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4c514c7 (donee)

<meta http-equiv='cache-control' content='no-cache'>
    <meta http-equiv='expires' content='0'>
    <meta http-equiv='pragma' content='no-cache'>
<<<<<<< HEAD
=======
>>>>>>> db0b766 (done)
=======
>>>>>>> 4c514c7 (donee)
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../js/signup.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link type="image/png" sizes="16x16" rel="icon" href="../../img/logo11.jpeg" />
</head>
<body class="bg-light">
    <?php
        require "../connection/connect.php";
        require_once("../loader.html"); 
    ?>
    <main id="main">
        <!-- SUCCESS -->
        <div class="modal fade" id="success" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog modal-dialog-centered w-75 mx-auto">
                <div class="modal-content">
                    <div class="modal-body">
                        <img src="https://img.freepik.com/free-vector/confirmed-concept-illustration_114360-545.jpg?w=1060&t=st=1683867581~exp=1683868181~hmac=1e7364b0ade26d1472f5c388369363e9158af74c9e3784a415576453158c7a65" class="img-fluid" alt="">
                        <p class="fs-6 text-center"><strong>Congratulations.</strong> <br/> Your account has been successfully created.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" onclick="location.href='sign_in.php';" class="btn btn-primary">Login</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- FAILED -->
        <div class="modal fade" id="failed" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog modal-dialog-centered w-75 mx-auto">
                <div class="modal-content">
                    <div class="modal-body">
                        <img src="https://img.freepik.com/free-vector/removing-goods-from-basket-refusing-purchase-changing-decision-item-deletion-emptying-trash-online-shopping-app-laptop-user-cartoon-character-vector-isolated-concept-metaphor-illustration_335657-2843.jpg?w=1060&t=st=1683869448~exp=1683870048~hmac=351919e98226dbde35a446a66fcd783e63766b69193d06232b36da08b0ca3b2c" class="img-fluid" alt="">
                        <p class="fs-6 text-center"><strong>Failed to register.</strong> <br/> Try again. </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Try Again</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="container w-75 mt-5 mb-5 shadow p-3 mb-5 bg-body" style="border-radius: 20px">
            <div class="row p-3">
                <div class="col-lg-12">
                    <p class="h1">Sign up</p>
                </div>
                <div class="p-1 col-lg-6">
                    <form action="<?php $_PHP_SELF ?>" method="POST">
                        <div class="mb-3">
                            <label for="full_name" class="form-label">Full Name</label>
                            <input type="text" name="full_name" class="form-control" id="full_name" placeholder="e.g. abc def" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailVerify" placeholder="e.g. abc@vazecollege.net" required>
                            <div id="emailVerify" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="SelectDepartment" name="department" class="form-label">Select Department</label>
                            <select name="department_namee" class="form-select" id="department_namee" required>
                                <option selected>Select Department</option>
                                <?php
                                    $get_department_name_query = "SELECT * FROM DEPARTMENT";
                                    $result_of_department_query = mysqli_query($con,$get_department_name_query);
                                    if(mysqli_num_rows($result_of_department_query)>0) {
                                        while($row_of_department_name = mysqli_fetch_assoc($result_of_department_query)) {
                                            ?>
                                            <option value="<?php echo($row_of_department_name['department_name']); ?>">
                                                <?php echo($row_of_department_name['department_name']); ?>
                                            </option>
                                            <?php
                                        }
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <div class="input-group">
                                <input type="password" name="password" class="form-control" id="password" aria-describedby="pass_verify" placeholder="Password" required>
                                <span class="input-group-text pass_icon" id="basic-addon1">
                                    <i class="bi bi-eye-fill pass_open_eye"></i>
                                    <i class="bi bi-eye-slash-fill pass_close_eye"></i>
                                </span>
                            </div>
                            <div id="pass_verify" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="confirm_password" class="form-label">Confirm Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="confirm_password" aria-describedby="confirm_password_verify" placeholder="Confirm Password" required>
                                <span class="input-group-text confirm_pass_icon" id="basic-addon1">
                                    <i class="bi bi-eye-fill cpass_open_eye"></i>
                                    <i class="bi bi-eye-slash-fill cpass_close_eye"></i>
                                </span>
                            </div>
                            <div id="confirm_password_verify" class="form-text"></div>
                        </div>
                        <button type="submit" name="submit" id="submit" class="btn btn-primary px-5 py-2 ms-5 mt-3">Submit</button>
                    </form>
                </div>
                <div class="p-4 col-lg-6">
                    <img src="https://img.freepik.com/premium-vector/online-registration-sign-up-with-man-sitting-near-smartphone_268404-95.jpg?w=1480" alt="" class="img-fluid" />
                    <p class="text-center mt-5">
                        <a href="sign_in.php"  class="link-dark">Already have an account? Sign in</a>
                    </p>
                </div>
            </div>
        </div>
    </main>
    <?php
        mysqli_close($con);
    ?>
</body>
</html>

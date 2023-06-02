<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="signup-form">
                    <form action="signup1.php" method="post" class="mt-5 border p-4 bg-light shadow">
                        <h4 class="mb-5 text-secondary">Sign-Up!</h4>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label>First Name<span class="text-danger">*</span></label>
                                <input type="text" name="fname" class="form-control" placeholder="Enter First Name"
                                    required>
                            </div>

                            <div class="mb-3 col-md-6">
                                <label>Last Name<span class="text-danger">*</span></label>
                                <input type="text" name="Lname" class="form-control" placeholder="Enter Last Name"
                                    required>
                            </div>

                            <div class="mb-3 col-md-12">
                                <label>Password<span class="text-danger">*</span></label>
                                <input type="password" name="password" class="form-control" placeholder="Enter Password"
                                    required>
                            </div>
                            <div class="mb-3 col-md-12">
                                <label>Confirm Password<span class="text-danger">*</span></label>
                                <input type="password" name="confirmpassword" class="form-control"
                                    placeholder="Confirm Password" required>
                            </div>
                            <div class="mb-3 col-md-12">
                                <label>E-mail<span class="text-danger">*</span></label>
                                <input type="email" name="Email" class="form-control" placeholder="Enter Email"
                                    required>
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="inputGender" class="form-label">Gender</label>
                                <select name="Gender" id="inputGender" class="form-select">
                                    <option disabled selected>Select</option>
                                    <option value="M">Male</option>
                                    <option value="F">Female</option>
                                    <option value="N">Rather Not Say</option>
                                </select>
                            </div>
                            
                            <div class="mb-3 col-md-6">
                                <label for="inputNumber" class="form-label">Phone Number</label>
                                <input type="text" name="phone" class="form-control" id="inputNumber" placeholder="03 --- --- ---">
                            </div>
                            <div class=" mb-3 col-md-12">
                                <button class="btn btn-primary float-end">Sign-Up Now</button>
                            </div>

                        </div>
                    </form>
                    <p class="text-center mt-3 text-secondary">If you already have an account, Please <a
                            href="login.php">Login</a> Now</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
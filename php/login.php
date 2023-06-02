<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
                <div class="login-form">
                    <form action="login1.php" method="post" class="mt-5 border p-4 bg-light shadow">
                        <h4 class="mb-3 text-secondary">Login!</h4>
                        <div class="row">
                            <div class="mb-3 col-md-12">
                                <label>E-mail<span class="text-danger">*</span></label>
                                <input type="email" name="Email" class="form-control" placeholder="Enter Email"
                                    required>
                            </div>

                            <div class="mb-3 col-md-12">
                                <label>Password<span class="text-danger">*</span></label>
                                <input type="password" name="password" class="form-control" placeholder="Enter Password"
                                    required>
                            </div>
                            <div class="mb-3 col-md-12">
                                <label for="inputNumber" class="form-label">Phone Number</label><span
                                    class="text-danger">*</span>
                                <input type="text" class="form-control" name="phone" id="inputNumber" placeholder="Enter Your Number"
                                    required>
                            </div>
                            <div class=" mb-3 col-md-12">
                                <button class="btn btn-primary float-end">Login Now</button>
                            </div>

                        </div>
                    </form>
                    <p class="text-center mt-3 text-secondary">Don't have an account? Please <a
                            href="sign_up.php">Sign-up</a> Here</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
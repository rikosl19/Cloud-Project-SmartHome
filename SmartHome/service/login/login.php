<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=100%, initial-scale=1.0">
    <title>SmartHomeUI - Login Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<style>
    body,
    html {
        height: 100%;
        font-family: 'Segoe UI';
        color: aliceblue;
    }

    .bg {
        /* The image used */
        background-image: url("../../img/Lay_LoginPage2.jpg");

        /* Full height */
        height: 100%;

        /* Center and scale the image nicely */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .center {
        display: flex;
        left: 5%;
        align-items: left;
        height: 200px;
    }

    #login{
        width: 100%;
    }
</style>

<body>

    <div class="bg">
        <div class="container">
            <div class="row">
                <div class="col-md-10"></div>
                <div class="col-md-2 center">
                </div>
            </div>
            <div class="row">
            <div class="col-md-1"></div>
                <div class="col-md-8"></div>
                <div class="col-md-3 center">
                    <div class="row">
                        <div class="col-md-2">
                            <img src="../../img/admin.png" width="156px" style="background-color: azure;" alt="..." class="rounded-circle">
                        </div>
                    </div>
                    <div class="row">

                    </div>

                </div>
            </div>
            <div class="row">
            <div class="col-md-1"></div>
                <div class="col-md-8"></div>
                <div class="col-md-3 center">
                    <form action="verify_login.php" method="POST">
                        <div class="form-group">

                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Username" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" id="exampleInputPassword1" required>
                        </div>
                        <button type="submit" id="login" class="btn btn-primary" value="test">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--JQuery -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>
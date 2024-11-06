<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        body{
            font-family: 'Poppins', sans-serif;
            background: #16a34a;
        }

        .box-area{
            width: 930px;
        }

        .right-box{
            padding: 40px 30px 40px 40px;
        }

        ::placeholder{
            font-size: 16px;
        }

        .rounded-4{
            border-radius: 20px;
        }

        .rounded-5{
            border-radius: 10px; 
        }

        @media only screen and (max-width: 768px){
            .box-area{
                margin: 0 10px;
            }
            .left-box{
                height: 100px;
                overflow: hidden;
            }
            .right-box{
                padding: 20px;
            }
        }

        /* Additional CSS for centering text */
        .header-text {
            text-align: center;
        }

        .featured-image {
            text-align: center;
        }

        /* Additional CSS for label alignment and button hover */
        label {
            margin-bottom: 5px;
            display: block;
        }

        .input-group {
            margin-bottom: 15px;
        }

        .btn-login {
            background-color: white;
            color: black;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn-login:hover {
            background-color: #15803d; /* Change to desired hover color */
            color: white;
        }

        /* Additional CSS for sign up button */
        .btn-signup {
            background-color: #15803d;
            color: white;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn-signup:hover {
            background-color: #16a34a; /* Change to desired hover color */
            color: white;
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row border rounded-5 p-3 bg-white shadow box-area">
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #15803d">
                <div class="featured-image mb-3">
                    <img src="images/1.png" class="img-fluid" style="width: 250px;">
                </div>
                <p class="text-white fs-2" style="font-family: 'Courier new', Courier, monospace; font-weight: 600;">Be verified</p>
                <small class="text-white text-wrap text-center" style="width: 17rem; font-family: 'Courier new', Courier, monospace;">Join our library</small>
            </div>

            <div class="col-md-6 right-box">
                <div class="row align-items-center">
                    <div class="header-text mb-4">
                        <h2>Register Now</h2>
                        <p>We are happy you're join to</p>
                    </div>
                    <form action="{{route('register')}}" method="POST">
                        @csrf
                        @method("POST")
                        <div class="col-md-12">
                            <div class="input-group mb-3">
                                <label for="nama_lengkap">Nama lengkap</label>
                                <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control form-control-lg bg-light fs-6 rounded-5" placeholder="Long name">
                            </div>
                            <div class="input-group mb-3">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control form-control-lg bg-light fs-6 rounded-5" placeholder="Email address">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="input-group mb-3">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control form-control-lg bg-light fs-6 rounded-5" placeholder="Password">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="input-group mb-5 d-flex justify-content-between align-items-center">
                                <div class="sign">
                                    <small><a href="{{route('login')}}" class="btn btn-sm btn-signup">Sign in</a></small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="input-group mb-3">
                                <button class="btn btn-lg w-100 fs-6 btn-login">Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

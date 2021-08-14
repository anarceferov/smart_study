<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">

    <style>
        body {
            background-image: url(https://miro.medium.com/proxy/0*Vio_q5nMzzD4DkWO.JPG);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center bottom;
            background-size: cover;
        }

        .error-template {
            padding: 40px 15px;
            text-align: center;
        }


        .btn{
            margin-top: 15px;
        }

        .col-md-4{
            border: 9px solid red;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">

            <div class="col-md-4 offset-md-8 bg-dark">
                <div class="error-template">
                    <h1 class="text-danger">Oops!</h1>
                    <h4 class="text-warning">Bu səhifəyə daxil olmaq üçün icazəniz yoxdur...</h4>
                    <a class="btn btn-success" href="{{ url()->previous() }}"><i class="fas fa-chevron-circle-left"></i>  Kliklə Rədd ol</a>
                </div>
            </div>


        </div>
    </div>
</body>

</html>
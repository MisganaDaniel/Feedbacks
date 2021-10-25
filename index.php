<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Feedbac</title>
    <script src="main.js"></script>
</head>
<body>
    <!-- First Name: <input type="text" id="firstName"> 
    Last Name: <input type="text" id="LasName"> 
    Email Name: <input type="text" id="Email"> 
    Date: <input type="date" id="Date"> 
    Feedback: <input type="text" id="Feedback"> 
    <input type="button" value="Submit" onclick="feedback()"> -->

    <div class="card text-center shadow-lg" style="width: 1000px;margin-left:150px;margin-top:100px;border-radius:12px;">
        <div class="card-header" style="padding-top:10px;padding-bottom:10px;">
            <div class="row">
                <div class="col-md-3">
                    <img src="logo.png">
                </div>
                <div class="col-md-7">
                    <h1 style="margin-top:15px;color:blue;">Give Us your Feedback Below.</h1>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row g-3">
                <div class="col mb-5">
                    <input type="text" class="form-control" placeholder="First name" id="firstName">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Last name" id="LasName">
                </div>
            </div>
            <div class="row g-3">
                <div class="col mb-5">
                    <input type="email" class="form-control" placeholder="Email" id="Email">
                </div>
                <div class="col">
                    <input type="date" class="form-control" id="Date">
                </div>
            </div>
            <div class="row g-3">
                <div class="col mb-3">
                    <!-- <input type="text" class="form-control" placeholder="Feedback" id="Feedback"> -->
                    <textarea id="Feedback" class="form-control" cols="10" rows="3"></textarea>
                </div>
            </div>

            <input type="button" class="btn btn-primary"value="Submit" onclick="feedback()">
        </div>
        <div class="card-footer text-muted">
            &copy 2021
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
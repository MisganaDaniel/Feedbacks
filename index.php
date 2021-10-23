<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Feedbacks</title>
    <script src="main.js"></script>
</head>
<body>
    <!-- First Name: <input type="text" id="firstName"> 
    Last Name: <input type="text" id="LasName"> 
    Email Name: <input type="text" id="Email"> 
    Date: <input type="date" id="Date"> 
    Feedback: <input type="text" id="Feedback"> 
    <input type="button" value="Submit" onclick="feedback()"> -->

    <div class="card text-center">
        <div class="card-header">
            Give us your feedback below.
        </div>
        <div class="card-body">
            <div class="row g-3">
                <div class="col">
                    <input type="text" class="form-control" placeholder="First name" id="firstName">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Last name" id="LasName">
                </div>
            </div>
            <div class="row g-3">
                <div class="col">
                    <input type="email" class="form-control" placeholder="Email" id="Email">
                </div>
                <div class="col">
                    <input type="date" class="form-control" id="Date">
                </div>
            </div>
            <div class="row g-3">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Feedback" id="Feedback">
                </div>
            </div>

            <input type="button" value="Submit" onclick="feedback()">
        </div>
        <div class="card-footer text-muted">
            Thank you for your feedback.
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
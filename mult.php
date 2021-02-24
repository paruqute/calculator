<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Calculator</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="index.php">Addition</a>
              <a class="nav-link" href="sub.php">Subtraction</a>
              <a class="nav-link" href="mult.php">Multipication</a>
              <a class="nav-link" href="div.php">Division</a>
            </div>
          </div>
        </div>
      </nav>
      <br><br>
    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-12">
                <table class="table table-borderless">
                    <tr>
                        <td>First Digit</td>
                        <td><input id="num1" type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Second Digit</td>
                        <td><input id="num2" type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><buttpm onclick="multbtnclick()" class="btn btn-primary">MINUS</buttpm></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><p id="output"></p></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>





<script src="js\script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>
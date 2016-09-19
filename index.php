<?php
  $nameError = $emailError = $birthdayError = "";

  if (isset($_POST["username"])) {
    if(empty($_POST["username"])) {
      $nameError = "Name must be entered!!";
    }
  }

  if (isset($_POST["email"])) {
    if(empty($_POST["email"])) {
      $emailError = "Email must be entered!";
    } else {
      if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $success = false;
        $emailError = "Email is not valid!";
      }
    }
  }

  if (isset($_POST["birthday"])) {
    if(empty($_POST["birthday"])) {
      $birthdayError = "Please enter birthday!";
    }
  }


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css">
    <style>
      .box {
        margin-top: 90px;
        border: solid 1px;
        padding: 10px 10px 40px 10px;
      }

      #header {
        text-align:center;
        margin-bottom: 25px;
      }

      .error {
        font-weight: bold;
        margin-bottom: 5px;
        color : red;
      }

      #success {
        text-align: center;
        color: green;
      }
    </style>
</head>

<body>
    <div class="container box">
        <div class="col-md-offset-4 col-md-4">

            <h2 id="header">Form with input fields</h2>

            <form method="POST">
                <div class="form-group">
                    <div class="error">
                      <?php echo $nameError; ?>
                    </div>
                    <label for="name">Username</label>
                    <input id="name" name="username" class="form-control" placeholder="Enter Username" />
                </div>

                <div class="form-group">
                    <div class="error">
                      <?php echo $emailError; ?>
                    </div>
                    <label for="email">Email</label>
                    <!-- you can set type="email" for validation or use php as i did -->
                    <input type="text" name="email" id="email" class="form-control" placeholder="Enter email" />
                </div>

                <div class="form-group">
                  <div class="error">
                    <?php echo $birthdayError; ?>
                  </div>
                    <label for="birthday">Birthday</label>
                    <input id="birthday" name="birthday" class="form-control" placeholder="Enter Birthday" />
                </div>

                <input type="submit" class="btn btn-success btn-block" value="Press me please">

            </form>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
    <script>
      $('#birthday').datepicker({
        autoclose: true,
        clearBtn: true
      });
    </script>
</body>
</html>

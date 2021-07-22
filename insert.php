<?php

include 'conn.php';

if(isset($_POST['done']))
{
    $name = $_POST['name'];
    $comment = $_POST['comment'];
    $q = "INSERT INTO `crudtable`(`name`, `comment`) VALUES ('$name','$comment')";
    $query = mysqli_query($conn,$q);
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Congratulations!</strong> You have successfully submitted your post.
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>&times;</span>
    </button>
  </div>";
}


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Insert record</title>
  </head>
  <body>
    <div class="col-lg-6 m-auto">
        <form method="post">
            <br><br>
            <div class="card">
                <div class="card-header bg-dark">
                    <h2 class="text-white text-center">Insert operation</h2>
                </div>
                <br>
                <label><b>Name:</b></label>
                <input type="text" name="name" class="form-control" placeholder="Enter your name"> <br>

                <label><b>Comment:</b></label>
                <input type="text" name="comment" class="form-control" placeholder="Enter your comment"> <br>

                <button class="btn btn-primary" type="submit" name="done">Post</button> <br>


            </div>

        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
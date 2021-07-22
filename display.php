

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Display data</title>
  </head>
  <body>

     <div class="container">
         <div class="col-lg-12">
             <br><br>
             <h2 class="text-danger text-center">Display table data</h2>
             <br>
             <table class="table table-striped table-hover table-bordered">
                 <tr class="bg-dark text-white text-center">
                     <th>Serial No.</th>
                     <th>Name</th>
                     <th>Comment</th>
                     <th>Delete</th>
                     <th>Update</th>
                 </tr>
        <?php

                include 'conn.php';


                 $q = "SELECT * FROM `crudtable`";
                $query = mysqli_query($conn,$q);
                $sno = 0;
                while($result = mysqli_fetch_array($query))
                {
                     $sno = $sno + 1;
        ?>
                 <tr>
                     <td><?php echo $sno;?></td>
                     <td><?php echo $result['name'];?></td>
                     <td><?php echo $result['comment'];?></td>
                     <td class="text-center"><button class="btn btn-danger"> <a style="text-decoration:none" href="delete.php?id=<?php echo $result['id']; ?>" class="text-white"> Delete </a>  </button> </td>
                     <td class="text-center"><button class="btn btn-primary"><a style="text-decoration:none" href="update.php?id=<?php echo $result['id'];?>" class="text-white">Update</a></button></td>
                 </tr>
                 
        <?php
                }
        ?>        
             </table>

         </div>
     </div>
    
    




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
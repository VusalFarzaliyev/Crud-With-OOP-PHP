<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
          crossorigin="anonymous">
</head>
<body>

</body>
</html>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>PHP/OOP Crud</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-12 mt-5">
                <h1 class="text-center">PHP/OOP Crud</h1>
                <hr style="height: 1px;color: black;background-color: #000000;">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mx-auto mt-2">
            <form method="post">
                <?php
                include "model.php";
                $model = new model;
                $id = $_GET['edit_id'];
                $row = $model->fetch($id);
                if(isset($_POST['update']))
                   {
                      if(isset($_POST['name']) and isset($_POST['surname']))
                      {
                          if(!empty($_POST['name']) and !empty($_POST['surname']))
                          {
                              $data['id']=$id;
                              $data['name']    = $_POST['name'];
                              $data['surname'] = $_POST['surname'];
                              $update= $model->update($data);
                              if($update)
                              {
                                  echo "<script> alert('Məlumatlar uğurla dəyişdirildi');</script>";
                                  echo "<script> window.location.href='index.php';</script>";
                              }
                              else
                              {
                                  echo "<script> alert('Məlumatlar dəyişdirilmədi);</script>";
                                  echo "<script> window.location.href='edit.php?edit_id=$id';</script>";
                              }
                          }
                          else
                              {
                                  header("Location:edit.php?edit_id=$id");

                              }
                      }

                   }
                ?>
                <div class="form-group">
                    <input value="<?=$row['name'];?>" type="text" class="form-control" placeholder="Ad" name="name">
                </div>
                <div class="form-group">
                    <input value="<?=$row['surname'];?>" type="text" class="form-control" placeholder="Soyad" name="surname">
                </div>
                <button name="update" type="submit" class="btn btn-primary">Düzəliş et</button>
                <a href="index.php" class="btn btn-success"> Əsas səhifə</a>
            </form>
        </div>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
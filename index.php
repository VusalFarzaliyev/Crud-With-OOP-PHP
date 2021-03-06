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
        <div class=row>
            <div class="col-md-12 mt-5">
                <h1 class="text-center">PHP/OOP Crud |DATA LİST</h1>
                <a href="add.php" class="btn btn-success"> Əlavə et</a>
                <hr style="height: 1px;color: black;background-color: #000000;">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mt-3">
                <table class="table">
                    <thead class="text-center">
                        <tr>
                            <th>
                                İD
                            </th>
                            <th>
                                Ad
                            </th>
                            <th>
                                Soyad
                            </th>
                            <th>
                                Əməliyyat
                            </th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                    <?php
                    include "model.php";
                    $model = new model;
                    $rows  =$model->fetch_all();
                    if(!empty($rows))
                    {
                        foreach ($rows as $key =>$value)
                        {
                    ?>
                        <tr>
                            <td>
                                <?=$value['id']?>
                            </td>
                            <td>
                                <?=$value['name']?>
                            </td>
                            <td>
                                <?=$value['surname']?>
                            </td>
                            <td>
                                <a href="edit.php?edit_id=<?=$value['id'];?>" class="badge badge-success">Düzəlt</a>
                                <a href="delete.php?delete_id=<?=$value['id'];?>" class="badge badge-danger">Sil</a>
                            </td>
                        </tr>
                    <?php
                        }
                    }
                    else
                        echo "Data yoxdur";
                    ?>
                    </tbody>
                </table>
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

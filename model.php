<?php
include "db.php";
class model extends db
{
    public function insert()
    {
       if(isset($_POST['submit']))
       {
          if(isset($_POST['name']) and isset($_POST['surname']))
          {
              if(!empty($_POST['name']) and !empty($_POST['surname']))
              {
                    $name    = $_POST['name'];
                    $surname = $_POST['surname'];

                    $sql = "INSERT INTO `user` (`name`,`surname`) VALUES ('$name','$surname')";
                    if($query = $this->conn->query($sql))
                    {
                        echo "<script> alert('Əlavə etmə uğurlu oldu');</script>";
                        echo "<script> window.location.href='add.php';</script>";
                    }
                    else
                    {
                        echo "<script> alert('Əlavə edilmədi');</script>";
                        echo "<script> window.location.href='add.php';</script>";
                    }

              }
              else
                  {
                      echo "<script> alert('Xanaları tam doldur');</script>";
                      echo "<script> window.location.href='add.php';</script>";

                  }
              }
          }

       }
    public function fetch_all()
    {
        $data = null;
        $sql = "SELECT * FROM `user` ";
        if($query=$this->conn->query($sql))
        {
            while($row = mysqli_fetch_assoc($query))
            {
                $data[]=$row;
            }
        }
        return $data;
    }
    public function delete($id)
    {
        $sql = "DELETE FROM `user` WHERE id='$id'";
        if($query= $this->conn->query($sql)){
            return true;
        }
        else
            return false;
    }
    public function fetch($id)
    {
        $data = null;
        $sql  ="SELECT * FROM `user` WHERE id='$id'";
        if($query = $this->conn->query($sql))
        {
            while ($row = $query->fetch_assoc())
            {
                $data = $row;
            }
        }
        return $data;
    }
    public function update($data)
    {
      $sql = "UPDATE `user` SET `name`='$data[name]',`surname`='$data[surname]' WHERE id=$data[id]";
      if($query=$this->conn->query($sql))
      return true;
      else
          return false;
    }

}
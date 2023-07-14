<?php 
   require("dbcon.php");

      $id=$_GET['id'];
      $query = "delete from allpackage where id = '$id' "
      
      {
        
        $sql = "delete package set where id='$deleteid' ";

        mysqli_query($con,$sql);

      
      
     

      echo "thank u data saved!!";

      header("location:allpackage.php");

}

?>



           
                 
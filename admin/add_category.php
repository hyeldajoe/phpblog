<?php include "includes/header.php"; ?>

<?php
//Create DB Object
$db = new Database();

if(isset($_POST['submit'])){
    // Assign Variables 
    $name = mysqli_real_escape_string($db->link, $_POST['name']);
   

    //simple validation
    if($name == '' ){
        //Set an Error
        $error = 'Please Enter All required Fields';
    }else{
        $query = "INSERT INTO categories (name) 
                    VALUES ('$name' )";
        
        $update_row = $db->update($query);
    }


}



?>



<form role="form" method="post" action="add_category.php">
  <div class="form-group">
    <label>Category Name</label>
    <input type="text" class="form-control" name="name" placeholder="Enter Category Name">
  </div>
    
  <input type="submit" name="submit" class="btn btn-default" value="Submit">
  <a href="index.php" class="btn btn-default">Cancel</a>
  <br>
</form>
<br>
<?php include "includes/footer.php"; ?> 
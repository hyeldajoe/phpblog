<?php include "includes/header.php"; ?>
<?php

//Create DB Object
$id = $_GET['id'];

$db = new Database();

// Create Query
$query = "SELECT * FROM categories WHERE id =" .$id;

//Run Query
$category = $db->select($query)->fetch_assoc();


?>

<?php

if(isset($_POST['submit'])){
    // Assign Variables 
    $name = mysqli_real_escape_string($db->link, $_POST['name']);
    

    //simple validation
    if($name == ''){
        //Set an Error
        $error = 'Please Enter All required Fields';
    }else{
        $query = "UPDATE categories SET name = '$name' WHERE id=".$id;
        
        $update_row = $db->update($query);
    }


}

?>

<?php
if(isset($_POST['delete'])){
    $query = "DELETE FROM categories WHERE id=".$id;
    
    $delete_row = $db->delete($query);

}

?>


<form role="form" method="post" action="edit_category.php?id=<?php echo $id; ?>">
  <div class="form-group">
    <label>Category Name</label>
    <input type="text" class="form-control" name="name" placeholder="Enter Category Name" value="<?php echo $category['name']  ?>">
  </div>
    
  <input type="submit" name="submit" class="btn btn-default" value="submit">
  <a href="index.php" class="btn btn-default">Cancel</a>
  <input type="submit" name="delete" class="btn btn-danger" value="Delete">
  <br>
</form>
<br>
<?php include "includes/footer.php"; ?> 
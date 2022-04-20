<?php include "includes/header.php"; ?>

<?php

//Create DB Object


$db = new Database();

// Create Query
$query = "SELECT * FROM categories";

//Run Query
$categories = $db->select($query);

?>

<form role="form" method="post" action="add_post.php">
  <div class="form-group">
    <label>Post Title</label>
    <input type="text" class="form-control" name="title" placeholder="Enter Post Title">
  </div>
  <div class="form-group">
    <label>Post body</label>
    <textarea class="form-control" name="body" placeholder="Enter Post Title"></textarea>
  </div>
  <div class="form-group">
  <label>Category</label>
  <select name="category" class="form-control">
      <?php while($row = $categories->fetch_assoc()):  ?>
      <option><?php echo $row['name'];  ?></option>
      <?php endwhile;  ?>

     
  </select>
  </div>
  <div class="form-group">
    <label>Author</label>
    <input type="text" class="form-control" name="author" placeholder="Enter Author Name">
  </div>
  <div class="form-group">
    <label>Tags</label>
    <input type="text" class="form-control" name="tags" placeholder="Enter Tags">
  </div>
  
  <input type="submit" name="submit" class="btn btn-default" value="Submit">
  <a href="index.php" class="btn btn-default">Cancel</a>
  <br>
</form>
<br>
<?php include "includes/footer.php"; ?> 
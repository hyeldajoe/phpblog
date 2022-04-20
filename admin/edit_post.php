<?php include "includes/header.php"; ?>

<?php

//Create DB Object
$id = $_GET['id'];

$db = new Database();

// Create Query
$query = "SELECT * FROM posts WHERE id =" .$id;

//Run Query
$post = $db->select($query)->fetch_assoc();

// Create Query
$query = "SELECT * FROM categories";

//Run Query
$categories = $db->select($query);

?>

<form role="form" method="post" action="edit_post.php">
  <div class="form-group">
    <label>Post Title</label>
    <input type="text" class="form-control" name="title" placeholder="Enter Post Title" value="<?php echo $post['title']  ?>">
  </div>
  <div class="form-group">
    <label>Post body</label>
    <textarea class="form-control" name="body" placeholder="Enter Post Title"><?php echo $post['body']  ?></textarea>
  </div>
  <div class="form-group">
  <label>Category</label>
  <select name="category" class="form-control">
      <?php while($row = $categories->fetch_assoc()):  ?>
        <?php if($row['id'] == $post['category']) {
            $selected = 'selected';

        }else{
            $selected = '';
        }
     ?>

      <option <?php echo $selected;  ?>><?php echo $row['name'];  ?></option>
      <?php endwhile;  ?>

     
  </select>
  </div>
  <div class="form-group">
    <label>Author</label>
    <input type="text" class="form-control" name="author" placeholder="Enter Author Name" value="<?php echo $post['author']  ?>">
  </div>
  <div class="form-group">
    <label>Tags</label>
    <input type="text" class="form-control" name="tags" placeholder="Enter Tags" value="<?php echo $post['tags']  ?>">
  </div>
  
  <input type="submit" name="submit" class="btn btn-default" value="Submit">
  <a href="index.php" class="btn btn-default">Cancel</a>
  <input type="submit" name="delete" class="btn btn-danger" value="Delete">
  <br>
</form>
<br>
<?php include "includes/footer.php"; ?> 
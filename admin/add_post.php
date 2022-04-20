<?php include "includes/header.php"; ?>

<?php
//Create DB Object
$db = new Database();

if(isset($_POST['submit'])){
    // Assign Variables 
    $title = mysqli_real_escape_string($db->link, $_POST['title']);
    $body = mysqli_real_escape_string($db->link, $_POST['body']);
    $category = mysqli_real_escape_string($db->link, $_POST['category']);
    $author = mysqli_real_escape_string($db->link, $_POST['author']);
    $tags = mysqli_real_escape_string($db->link, $_POST['tags']);

    //simple validation
    if($title == '' || $body == ''|| $category == '' || $author == ''){
        //Set an Error
        $error = 'Please Enter All required Fields';
    }else{
        $query = "INSERT INTO posts (title, body, category, author, tags) 
                    VALUES ('$title','$body', $category, '$author', '$tags' )";
        
        $insert_row = $db->insert($query);
    }


}



?>

<?php



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
        <?php if($row['id'] == $post['category']) {
            $selected = 'selected';

        }else{
            $selected = '';
        }
     ?>

      <option <?php echo $selected;  ?>value="<?php echo $row['id']  ?>"><?php echo $row['name'];  ?></option>
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
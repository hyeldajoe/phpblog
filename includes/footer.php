</div><!-- /.blog-main -->

<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
  <div class="sidebar-module sidebar-module-inset">
    <h4>About</h4>
    <p><?php echo $site_description; ?></p>
  </div>
  <div class="sidebar-module">
    <h4>Categories</h4>
    <?php if($categories) :  ?>
    <ol class="list-unstyled">
      <?php while($row = $categories->fetch_assoc()): ?>
      <li><a href="posts.php?category=<?php echo urlencode($row['id']); ?>"><?php echo $row['name']; ?></a></li>
      <?php  endwhile; ?>
      
    </ol>
    <?php else: ?>
      <p>There are no categories</p>
      <?php  endif; ?>
  </div>
  
</div><!-- /.blog-sidebar -->

</div><!-- /.row -->

</div><!-- /.container -->

<div class="blog-footer">
<p>PHP Blog &copy <?php echo date('Y'); ?> <a href="https://josephyelda.com"> Powered </a> by <a href="https://josephyelda.com">Hyelnat</a>.</p>
<p>
<a href="#">Back to top</a>
</p>
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>

</body>
</html>

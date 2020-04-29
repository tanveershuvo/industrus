<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<section id="tabs" class="project-tab">
  <form id="form" action="controller/OrderController" method="post" enctype="multipart/form-data">
    <div id="smartwizard">
      <ul>
        <li><a href="#step-1">First Step <br /><small> Technical File</small></a></li>
        <li><a href="#step-2">Second Step<br /><small>Measurement Point Sketch</small></a></li>
        <li><a href="#step-3">Third Step<br /><small>Sewing Details</small></a></li>
        <li><a href="#step-4">Final Step<br /><small>Packaging description</small></a></li>
      </ul>
      <div class="container">
        <?php include 'technical-file.php'; ?>
        <?php include 'measurement-sketch.php'; ?>
        <?php include 'sewing-measurement.php'; ?>
        <?php include 'packaging-description.php'; ?>

      </div>
    </div>

  </form>
</section>

<?php include 'includes/footer.php'; ?>
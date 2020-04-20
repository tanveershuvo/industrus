<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<section id="tabs" class="project-tab">
  <form id="form" method="post" enctype="multipart/form-data">
    <div id="smartwizard">
      <ul>
        <li><a href="#step-1">First Step <br /><small> Technical File</small></a></li>
        <li><a href="#step-2">Second Step<br /><small>Measurement Point Sketch</small></a></li>
        <li><a href="#step-3">Third Step<br /><small>Sewing Details</small></a></li>
        <li><a href="#step-4">Step Title<br /><small>Step description</small></a></li>
      </ul>


      <div class="container">

        <?php include 'technical-file.php'; ?>
        <?php include 'measurement-sketch.php'; ?>
        <?php include 'sewing-measurement.php'; ?>
        <div id="step-4" class="">
          Step Content
        </div>
      </div>

    </div>
  </form>

</section>

<!-- The Modal -->

<!-- <script>
  $(window).bind('beforeunload', function() {
    return 'are you sure you want to leave?';
  });
</script> -->
<?php include 'includes/footer.php'; ?>
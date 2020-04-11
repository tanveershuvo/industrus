<?php include'includes/header.php';?>
<?php include'includes/navbar.php';?>

        <section id="tabs" class="project-tab">
          <form id="form" method="post" enctype="multipart/form-data">
          <div id="smartwizard">
    <ul>
        <li><a href="#step-1">First Step <br /><small> Technical File</small></a></li>
        <li><a href="#step-2">Second Step<br /><small>Measurement Point Sketch</small></a></li>
        <li><a href="#step-3">Step Title<br /><small>Step description</small></a></li>
        <li><a href="#step-4">Step Title<br /><small>Step description</small></a></li>
    </ul>


    <div class="container" >

      <?php include'technical-file.php'; ?>
      <?php include'measurement-sketch.php'; ?>

        <div id="step-3" class="">
            Step Content
        </div>
        <div id="step-4" class="">
            Step Content
        </div>
      </div>

    </div>
        </form>

  </section>

  <!-- The Modal -->


<?php include'includes/footer.php';?>

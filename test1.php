<?php include'includes/header.php';?>
    <?php include'includes/navbar.php';?>

        <section id="tabs" class="project-tab">
          <div id="smartwizard">
    <ul>
        <li><a href="#step-1">Step Title<br /><small>Step description</small></a></li>
        <li><a href="#step-2">Step Title<br /><small>Step description</small></a></li>
        <li><a href="#step-3">Step Title<br /><small>Step description</small></a></li>
        <li><a href="#step-4">Step Title<br /><small>Step description</small></a></li>
    </ul>

    <div>
        <div id="step-1" class="">
              <label>
                  <span class="fname">Buyer Name <span class="required">*</span></span>
                  <input type="text" name="bname" required>
              </label>
              <label>
                  <span>Company Name (Optional)</span>
                  <input type="text" name="cn" required>
              </label>

              <!-- Yorder -->
              <div class="well">
                  <label>
                      <span class="pname">Product Name <span class="required">*</span></span>
                      <input type="text" name="pname">
                  </label>

                  <div class="card">
                      <div class="card-header">Size<span class="required">*</span></div>
                      <div class="card-body">

                          <label>
                              <span class="pname">M <span class="required">*</span></span>
                              <input type="text" name="pname" placeholder="Quantity In Pices">
                          </label>
                          <label>
                              <span class="pname">S <span class="required">*</span></span>
                              <input type="text" name="pname" placeholder="Quantity In Pices">
                          </label>
                          <label>
                              <span class="pname">L <span class="required">*</span></span>
                              <input type="text" name="pname" placeholder="Quantity In Pices">
                          </label>
                          <label>
                              <span class="pname">XL <span class="required">*</span></span>
                              <input type="text" name="pname" placeholder="Quantity In Pices">
                          </label <label>
                          <span class="pname">2XL <span class="required">*</span></span>
                          <input type="text" name="pname" placeholder="Quantity In Pices">
                          </label>
                          <label>
                              <span class="pname">3XL <span class="required">*</span></span>
                              <input type="text" name="pname" placeholder="Quantity In Pices">
                          </label>
                          <label>
                              <span class="pname">4XL <span class="required">*</span></span>
                              <input type="text" name="pname" placeholder="Quantity In Pices">
                          </label>
                      </div>
                  </div>

                  <label>
                      <span class="clr">Color<span class="required">*</span></span>
                      <input type="text" name="clr">
                  </label>

                  <label>
                      <span class="feb">Febreics<span class="required">*</span></span>
                      <input type="text" name="feb">
                  </label>

                  <label>
                      <span class="febde">Febrics Description<span class="required">*</span></span>
                      <input type="text" name="febde">
                  </label>

                  <label>
                      <span class="febwe">Febreics Weight<span class="required">*</span></span>
                      <input type="text" name="febwe">
                  </label>

                  <label>
                      <span class="febclr">Febrics Color<span class="required">*</span></span>
                      <input type="text" name="febclr">
                  </label>

                  <label>
                      <span class="img">Upload Image<span class="required">*</span></span>
                      <input type="file" name="img">
                  </label>
              </div>
        </div>
        <div id="step-2" class="">
            Step Content
        </div>
        <div id="step-3" class="">
            Step Content
        </div>
        <div id="step-4" class="">
            Step Content
        </div>
    </div>
</div>
        </section>

        <?php include'includes/footer.php';?>

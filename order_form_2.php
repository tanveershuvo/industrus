<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<section id="tabs" class="project-tab">
    <div class="container">
        <div class="title">
            <div class="row">
                <div class="col-lg-6">
                    <h2>Product Order Form 2</h2>
                </div>
                <div class="col-lg-6">
                    <h4 class="pull-right">Step 2/5 </h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex">

                    <form action="controller/order_form_2_controller.php" method="post">
                        <label>
                            <span class="img">Upload Measurment Image<span class="required">*</span></span>
                            <input type="file" name="img">
                        </label>
                        <!-- Yorder -->
                        <div class="well">
                            <label>
                                <span class="pname">Product Number <span class="required">*</span></span>
                                <input type="text" name="pname">
                            </label>
                            <label>
                                <span class="clr">Measurment Description<span class="required">*</span></span>
                                <input type="text" name="clr">
                            </label>
                            <div class="card">
                                <div class="card-header">Size<span class="required">*</span></div>
                                <div class="card-body">
                                    <label>
                                        <span class="pname">M <span class="required">*</span></span>
                                        <input type="text" name="pname" placeholder="Measurment By Size">
                                    </label>
                                    <label>
                                        <span class="pname">S <span class="required">*</span></span>
                                        <input type="text" name="pname" placeholder="Measurment By Size">
                                    </label>
                                    <label>
                                        <span class="pname">L <span class="required">*</span></span>
                                        <input type="text" name="pname" placeholder="Measurment By Size">
                                    </label>
                                    <label>
                                        <span class="pname">XL <span class="required">*</span></span>
                                        <input type="text" name="pname" placeholder="Measurment By Size">
                                    </label>
                                    <label>
                                        <span class="pname">2XL <span class="required">*</span></span>
                                        <input type="text" name="pname" placeholder="Measurment By Size">
                                    </label>
                                    <label>
                                        <span class="pname">3XL <span class="required">*</span></span>
                                        <input type="text" name="pname" placeholder="Measurment By Size">
                                    </label>
                                    <label>
                                        <span class="pname">4XL <span class="required">*</span></span>
                                        <input type="text" name="pname" placeholder="Measurment By Size">
                                    </label>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" name="orderForm2" class="col-lg-4 "> Next Form </button>
                                <a href="order_form_1"> Prev Form </a>
                            </div>
                        </div>
                        <!-- Yorder -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="#"><i class="fa fa-home"></i> Home</a>
                    <span>Register</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Form Section Begin -->

<!-- Register Section Begin -->
<div class="register-login-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="register-form">
                    <h2>Register</h2>

                    <?php if (isset($_SESSION['amsg'])) { ?>
                        <div class="callout callout-success msg">
                            <p><?= $_SESSION['amsg'] ?></p>
                        </div>
                    <?php unset($_SESSION['amsg']);
                    } ?>
                    <?php if (isset($_SESSION['emsg'])) { ?>
                        <div class="callout callout-danger msg">
                            <p><?php echo $_SESSION['emsg']; ?></p>
                        </div>
                    <?php unset($_SESSION['emsg']);
                    } ?>

                    <form class="form-horizontal" onsubmit="return nullcheck();" action="registersave.php" method="POST">


                        <div class="group-input">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" placeholder="name">
                        </div>
                        <div class="group-input">
                            <label for="email">E-mail</label>
                            <input type="text" id="email" oninput="ontype();" name="email" placeholder="email">
                        </div>
                        <div class="group-input">
                            <label for="password">Password</label>
                            <input type="password" id="password"  name="password" placeholder="password">
                        </div>
                        <div class="group-input">
                            <label for="company_name">Company Name</label>
                            <input type="text" id="company_name"  name="company_name" placeholder="company_name">
                        </div>
                        <div class="group-input">
                            <label for="phone">phone</label>
                            <input type="text" id="phone"  name="phone" placeholder="phone">
                        </div>
                        <button type="submit" class="site-btn register-btn" name="submit" id="submit">REGISTER</button>
                    </form>
                    <div class="switch-login">
                        <a href="./login.php" class="or-login">Or Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    function nullcheck() {

        $(".error").remove();
        $(".borderch").removeClass();


        if ($('#name').val() == '') {
            $('#name').after('<span class="error">* This field is required</span>').addClass("borderch").focus();
            return false;
        }

        if ($('#email').val() == '') {
            $('#email').after('<span class="error">* This field is required</span>').addClass("borderch").focus();
            return false;
        }

        if ($('#password').val() == '') {
            $('#password').after('<span class="error">* This field is required</span>').addClass("borderch").focus();
            return false;
        }

        if ($('#company_name').val() == '') {
            $('#company_name').after('<span class="error">* This field is required</span>').addClass("borderch").focus();
            return false;
        }

        if ($('#phone').val() == '') {
            $('#phone').after('<span class="error">* This field is required</span>').addClass("borderch").focus();
            return false;
        }

        if (isNaN($("#phone").val())) {

            $('#phone').after('<span class="error">* Phone Number is numeric!!</span>').addClass("borderch");
            return false;
        }


    }

    function ontype() {
        $(".error").remove();
        $(".borderch").removeClass();

        if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test($("#email").val())) {

            $('#email').after('<span class="error">* Type a valid email!!</span>').addClass("borderch").focus();
        }
    }
</script>

<!-- Register Form Section End -->

<!-- Partner Logo Section Begin -->
<div class="partner-logo">
    <div class="container">
        <div class="logo-carousel owl-carousel">
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="img/logo-carousel/logo-1.png" alt="">
                </div>
            </div>
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="img/logo-carousel/logo-2.png" alt="">
                </div>
            </div>
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="img/logo-carousel/logo-3.png" alt="">
                </div>
            </div>
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="img/logo-carousel/logo-4.png" alt="">
                </div>
            </div>
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="img/logo-carousel/logo-5.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Partner Logo Section End -->

<?php include 'includes/footer.php'; ?>
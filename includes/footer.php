<!-- Footer Section Begin -->
<footer class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="footer-left">
                    <div class="footer-logo">
                        <a><img src="img/footer-logo.png" alt="fashi"></a>
                    </div>
                    <ul>
                        <li>Address: 60-49 Road 11378 New York</li>
                        <li>Phone: +65 11.188.888</li>
                        <li>Email: hello.colorlib@gmail.com</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 offset-lg-1">
                <div class="footer-widget">
                    <h5>Information</h5>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Checkout</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Serivius</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="footer-widget">
                    <h5>My Account</h5>
                    <ul>
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Shopping Cart</a></li>
                        <li><a href="#">Shop</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-reserved">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-text">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy; All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" rel="noopener" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                    <div class="payment-pic">
                        <img src="img/payment-method.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>

<!-- Js Plugins -->
<script src="src/js/jquery-3.4.1.min.js"></script>
<script src="src/js/bootstrap.min.js"></script>
<script src="src/js/jquery-ui.min.js"></script>
<script src="src/js/jquery.countdown.min.js"></script>
<script src="src/js/jquery.nice-select.min.js"></script>
<script src="src/js/jquery.zoom.min.js"></script>
<script src="src/js/jquery.dd.min.js"></script>
<script src="src/js/jquery.slicknav.js"></script>
<script src="src/js/owl.carousel.min.js"></script>
<script src="src/js/main.js"></script>
<script type="text/javascript" src="plugin/smart-wizard/js/jquery.smartWizard.min.js"></script>
<script type="text/javascript" src="plugin/smart-wizard/js/jquery.cloner.js"></script>
<script type="text/javascript">

  $(function(){

    $('#smartwizard').smartWizard({
            selected: 0,
            theme: 'arrows',
            transitionEffect:'fade',
         });

         $("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection){
           if(stepNumber == 4){ // 4 is the last step in this case
             $("#smartwizard .btn-toolbar .sw-btn-next").hide()
           }else{
             $("#smartwizard .btn-toolbar .sw-btn-next").show()
           }
         });
         let result="";
         $("#smartwizard").on("leaveStep", function(e, anchorObject, stepNumber, stepDirection) {
             var elmForm = $("#step-" + stepNumber);
             // stepDirection === 'forward' :- this condition allows to do the form validation
             // only on forward navigation, that makes easy navigation on backwards still do the validation when going next
             if(stepDirection === 'forward' && elmForm){
               if(stepNumber == 0){ // 4 is the last step in this case
                 displaySizing();
                 result = validation();
               }
               if(stepNumber == 1){ // 4 is the last step in this case
                 result = validation_form_2();
               }
               return result;
             }
         });

       });

    var modal=document.getElementById("myModal"),img=document.getElementById("myImg"),modalImg=document.getElementById("img01"),captionText=document.getElementById("caption");
    if(img){
    img.addEventListener('click',{passive: true}, function(){
      modal.style.display="block",
      modalImg.src=this.src,
      captionText.innerHTML=this.alt
    });
  }

    var span=document.getElementsByClassName("close")[0];span.onclick=function(){modal.style.display="none"};

</script>

</body>

</html>

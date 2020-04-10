  <div id="step-1"  role="form" >
    <hr class="error">
    <h5 class="error">All * fields are required</h5>
    <hr>
  </br>
      <div class=" row">
        <div class="col-sm-2">
            <label for="buyerName" class="control-label"><b>Buyer Name <span class="error" >*</span> :</b></label>
        </div>
        <div class="col-sm-4">
            <input type="text" class="form-control " id="buyerName" name="buyerName" placeholder="type Your Name">
        </div>

        <div class="col-sm-2">
            <label for="companyName" class="control-label"><b>Company Name <span class="error" >*</span> :</b></label>
        </div>
        <div class="col-sm-4">
            <input type="text" class="form-control " id="companyName" name="companyName" placeholder="type Company Name">
        </div>
      </div>
      </br>

      <div class=" row">
        <div class="col-sm-2">
            <label for="productName" class="control-label"><b>Product Name <span class="error" >*</span> :</b></label>
        </div>
        <div class="col-sm-6">
            <input type="text" class="form-control" id="productName" name="productName" placeholder="type Product Name">
        </div>
      </div>
      </br>
      <div class=" row">
          <div class="col-sm-2">
              <label for="composition" class="control-label"><b>Composition <span class="error" >*</span> :</b></label>
          </div>
          <div class="col-sm-4">
              <input type="text" class="form-control" id="composition" name="composition" placeholder="ex: cotton % or viscage %"  >
          </div>
          <div class="col-sm-2">
              <label for="fabricsWeight" class="control-label"><b>Fabrics weight <span class="error" >*</span> :</b></label>
          </div>
          <div class="col-sm-4">
              <input type="text" class="form-control" id="fabricsWeight" name="fabricsWeight" placeholder="Fabrics weight in gsm">
          </div>
      </div>
      </br>

      <div class=" row">
          <div class="col-sm-2">
              <label for="colors" class="control-label"><b>Colors <span class="error" >*</span> :</b></label>
          </div>
          <div class="col-sm-4">
              <input type="text" class="form-control" id="colors" name="colors" placeholder="Colors name or colors code"  >
          </div>
          <div class="col-sm-2">
              <label for="fabricConstruction" class="control-label"><b>Main Fabric Construction <span class="error" >*</span> :</b></label>
          </div>
          <div class="col-sm-4">
              <input type="text" class="form-control" id="fabricConstruction" name="fabricConstruction" placeholder="fabric pique">
          </div>
      </div>
      </br>


      <div class="well">
        <div class="card">
            <div class="card-header"><b>Quantity in pieces by Size <span class="error" >*</span> :</b></div>
            <div class="card-body">

                <div class=" row">
                    <div class="col-sm-1">
                        <label for="mQuantity" class="control-label">M :</label>
                    </div>
                    <div class="col-sm-3">
                        <input type="number" class="form-control quantity" id="mQuantity" name="mQuantity" placeholder="quantity in pieces" >
                    </div>
                    <div class="col-sm-1">
                        <label for="sQuantity" class="">S :</label>
                    </div>
                    <div class="col-sm-3">
                        <input type="number" class="form-control quantity" id="sQuantity" name="sQuantity" placeholder="quantity in pieces">
                    </div>
                    <div class="col-sm-1">
                        <label for="lQuantity" class="">L :</label>
                    </div>
                    <div class="col-sm-3">
                        <input type="number" class="form-control quantity" id="lQuantity" name="lQuantity" placeholder="quantity in pieces">
                    </div>
                </div>
                </br>

                <div class=" row" id="msg">
                    <div class="col-sm-1">
                        <label for="xlQuantity" class="control-label">XL :</label>
                    </div>
                    <div class="col-sm-3">
                        <input type="number" class="form-control quantity" id="xlQuantity" name="xlQuantity" placeholder="quantity in pieces" >
                    </div>
                    <div class="col-sm-1">
                        <label for="xxlQuantity" class="">XXL :</label>
                    </div>
                    <div class="col-sm-3">
                        <input type="number" class="form-control quantity" id="xxlQuantity" name="xxlQuantity" placeholder="quantity in pieces">
                    </div>
                    <div class="col-sm-1">
                        <label for="xxxlQuantity" class="">XXXL :</label>
                    </div>
                    <div class="col-sm-3">
                        <input type="text" class="form-control quantity" id="xxxlQuantity" name="xxxlQuantity" placeholder="quantity in pieces">
                    </div>
                </div>

            </div>
        </div>
      </br>


        <div class=" row">
            <div class="col-sm-6">
              <div class="form-group">
                  <label for="febricDescription"><b>Fabrics Description <span class="error" >*</span> :</b></label>
                  <textarea class="form-control" id="febricDescription" name="febricDescription" rows="2" placeholder="combed , viscage etc"></textarea>
              </div>
              <div class="form-group">
                  <label for="sketchUpload" class="control-label"><b>Upload Sketch <span class="error" >*</span> :</b></label>
                  <input type="text" class="form-control" id="sketchUpload" name="sketchUpload" >
              </div>
            </div>
            <div class="col-sm-2">
                <label for="myImg" class="cnotrol-label"><b>Example Sketch:</b></label>
            </div>
            <div class="col-sm-4">
              <img id="myImg" src="img/18-14-LineDrawing.jpg" alt="example" style="width:100%;max-width:300px">
            </div>
        </div>
        </br>
      </div>

  </div>

  <script type="text/javascript">

  function validation() {
  // $('#step-1 input,textarea').each(
  //     function(index) {
  //         let input = $(this).not(".quantity");
  //         //console.log(input)
  //         $(".error-block").remove();
  //         $("input,textarea").removeClass("borderch");
  //           if (input.val() == "") {
  //               let str = input.attr('id');
  //               $("#" + input.attr('id')).after('<span class="error-block">* ' + message(str) + ' is required</span>').focus();
  //               $("#" + input.attr('id')).addClass("borderch");
  //               exit();
  //           }
  //           if ($(this).hasClass("quantity")) {
  //               let inputNumber = $(this);
  //               if (isNaN(inputNumber.val())) {
  //                   let str = inputNumber.attr('id');
  //                   alert(str)
  //                   $("#" + inputNumber.attr('id')).after('<span class="error-block">* ' + message(str) + ' must be number</span>').focus();
  //                   $("#" + inputNumber.attr('id')).addClass("borderch");
  //                   exit();
  //               }
  //           }
  //           if ($("#mQuantity").val() == "" && $("#sQuantity").val() == "" && $("#lQuantity").val() == "" && $("#xlQuantity").val() == "" && $("#xxlQuantity").val() == "" && $("#xxxlQuantity").val() == "") {
  //               $('#msg').after('<span class="error-block">*At least one Quantity is required</span>').focus();
  //               exit();
  //           }
  //         }
  //       )
  //       $(".error").remove();
  //       return true;
      }

    // $("#sketchUpload").change(function() {
    //   var fileExtension = ['jpeg', 'jpg', 'png', 'gif'];
    //   if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
    //       $("#sketchUpload").val('');
    //       $('#sketchUpload').after('<span class="error-block">* Only formats are allowed : ' + fileExtension.join(', ') + '</span>').focus();
    //   }
    // });



  </script>

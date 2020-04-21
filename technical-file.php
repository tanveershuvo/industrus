  <div id="step-1" role="form">
      <hr class="error">
      <h5 class="error">All * fields are required</h5>
      <hr>
      </br>
      <div class=" row">
          <div class="col-sm-2">
              <label for="buyerName" class="control-label"><b>Buyer Name <span class="error">*</span> :</b></label>
          </div>
          <div class="col-sm-4">
              <input type="text" class="form-control " id="buyerName" name="buyerName" placeholder="type Your Name">
          </div>

          <div class="col-sm-2">
              <label for="companyName" class="control-label"><b>Company Name <span class="error">*</span> :</b></label>
          </div>
          <div class="col-sm-4">
              <input type="text" class="form-control " id="companyName" name="companyName" placeholder="type Company Name">
          </div>
      </div>
      </br>

      <div class=" row">
          <div class="col-sm-2">
              <label for="productName" class="control-label"><b>Product Name <span class="error">*</span> :</b></label>
          </div>
          <div class="col-sm-6">
              <input type="text" class="form-control" id="productName" name="productName" placeholder="type Product Name">
          </div>
      </div>
      </br>
      <div class=" row">
          <div class="col-sm-2">
              <label for="composition" class="control-label"><b>Composition <span class="error">*</span> :</b></label>
          </div>
          <div class="col-sm-4">
              <input type="text" class="form-control" id="composition" name="composition" placeholder="ex: cotton % or viscage %">
          </div>
          <div class="col-sm-2">
              <label for="fabricsWeight" class="control-label"><b>Fabrics weight <span class="error">*</span>
                      :</b></label>
          </div>
          <div class="col-sm-4">
              <input type="text" class="form-control" id="fabricsWeight" name="fabricsWeight" placeholder="Fabrics weight in gsm">
          </div>
      </div>
      </br>

      <div class=" row">

          <div class="col-sm-3">
              <label for="fabricConstruction" class="control-label"><b>Main Fabric Construction <span class="error">*</span> :</b></label>
          </div>
          <div class="col-sm-6">
              <input type="text" class="form-control" id="fabricConstruction" name="fabricConstruction" placeholder="fabric pique">
          </div>
      </div>
      </br>


      <div class="well clonable-block" data-toggle="cloner">
          <div class="card clonable" data-ss="1">
              <div class="card-body">
                  <div class="card-title mb-4 row">
                      <div class="col-sm-2">
                          <label for="colors" class="control-label"><b>Colors <span class="error">*</span> :</b></label>
                      </div>

                      <div class="col-sm-4">
                          <input type="text" class="form-control clonable-increment-id clonable-increment-name" id="colors_0" name="colors[0]" placeholder="Colors name or colors code">
                      </div>
                      <div class="btn-group btn-group-sm col-sm-2" role="group" aria-label="...">
                          <button class="clonable-button-add btn btn-primary" type="button"><i class="fa fa-plus"></i> Add New</button>
                          <button type="button" class="btn btn-danger clonable-button-close"><i class="fa fa-trash"></i></button>
                      </div>
                  </div>
                  <div class="card-subtitle mb-4 text-muted"><b>Quantity in pieces by Size & Color <span class="error">*</span> :</b></div>
                  <div class=" row">
                      <div class="col-sm-1">
                          <label for="mQuantity" class="control-label">M :</label>
                      </div>
                      <div class="col-sm-3">
                          <input type="number" class="form-control quantity clonable-increment-id clonable-increment-name" id="mQuantity_0" name="mQuantity[0]" placeholder="quantity in pieces">
                      </div>
                      <div class="col-sm-1">
                          <label for="sQuantity" class="">S :</label>
                      </div>
                      <div class="col-sm-3">
                          <input type="number" class="form-control quantity clonable-increment-id clonable-increment-name" id="sQuantity_0" name="sQuantity[0]" placeholder="quantity in pieces">
                      </div>
                      <div class="col-sm-1">
                          <label for="lQuantity" class="">L :</label>
                      </div>
                      <div class="col-sm-3">
                          <input type="number" class="form-control quantity clonable-increment-id clonable-increment-name" id="lQuantity_0" name="lQuantity[0]" placeholder="quantity in pieces">
                      </div>
                  </div>
                  </br>

                  <div class=" row" id="msg">
                      <div class="col-sm-1">
                          <label for="xlQuantity" class="control-label">XL :</label>
                      </div>
                      <div class="col-sm-3">
                          <input type="number" class="form-control quantity clonable-increment-id clonable-increment-name" id="xlQuantity_0" name="xlQuantity[0]" placeholder=" quantity in pieces">
                      </div>
                      <div class="col-sm-1">
                          <label for="xxlQuantity" class="">XXL :</label>
                      </div>
                      <div class="col-sm-3">
                          <input type="number" class="form-control quantity clonable-increment-id clonable-increment-name" id="xxlQuantity_0" name="xxlQuantity[0]" placeholder="quantity in pieces">
                      </div>
                      <div class="col-sm-1">
                          <label for="xxxlQuantity" class="">XXXL :</label>
                      </div>
                      <div class="col-sm-3">
                          <input type="text" class="form-control quantity clonable-increment-id clonable-increment-name" id="xxxlQuantity_0" name="xxxlQuantity[0]" placeholder="quantity in pieces">
                      </div>
                  </div>

              </div>
          </div>
          </br>
          <div class=" row">
              <div class="col-sm-6">
                  <div class="form-group">
                      <label for="febricDescription"><b>Fabrics Description <span class="error">*</span> :</b></label>
                      <textarea class="form-control" id="febricDescription" name="febricDescription" rows="2" placeholder="combed , viscage etc"></textarea>
                  </div>
                  <div class="form-group">
                      <label for="sketchUpload" class="control-label"><b>Upload Sketch <span class="error">*</span>
                              :</b></label>
                      <input type="text" class="form-control" id="sketchUpload" name="sketchUpload">
                  </div>
              </div>
              <div class="col-sm-2">
                  <label for="myImg" class="cnotrol-label"><b>Example Sketch:</b></label>
              </div>
              <div class="col-sm-4">
                  <img src="img/18-14-LineDrawing.jpg" data-action="zoom" alt="example" style="width:100%;max-width:300px">
              </div>
          </div>
          </br>
      </div>
  </div>

  <script type="text/javascript">
      function technicalValidation() {
          let result = true;
          $('#step-1 input,textarea').each(
              function() {
                  let input = $(this).not(".quantity");
                  //console.log(input)
                  $(".error-block").remove();
                  $("input,textarea").removeClass("borderch");
                  if (input.val() == "") {
                      let inputID = input.attr('id');
                      $("#" + inputID).after('<span class="error-block">* ' + message(inputID) +
                          ' is required</span>').focus();
                      $("#" + inputID).addClass("borderch");
                      result = false;
                      return false;
                  }
                  if ($(this).hasClass("quantity")) {
                      let inputNumber = $(this);
                      if (isNaN(inputNumber.val())) {
                          let inputID = inputNumber.attr('id');
                          $("#" + inputID).after('<span class="error-block">* ' + message(inputID) +
                              ' must be number</span>').focus();
                          $("#" + inputID).addClass("borderch");
                          result = false;
                          return false;
                      }
                  }

              }
          )
          $(".error").remove();
          return result;
      }
  </script>
<div id="step-2" role="form">
    <hr class="err_2">
    <h5 class="err_2">All * fields are required</h5>
    <hr>
    <div class=" row">
        <div class="col-sm-6">
            <div class="form-group">
                <label for="upSketch" class="control-label"><b>Upload Front Measurement Sketch <span class="err_2" >*</span> :</b></label>
                <input type="text" class="form-control" id="frontMeasurementSketch" name="measurementSketch">
            </div>
            <div class="form-group">
                <label for="upSketch" class="control-label"><b>Upload Back Measurement Sketch <span class="err_2" >*</span> :</b></label>
                <input type="text" class="form-control" id="backMeasurementSketch" name="measurementSketch">
            </div>
            <div class="form-group">
                <label for="upSketch" class="control-label"><b>Upload Collar Measurement Sketch <span class="err_2" >*</span> :</b></label>
                <input type="text" class="form-control" id="collarMeasurementSketch" name="measurementSketch">
            </div>
        </div>
        <div class="col-sm-2">
            <label for="example" class="cnotrol-label"><b>Example Sketch:</b></label>
        </div>
        <div class="col-sm-4">
            <img id="myImg" src="img/18-14-LineDrawing.jpg" alt="example-sketch" style="width:100%;max-width:300px">
        </div>
    </div>
    </br>
    <h5><strong>Pattern/Chart of</strong> Measurement : </h5>
    <hr>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Ref <span class="err_2">*</span></th>
                <th width="25%" scope="col">Description <span class="err_2">*</span></th>
                <th scope="col">Tol(-+) <span class="err_2">*</span></th>
                <th scope="col" class="s">S</th>
                <th scope="col" class="m">M</th>
                <th scope="col" class="l">L</th>
                <th scope="col" class="xl">XL</th>
                <th scope="col" class="xxl">XXL</th>
                <th scope="col" class="xxxl">XXXL</th>
                <th width="5%" scope="col">Action</th>
            </tr>
        </thead>
        <tbody id ='errormsg' class="clonable-block" data-toggle="cloner">
            <tr class="clonable" >
                <th scope="row">
                    <input type="text" id="imageReference" class="form-control" name="" placeholder="reference">
                </th>
                <td>
                    <input type="text" id="measurementDescription" class="form-control" name="" placeholder="Measurement description">
                </td>
                <td>
                    <input type="text" id="tolerance" class="form-control" name="" placeholder="tolerance">
                </td>
                <td class="s">
                    <input type="text" id="sSizeInInch" class="form-control" name="" placeholder="Inch" value="">
                </td>
                <td class="m">
                    <input type="text" id="mSizeInInch" class="form-control" name="" placeholder="Inch" value="">
                </td>
                <td class="l" >
                    <input type="text" id="lSizeInInch" class="form-control" name="" placeholder="Inch" value="">
                </td>
                <td class="xl">
                    <input type="text" id="xlSizeInInch" class="form-control" name="" placeholder="Inch" value="">
                </td>
                <td class="xxl" >
                    <input type="text" id="xxlSizeInInch" class="form-control" name="" placeholder="Inch" value="">
                </td>
                <td class="xxxl">
                    <input type="text" id="xxxlSizeInInch" class="form-control" placeholder="Inch" name="" value="">
                </td>
                <td>
                    <div class="btn-group btn-group-sm" role="group" aria-label="...">
                        <button class="clonable-button-add btn btn-primary" type="button"><i class="fa fa-plus"></i></button>
                        <button type="button" class="btn btn-danger clonable-button-close"><i class="fa fa-trash"></i></button>
                    </div>
                </td>
            </tr>
        </tbody>
        <thead>
            <tr>
              <th scope="col">Ref <span class="err_2">*</span></th>
              <th width="25%" scope="col">Description <span class="err_2">*</span></th>
              <th scope="col">Tol(-+) <span class="err_2">*</span></th>
              <th scope="col" class="s">S</th>
              <th scope="col" class="m">M</th>
              <th scope="col" class="l">L</th>
              <th scope="col" class="xl">XL</th>
              <th scope="col" class="xxl">XXL</th>
              <th scope="col" class="xxxl">XXXL</th>
              <th width="5%" scope="col">Action</th>
            </tr>
        </thead>
    </table>
    </br>
</div>
  <script type="text/javascript">


  function validation_form_2() {

  $('#step-2 input').each(
      function(index) {
          let input = $(this).not(".hiding");
          console.log(input)
          $(".error-block").remove();
          $("input").removeClass("borderch");
            if (input.val() == "") {
                let str = input.attr('id');
                $("#errormsg").after('<span class="error-block">* ' + message(str) + ' is required</span>').focus();
              //  $("#" + input.attr('id')).addClass("borderch");
                exit();
            }
            if ($(this).hasClass("quantity")) {
                let inputNumber = $(this);
                if (isNaN(inputNumber.val())) {
                    let str = inputNumber.attr('id');
                    alert(str)
                    $("#" + inputNumber.attr('id')).after('<span class="error-block">* ' + message(str) + ' must be number</span>').focus();
                    $("#" + inputNumber.attr('id')).addClass("borderch");
                    exit();
                }
            }
          }
        )
        $(".err_2").remove();
        return true;
      }

    // $("#step-2 input[type=file]").change(function() {
    //   let input = $(this);
    //   //alert(input)
    //   input.each(
    //     function(){
    //   var fileExtension = ['jpeg', 'jpg', 'png', 'gif'];
    //   if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
    //       input.val('');
    //       input.after('<span class="error-block">* Only formats are allowed : ' + fileExtension.join(', ') + '</span>').focus();
    //       exit();
    //   }
    // }
    // )
    // });

    function displaySizing(){
      if($("#mQuantity").val()==""){
        $('.m').hide();
        $('.m input[type=text]').addClass('hiding').val('');
      }else{
        $('.m').show();
        $('.m input[type=text]').removeClass('hiding');
      }
      if($("#sQuantity").val()==""){
        $('.s').hide();
        $('.s input[type=text]').addClass('hiding').val('');
      }else{
        $('.s').show();
        $('.s input[type=text]').removeClass('hiding');
      }
      if($("#lQuantity").val()==""){
        $('.l').hide();
        $('.l input[type=text]').addClass('hiding').val('');
      }else{
        $('.l').show();
        $('.l input[type=text]').removeClass('hiding');
      }
      if($("#xlQuantity").val()==""){
        $('.xl').hide();
        $('.xl input[type=text]').addClass('hiding').val('');
      }else{
        $('.xl').show();
        $('.xl input[type=text]').removeClass('hiding');
      }
      if($("#xxlQuantity").val()==""){
        $('.xxl').hide();
        $('.xxl input[type=text]').addClass('hiding').val('');
      }else{
        $('.xxl').show();
        $('.xxl input[type=text]').removeClass('hiding');
      }
      if($("#xxxlQuantity").val()==""){
        $('.xxxl').hide();
        $('.xxxl input[type=text]').addClass('hiding').val('');
      }else{
        $('.xxxl').show();
        $('.xxxl input[type=text]').removeClass('hiding');
      }
    }


  </script>

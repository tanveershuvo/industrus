<div id="step-2" role="form">
    <hr class="err_2">
    <h5 class="err_2">All * fields are required</h5>
    <hr>
    <div class=" row">
        <div class="col-sm-6">
            <div class="form-group">
                <label for="frontMeasurementSketch" class="control-label"><b>Upload Front Measurement Sketch
                        <span class="err_2">*</span> :</b></label>
                <input type="text" class="form-control" id="frontMeasurementSketch" name="measurementSketch">
            </div>
            <div class="form-group">
                <label for="backMeasurementSketch" class="control-label"><b>Upload Back Measurement Sketch
                        <span class="err_2">*</span> :</b></label>
                <input type="text" class="form-control" id="backMeasurementSketch" name="measurementSketch">
            </div>
            <div class="form-group">
                <label for="collarMeasurementSketch" class="control-label"><b>Upload Collar Measurement Sketch <span class="err_2">*</span> :</b></label>
                <input type="text" class="form-control" id="collarMeasurementSketch" name="measurementSketch">
            </div>
        </div>
        <div class="col-sm-2">
            <label for="examples" class="cnotrol-label"><b>Example Sketch:</b></label>
        </div>
        <div class="col-sm-4">
            <img src="img/ee51b7e91811269cea23d3979f006bab.jpg" data-action="zoom" alt="example-sketch" style="width:100%;max-width:300px">
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
        <tbody class="clonable-block" data-toggle="cloner">
            <tr class="clonable" data-ss="1">
                <th scope="row">
                    <input type="text" id="imgRef_0" class="form-control clonable-increment-id clonable-increment-name " name="img[0]" placeholder="reference">
                </th>
                <td>
                    <input type="text" id="measurementDescription_0" class="form-control clonable-increment-id clonable-increment-name" name="" placeholder="Measurement description">
                </td>
                <td>
                    <input type="number" id="tolerance_0" class="form-control num clonable-increment-id clonable-increment-name" name="" placeholder="tolerance">
                </td>
                <td class="s">
                    <input type="number" id="sSizeInInch_0" class="form-control num clonable-increment-id clonable-increment-name" name="" placeholder="Inch" value="">
                </td>
                <td class="m">
                    <input type="number" id="mSizeInInch_0" class="form-control num clonable-increment-id clonable-increment-name" name="" placeholder="Inch" value="">
                </td>
                <td class="l">
                    <input type="number" id="lSizeInInch_0" class="form-control num clonable-increment-id clonable-increment-name" name="" placeholder="Inch" value="">
                </td>
                <td class="xl">
                    <input type="number" id="xlSizeInInch_0" class="form-control num clonable-increment-id clonable-increment-name" name="" placeholder="Inch" value="">
                </td>
                <td class="xxl">
                    <input type="number" id="xxlSizeInInch_0" class="form-control num clonable-increment-id clonable-increment-name" name="" placeholder="Inch" value="">
                </td>
                <td class="xxxl">
                    <input type="number" id="xxxlSizeInInch_0" class="form-control num clonable-increment-id clonable-increment-name" placeholder="Inch" name="" value="">
                </td>
                <td>
                    <div class="btn-group btn-group-sm" role="group" aria-label="...">
                        <button class="clonable-button-add btn btn-primary" type="button"><i class="fa fa-plus"></i></button>
                        <button type="button" class="btn btn-danger clonable-button-close"><i class="fa fa-trash"></i></button>
                    </div>
                </td>
            </tr>
        </tbody>

    </table>
    <label id='errormsg' class="col-12"></label>
</div>

<script type="text/javascript">
    function validation_form_2() {
        $(".error-block").remove();
        $("input").removeClass("borderch");
        $('#step-2 input[type=file]').each(
            function(index) {
                let inputfile = $(this);
                if (inputfile.val() == "") {
                    console.log(inputfile);
                    let str = inputfile.attr('id');
                    $("#" + inputfile.attr('id')).after('<span class="error-block">* ' + message(str) +
                        ' img is required</span>').focus();
                    $("#" + inputfile.attr('id')).addClass("borderch");
                    exit();
                }
            }
        )
        $('#step-2 input').each(
            function(index) {
                let input = $(this).not('.hiding');
                if (input.val() == "") {
                    let str = input.attr('id');
                    $("#errormsg").after('<span class="error-block">* ' + message(str) +
                        ' is required</span>');
                    $("#" + input.attr('id')).addClass("borderch").focus();
                    exit();
                }
                if ($(this).hasClass("num")) {
                    let inputNumber = $(this);
                    if (isNaN(inputNumber.val())) {
                        let str = inputNumber.attr('id');
                        $("#" + inputNumber.attr('id')).addClass("borderch").focus();
                        $("#errormsg").after('<span class="error-block">* ' + message(str) +
                            ' must be number</span>');
                        exit();
                    }
                }
            }
        )
        $(".err_2").remove();
        return true;
    }
</script>
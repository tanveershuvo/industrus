<div id="step-3" role="form">
    <hr class="err_2">
    <h5 class="err_2">All * fields are required</h5>
    <hr>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group"> <label for="frontSewing" class="control-label"><b>Upload Front sewing Sketch <span class="err_2">*</span> :</b></label> <input type="file" class="form-control" id="frontSewing" name="frontSewing"> </div>
            <div class="form-group"> <label for="frontPlacket" class="control-label"><b>Upload Front Placket Sketch <span class="err_2">*</span> :</b></label> <input type="file" class="form-control" id="frontPlacket" name="frontPlacket"> </div>
            <div class="form-group"> <label for="slideSlit" class="control-label"><b>Upload Slide slit sewing Sketch <span class="err_2">*</span> :</b></label> <input type="file" class="form-control" id="slideSlit" name="slideSlit"> </div>
        </div>
        <div class="col-sm-2"> <label for="examples1" class="cnotrol-label"><b>Example sewing Sketch:</b></label> </div>
        <div class="col-sm-4"> <img src="" data-action="zoom" alt="example-sketch1" style="width:100%;max-width:300px"> </div>
    </div>
    </br>
    <h5><strong>Pattern/Chart of</strong> Measurement : </h5>
    <hr>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Ref <span class="err_2">*</span></th>
                <th width="40%" scope="col">Description <span class="err_2">*</span></th>
                <th id="test" scope="col">Action</th>
            </tr>
        </thead>
        <tbody class="clonable-block" data-toggle="cloner">
            <tr class="clonable" data-ss="1">
                <td scope="row"> <input type="text" id="reference_0" class="form-control clonable-increment-id clonable-increment-name " name="reference" placeholder="reference"> </td>
                <td>
                    <input type="text" id="measurementDescription_0" class="form-control clonable-increment-id clonable-increment-name" name="Measurement" placeholder="Measurement description">
                </td>

                <td id="data">
                    <div class="btn-group btn-group-sm" role="group" aria-label="...">
                        <button class="clonable-button-add btn btn-primary" type="button"><i class="fa fa-plus"></i></button>
                        <button type="button" class="btn btn-danger clonable-button-close"><i class="fa fa-trash"></i></button>
                    </div>
                </td>
            </tr>
        </tbody>

    </table>
    <label id='errormsg1' class="col-12"></label>
</div>

<script type="text/javascript">
    function addColor() {
        let names = [];
        $(".appended").remove();
        $('#step-1 input[name^="colors"]').each(function() {
            let data = this.value;
            names.push(data);
        });
        let th = "";
        let td = "";
        for (let i = 0; i < names.length; i++) {
            th += "<th class='appended'>" + names[i] + "</th>";
            td += '<td class="appended"><input type="text"  id="yarnColor' + i + '_1" class="form-control  clonable-increment-id clonable-increment-name" name="yarnColor' + i + '[1]" placeholder="tolerance"></td>';

        }
        $(th).insertBefore("#test");
        $(td).insertBefore("#data");

    }

    function sewingValidation() {
        $(".error-block").remove();
        $("input").removeClass("borderch");
        let result = true;
        $('#step-3 input[type=file]').each(
            function(index) {
                let inputfile = $(this);
                if (inputfile.val() == "") {
                    let inputID = inputfile.attr('id');
                    $("#" + inputID).after('<span class="error-block">* ' + message(inputID) +
                        ' img is required</span>').focus();
                    $("#" + inputID).addClass("borderch");
                    result = false;
                    return false;
                }
            }
        )
        $('#step-3 input:not([type=file])').each(
            function(index) {
                let input = $(this);
                if (input.val() == "") {
                    let inputID = input.attr('id');
                    $("#errormsg1").after('<span class="error-block">* ' + message(inputID) +
                        ' is required</span>');
                    $("#" + inputID).addClass("borderch").focus();
                    result = false;
                    return false;
                }
            }
        )

        $(".err_2").remove();
        return result;
    }
</script>
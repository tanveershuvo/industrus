<div id="step-3" role="form">
    <hr class="step-3-error">
    <h5 class="step-3-error">All * fields are required</h5>
    <hr>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label for="frontSewing" class="control-label"><b>Upload Front sewing Sketch <span class="step-3-error">*</span> :</b></label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="frontSewing" name="frontSewing" aria-describedby="inputGroupFileAddon04" required>
                    <label class="custom-file-label" for="postedFile">Choose Front sewing image</label>
                </div>
            </div>
            <div class="form-group">
                <label for="frontPlacket" class="control-label"><b>Upload Front Placket Sketch <span class="step-3-error">*</span> :</b></label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="frontPlacket" name="frontPlacket" aria-describedby="inputGroupFileAddon04" required>
                    <label class="custom-file-label" for="postedFile">Choose front Placket image</label>
                </div>
            </div>
            <div class="form-group">
                <label for="slideSlit" class="control-label"><b>Upload Slide slit sewing Sketch <span class="step-3-error">*</span> :</b></label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="slideSlit" name="slideSlit" aria-describedby="inputGroupFileAddon04" required>
                    <label class="custom-file-label" for="postedFile">Choose slide Slit image</label>
                </div>
            </div>
        </div>
        <div class="col-sm-2"> <label for="examples1" class="cnotrol-label"><b>Example sewing Sketch:</b></label> </div>
        <div class="col-sm-4"> <img src="img/2972d9d9badcf56faeb77721ed52ff79.jpg" data-action="zoom" alt="example-sketch1" style="width:100%;max-width:300px"> </div>
    </div>
    </br>
    <h5><strong>Trims By</strong> Yarn Color : </h5>
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
</div>
<script type="text/javascript">
    function addColor() {
        let names = [];
        $(".appended").remove();
        $('#step-1 input[name^="colors"]').each(function() {
            let data = this.value;
            names.push(data);
        });
        let inputname = "";
        let inputfield = "";
        for (let i = 0; i < names.length; i++) {
            th += "<th class='appended'>" + names[i] + "</th>";
            td += '<td class="appended"><input type="text"  id="yarnColor' + i + '_1" class="form-control  clonable-increment-id clonable-increment-name" name="yarnColor' + i + '[1]" placeholder="tolerance"></td>';

        }
        $(inputname).insertBefore("#test");
        $(inputfield).insertBefore("#data");

    }

    function sewingValidation() {
        let result = true;
        $(".invalid-feedback").remove();
        $("input").removeClass("is-invalid");
        $('#step-3 input[type=file]').each(
            function(index) {
                let inputfile = $(this);
                if (inputfile.val() == "") {
                    let inputID = inputfile.attr('id');
                    $("#" + inputID).after('<span class="invalid-feedback">* ' + message(inputID) +
                        ' is required</span>').addClass("is-invalid").focus();
                    result = false;
                    return false;
                }
            })
        if (result == true) {
            $('#step-3 input[type!=file]').each(
                function(index) {
                    let inputText = $(this);
                    if ((inputText.val() == "")) {
                        let inputID = inputText.attr('id');
                        $("#" + inputID).after('<span class="invalid-feedback">* ' + message(inputID) +
                            ' is required</span>').addClass("is-invalid").focus();
                        result = false;
                        return false;
                    }
                }
            )

        }


        $(".step-3-error").remove();
        return result;
    }
</script>
<div id="step-3" role="form">
    <hr class="err_2">
    <h5 class="err_2">All * fields are required</h5>
    <hr>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group"> <label for="frontSewing" class="control-label"><b>Upload Front sewing Sketch <span class="err_2">*</span> :</b></label> <input type="text" class="form-control" id="frontSewing" name="frontSewing"> </div>
            <div class="form-group"> <label for="frontPlacket" class="control-label"><b>Upload Front Placket Sketch <span class="err_2">*</span> :</b></label> <input type="text" class="form-control" id="frontPlacket" name="frontPlacket"> </div>
            <div class="form-group"> <label for="slideSlit" class="control-label"><b>Upload Slide slit sewing Sketch <span class="err_2">*</span> :</b></label> <input type="text" class="form-control" id="slideSlit" name="slideSlit"> </div>
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
                <th scope="row"> <input type="text" id="reference" class="form-control clonable-increment-id clonable-increment-name " name="reference" placeholder="reference"> </th>
                <td>
                    <input type="text" id="measurementDescription_0" class="form-control clonable-increment-id clonable-increment-name" name="" placeholder="Measurement description">
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
    <label id='errormsg' class="col-12"></label>
</div>

<script type="text/javascript">
    function addHtml() {
        var th = 0;
        var td = 0;
        var names = JSON.parse(localStorage.getItem('locname') || "[]");
        var i;
        console.log(names)
        for (i = 0; i < names.length; i++) {
            th = '<th>' + names[i] + '</th>';
            td = '<td><input type="number" id="yarnColor' + i + '_1" class="form-control num clonable-increment-id clonable-increment-name" name="yarnColor' + i + '[1]" placeholder="tolerance"></td>';
            console.log(':' + names[i]);
            //localStorage.removeItem('locname');
            //$("#test").before(th);
            $(th).insertBefore("#test");
            $(td).insertBefore("#data");

        }


    }

    // function validation_form_3() {
    //     $(".error-block").remove();
    //     $("input").removeClass("borderch");
    //     $('#step-2 input[type=file]').each(
    //         function(index) {
    //             let inputfile = $(this);
    //             if (inputfile.val() == "") {
    //                 console.log(inputfile);
    //                 let str = inputfile.attr('id');
    //                 $("#" + inputfile.attr('id')).after('<span class="error-block">* ' + message(str) +
    //                     ' img is required</span>').focus();
    //                 $("#" + inputfile.attr('id')).addClass("borderch");
    //                 exit();
    //             }
    //         }
    //     )
    //     $('#step-2 input').each(
    //         function(index) {
    //             let input = $(this).not('.hiding');
    //             if (input.val() == "") {
    //                 let str = input.attr('id');
    //                 $("#errormsg").after('<span class="error-block">* ' + message(str) +
    //                     ' is required</span>');
    //                 $("#" + input.attr('id')).addClass("borderch").focus();
    //                 exit();
    //             }
    //             if ($(this).hasClass("num")) {
    //                 let inputNumber = $(this);
    //                 if (isNaN(inputNumber.val())) {
    //                     let str = inputNumber.attr('id');
    //                     $("#" + inputNumber.attr('id')).addClass("borderch").focus();
    //                     $("#errormsg").after('<span class="error-block">* ' + message(str) +
    //                         ' must be number</span>');
    //                     exit();
    //                 }
    //             }
    //         }
    //     )
    //     $(".err_2").remove();
    //     return true;
    // }
</script>
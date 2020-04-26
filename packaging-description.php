<div id="step-4" role="form">
    <hr>
    <h5 class="step-4-error">All * fields are required</h5>
    <hr>
    <div class="card mb-4">
        <div class="row">
            <div class="col-6 card-header ">
                <h5><strong>Packaging</strong> Details per Box : </h5>
            </div>
            <div class="col-6 row card-header ">
                <div class="col-4">
                    <label for="">Peices Per Box :</label>
                </div>
                <div class="col-5">
                    <input type="text" class="form-control" id="" name="" placeholder="total pieces">
                </div>
            </div>

        </div>
        <table class="table table-bordered  card-body">
            <thead>
                <tr>
                    <th scope="col">Size</th>
                    <th scope="col">Length<br>(in CM)<span class="step-4-error">*</span></th>
                    <th scope="col">Width<br>(in CM)<span class="step-4-error">*</span></th>
                    <th scope="col">Height<br>(in CM)<span class="step-4-error">*</span></th>
                    <th scope="col">Gross weight<br><span class="step-4-error">*</span>(in Kg)</th>
                    <th scope="col">Net Weight<br><span class="step-4-error">*</span>(in Kg)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">S</th>
                    <td><input type="text" class="form-control" id="" name="" placeholder="ex:25"></td>
                    <td><input type="text" class="form-control" id="" name="" placeholder="ex:25"></td>
                    <td><input type="text" class="form-control" id="" name="" placeholder="ex:25"></td>
                    <td><input type="text" class="form-control" id="" name="" placeholder="ex:6.70"></td>
                    <td><input type="text" class="form-control" id="" name="" placeholder="ex:5.70"></td>
                </tr>
            </tbody>
        </table>
    </div>
    <h5><strong>Other Packaging</strong> information : </h5>
    <hr>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Reference <span class="step-4-error">*</span></th>
                <th width="40%" scope="col">Description <span class="step-4-error">*</span></th>
                <th scope="col">Associated Image</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody class="clonable-block" data-toggle="cloner">
            <tr class="clonable" data-ss="1">
                <td scope="row"> <input type="text" id="" class="form-control clonable-increment-id clonable-increment-name " name="" placeholder="reference"> </td>
                <td>
                    <textarea class="form-control" rows="3" id="comment_0" placeholder="describe other package information"></textarea>
                </td>
                <td>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="" name="" aria-describedby="inputGroupFileAddon04">
                        <label class="custom-file-label" for="postedFile">upload image</label>
                    </div>
                </td>
                <td id="data">
                    <div class="btn-group btn-group-sm" role="group" aria-label="...">
                        <button class="clonable-button-add btn btn-primary" type="button"><i class="fa fa-plus"></i></button>
                        <button type="button" class="btn btn-danger  clonable-button-close"><i class="fa fa-trash"></i></button>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>

    <div class="alert alert-danger" role="alert" id="formerror" style="display: none;">
        <h4 class="alert-heading">ERROR!</h4>
        <p>Please Check You have selected all the required element!</p>
    </div>

    <div class="row">
        <div class="col text-center ">
            <button class="site-btn login-btn col-6" id="submit">Order</button>
        </div>
    </div>
    <br>
</div>

<script type="text/javascript">
    // function sub() {
    //     $('#form').submit();
    // }


    function packingValidation() {
        let result = true;
        $(".invalid-feedback").remove();
        $("input").removeClass("is-invalid");
        $('#step-4 input').each(
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
        $(".step-4-error").remove();
        return result;
    }
</script>
<div id="step-4" role="form">
    <hr class="step-3-error">
    <h5 class="step-3-error">All * fields are required</h5>
    <hr>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Size</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
        </tbody>
    </table>
</div>

<script type="text/javascript">
    function sub() {
        $('#form').submit();
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
                        $("#" + inputID).after('<span class="invalid-tooltip">* ' + message(inputID) +
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
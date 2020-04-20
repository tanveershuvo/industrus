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
        <div class="col-sm-4"> <img src="img/ee51b7e91811269cea23d3979f006ba1b.jpg" data-action="zoom" alt="example-sketch1" style="width:100%;max-width:300px"> </div>
    </div> </br>
    <h5><strong>Pattern/Chart of</strong> Measurement : </h5>
    <hr>
    <table class="table table-striped">
        <thead>
            <col>
            <colgroup span="2"></colgroup>
            <colgroup span="1"></colgroup>
            <colgroup span="1"></colgroup>
            <tr>
                <td colspan="2"></td>
                <th colspan="1" scope="colgroup">Colors</th>
                <td colspan="1"></td>
            </tr>
            <tr id="test">
                <th scope="col">Ref <span class="err_2">*</span></th>
                <th width="40%" scope="col">Description <span class="err_2">*</span></th>
                <th scope="col">Colors <span class="err_2">*</span></th>
            </tr>
        </thead>
        <tbody class="clonable-block" data-toggle="cloner">
            <tr class="clonable" data-ss="1">
                <th scope="row"> <input type="text" id="" class="form-control clonable-increment-id clonable-increment-name clonable-increment-id clonable-increment-name" name="" placeholder="reference"> </th>
                <td> <textarea name="" id="" class="form-control clonable-increment-id clonable-increment-name" cols="50" rows="3"></textarea> </td>
                <td> <input type="number" id="" class="form-control num clonable-increment-id clonable-increment-name" name="" placeholder="tolerance"> </td>
                <td>
                    <div class="btn-group btn-group-sm" role="group" aria-label="..."> <button class="clonable-button-add btn btn-primary" type="button"><i class="fa fa-plus"></i></button> <button type="button" class="btn btn-danger clonable-button-close"><i class="fa fa-trash"></i></button> </div>
                </td>
            </tr>
        </tbody>
    </table> <label id='errormsg2' class="col-12"></label>
</div>
<script type="text/javascript">
    function addHtml() {
        var names = JSON.parse(localStorage.getItem('locname') || "[]");
        var td = 0;
        for (var p in names) {
            td += '<th>' + names[p] + '</th>';
            console.log(p + ':' + names[p]);
            localStorage.removeItem('locname');
        }
        $("#test").append(td);
    }
</script>
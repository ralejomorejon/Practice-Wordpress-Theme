jQuery(document).ready(function ($) {
  $("#btn_add_new").click(function () {
    console.log("click done");
  });

  var i = 1;

  $("#add").click(function () {
    i++;
    $("#dynamic").append(
      '<tr id="row' +
        i +
        '"><td><label for="txtname" class="col-form-label mx-2">Question ' +
        i +
        ':</label></td><td><input type="text" name="name[]" id="name" class="mx-2"></td><td><select name="type[]" id="select" class="form-control type_list mr-3"><option value="1" select>yes---no</option><option value="2">range 0--5</option></select></td><td><button name="remove" id="' +
        i +
        '" class="btn btn-danger btn_remove mx-2">X</button></td></tr>'
    );
    return false;
  });

  $(document).on("click", ".btn_remove", function () {
    var button_id = $(this).attr("id");
    $("#row" + button_id + "").remove();
    return false;
  });
});

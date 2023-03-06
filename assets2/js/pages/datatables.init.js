$(document).ready(function () {
    $("#datatable-buttons")
      .DataTable({
        lengthChange: !1,
        buttons: ["copy", "excel", "pdf", "colvis"],
      })
      .buttons()
      .container()
      .appendTo("#datatable-buttons_wrapper .col-md-6:eq(0)"),
      $(".dataTables_length select").addClass("form-select form-select-sm");
      $("#datatable-buttons2")
      .DataTable({
        lengthChange: !1,
        buttons: ["copy", "excel", "pdf", "colvis"],
      })
      .buttons()
      .container()
      .appendTo("#datatable-buttons2_wrapper .col-md-6:eq(0)"),
    $(".dataTables_length select").addClass("form-select form-select-sm");
    $("#datatable-buttons3")
    .DataTable({
      lengthChange: !1,
      buttons: ["copy", "excel", "pdf", "colvis"],
    })
    .buttons()
    .container()
    .appendTo("#datatable-buttons3_wrapper .col-md-6:eq(0)"),
  $(".dataTables_length select").addClass("form-select form-select-sm");
  $("#datatable-buttons4")
  .DataTable({
    lengthChange: !1,
    buttons: ["copy", "excel", "pdf", "colvis"],
  })
  .buttons()
  .container()
  .appendTo("#datatable-buttons4_wrapper .col-md-6:eq(0)"),
$(".dataTables_length select").addClass("form-select form-select-sm");
$("#datatable-buttons5")
.DataTable({
  lengthChange: !1,
  buttons: ["copy", "excel", "pdf", "colvis"],
})
.buttons()
.container()
.appendTo("#datatable-buttons5_wrapper .col-md-6:eq(0)"),
$(".dataTables_length select").addClass("form-select form-select-sm");
$("#datatable-buttons6")
.DataTable({
  lengthChange: !1,
  buttons: ["copy", "excel", "pdf", "colvis"],
})
.buttons()
.container()
.appendTo("#datatable-buttons6_wrapper .col-md-6:eq(0)"),
$(".dataTables_length select").addClass("form-select form-select-sm");
});

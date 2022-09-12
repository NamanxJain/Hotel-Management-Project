$("#addRoom").submit(function () {
  var room_type_id = $("#room_type_id").val();
  var room_no = $("#room_no").val();

  $.ajax({
    type: "post",
    url: "ajax.php",
    dataType: "JSON",
    data: {
      room_type_id: room_type_id,
      room_no: room_no,
      add_room: "",
    },
    success: function (response) {
      if (response.done == true) {
        $("#addRoom").modal("hide");
        window.location.href = "index.php?room_mang";
      } else {
        $(".response").html(
          '<div class="alert bg-danger alert-dismissable" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em>' +
            response.data +
            "</div>"
        );
      }
    },
  });

  return false;
});

$("#roomEditFrom").submit(function () {
  var room_type_id = $("#edit_room_type").val();
  var room_no = $("#edit_room_no").val();
  var room_id = $("#edit_room_id").val();

  $.ajax({
    type: "post",
    url: "ajax.php",
    dataType: "JSON",
    data: {
      room_type_id: room_type_id,
      room_no: room_no,
      room_id: room_id,
      edit_room: "",
    },
    success: function (response) {
      if (response.done == true) {
        $("#editRoom").modal("hide");
        window.location.href = "index.php?room_mang";
      } else {
        $(".response").html(
          '<div class="alert bg-danger alert-dismissable" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em>' +
            response.data +
            "</div>"
        );
      }
    },
  });

  return false;
});

$(document).on("click", "#roomEdit", function (e) {
  e.preventDefault();

  var room_id = $(this).data("id");

  console.log(room_id);

  $.ajax({
    type: "post",
    url: "ajax.php",
    dataType: "JSON",
    data: {
      room_id: room_id,
      room: "",
    },
    success: function (response) {
      if (response.done == true) {
        $("#edit_room_type").val(response.room_type_id);
        $("#edit_room_no").val(response.room_no);
        $("#edit_room_id").val(room_id);
      } else {
        $(".edit_response").html(
          '<div class="alert bg-danger alert-dismissable" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em>' +
            response.data +
            "</div>"
        );
      }
    },
  });
});

function fetch_room(val) {
  $.ajax({
    type: "post",
    url: "ajax.php",
    data: {
      room_type_id: val,
      room_type: "",
    },
    success: function (response) {
      $("#room_no").html(response);
    },
  });
}

function validId(val) {
  if (val == 1) {
    document.getElementById("id_card_no").setAttribute("type", "number");
    document.getElementById("id_card_no").setAttribute("data-minlength", "12");
    document
      .getElementById("id_card_no")
      .setAttribute("placeholder", "647510001480");
    document
      .getElementById("id_card_no")
      .setAttribute(
        "data-error",
        "Enter 12 Digit Valid National Identity Card No"
      );
  } else if (val == 2) {
    document.getElementById("id_card_no").setAttribute("type", "text");
    document.getElementById("id_card_no").setAttribute("data-minlength", "11");
    document
      .getElementById("id_card_no")
      .setAttribute("placeholder", "COA/2635100");
    document
      .getElementById("id_card_no")
      .setAttribute(
        "data-error",
        "Enter 11 Character(include '/') Valid Voter ID Card No"
      );
  } else if (val == 3) {
    document.getElementById("id_card_no").setAttribute("type", "text");
    document.getElementById("id_card_no").setAttribute("data-minlength", "10");
    document
      .getElementById("id_card_no")
      .setAttribute("placeholder", "RKCS17878A");
    document
      .getElementById("id_card_no")
      .setAttribute("data-error", "Enter 10 Character Valid Pan Card No");
  } else if (val == 4) {
    document.getElementById("id_card_no").setAttribute("type", "text");
    document.getElementById("id_card_no").setAttribute("data-minlength", "16");
    document
      .getElementById("id_card_no")
      .setAttribute("placeholder", "RJ29 20210040869");
    document
      .getElementById("id_card_no")
      .setAttribute(
        "data-error",
        "Enter 16 Character(include space) Valid Licence Number"
      );
  }
}

function fetch_price(val) {
  $.ajax({
    type: "post",
    url: "ajax.php",
    data: {
      room_id: val,
      room_price: "",
    },
    success: function (response) {
      $("#price").html(response);
      var days = document.getElementById("staying_day").innerHTML;
      $("#total_price").html(response * days);
    },
  });
}

$(document).on("click", "#unbookbutton", function (e) {
  e.preventDefault();
  var room_id = $(this).data("id");

  $(document).on("click", "#unbookModalbutton", function () {
    console.log("hello");
    console.log(room_id);
    $.ajax({
      type: "get",
      url: "crud.php",
      data: {
        room_id: room_id,
      },
      success: function (response) {
        if (response == "unbook") {
          window.location = "index.php";
        } else {
          $(".edit_response").html(
            '<div class="alert bg-danger alert-dismissable" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em>' +
              response.data +
              "</div>"
          );
        }
      },
    });
  });
});

$(document).on("click", "#customerDetails", function (e) {
  e.preventDefault();

  var room_id = $(this).data("id");
  // alert(room_id);
  console.log(room_id);

  $.ajax({
    type: "post",
    url: "ajax.php",
    dataType: "JSON",
    data: {
      room_id: room_id,
      customerDetails: "",
    },
    success: function (response) {
      if (response.done == true) {
        $("#customer_full_name").html(response.full_name);
        $("#customer_contact_no").html(response.contact_no);
        $("#customer_email").html(response.email);
        $("#customer_address").html(response.address);
        $("#customer_id_card").html(response.id_card);
        $("#customer_id_number").html(response.id_number);
        $("#customer_number_adult").html(response.number_adult);
        $("#customer_number_child").html(response.number_child);
        $("#customer_check_in").html(response.check_in);
        $("#customer_check_out").html(response.check_out);
      } else {
        $(".edit_response").html(
          '<div class="alert bg-danger alert-dismissable" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em>' +
            response.data +
            "</div>"
        );
      }
    },
  });
});

$(document).on("click", "#checkInRoom", function (e) {
  e.preventDefault();

  var room_id = $(this).data("id");

  $.ajax({
    type: "post",
    url: "ajax.php",
    dataType: "JSON",
    data: {
      room_id: room_id,
      booked_room: "",
    },
    success: function (response) {
      if (response.done == true) {
        $("#room_id").val(room_id);
        $("#getCustomerName").html(response.name);
        $("#getRoomType").html(response.room_type);
        $("#getRoomNo").html(response.room_no);
        $("#getCheckIn").html(response.check_in);
        $("#getCheckOut").html(response.check_out);
        $("#getTotalPrice").html(response.total_price + "/-");
        $("#getBookingID").val(response.booking_id);
        $("#checkIn").modal("show");
      } else {
        alert(response.data);
      }
    },
  });
});

$(document).on("click", "#checkOutRoom", function (e) {
  e.preventDefault();

  var room_id = $(this).data("id");

  $.ajax({
    type: "post",
    url: "ajax.php",
    dataType: "JSON",
    data: {
      room_id: room_id,
      booked_room: "",
    },
    success: function (response) {
      if (response.done == true) {
        $("#getCustomerName_n").html(response.name);
        $("#getRoomType_n").html(response.room_type);
        $("#getRoomNo_n").html(response.room_no);
        $("#getCheckIn_n").html(response.check_in);
        $("#getCheckOut_n").html(response.check_out);
        $("#getTotalPrice_n").html(response.total_price + "/-");
        $("#getRemainingPrice_n").html(response.remaining_price + "/-");
        $("#getBookingId_n").val(response.booking_id);
        $("#checkOut").modal("show");
      } else {
        alert(response.data);
      }
    },
  });
});

$("#checkOutRoom_n").submit(function () {
  var booking_id = $("#getBookingId_n").val();
  var remaining_amount = $("#remaining_amount").val();

  console.log(booking_id);

  $.ajax({
    type: "post",
    url: "ajax.php",
    dataType: "JSON",
    data: {
      booking_id: booking_id,
      remaining_amount: remaining_amount,
      check_out_room: "",
    },
    success: function (response) {
      if (response.done == true) {
        $("#checkIn").modal("hide");
        window.location.href = "index.php?room_mang";
      } else {
        $(".checkout-response").html(
          '<div class="alert bg-danger alert-dismissable" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em>' +
            response.data +
            "</div>"
        );
      }
    },
  });

  return false;
});

$("#addEmployee").submit(function () {
  var staff_type = $("#staff_type").val();
  var shift = $("#shift").val();
  var first_name = $("#first_name").val();
  var last_name = $("#last_name").val();
  var contact_no = $("#contact_no").val();
  var id_card_id = $("#id_card_id").val();
  var id_card_no = $("#id_card_no").val();
  var address = $("#address").val();
  var salary = $("#salary").val();

  console.log(staff_type + shift);
  $.ajax({
    type: "post",
    url: "ajax.php",
    dataType: "JSON",
    data: {
      staff_type: staff_type,
      shift: shift,
      first_name: first_name,
      last_name: last_name,
      contact_no: contact_no,
      id_card_id: id_card_id,
      id_card_no: id_card_no,
      address: address,
      salary: salary,
      add_employee: "",
    },
    success: function (response) {
      if (response.done == true) {
        document.getElementById("addEmployee").reset();
        $(".emp-response").html(
          '<div class="alert bg-success alert-dismissable" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em>Employee Successfully Added</div>'
        );
      } else {
        $(".emp-response").html(
          '<div class="alert bg-danger alert-dismissable" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em>' +
            response.data +
            "</div>"
        );
      }
    },
  });

  return false;
});

$("#edit_employee").submit(function () {
  var staff_type = $("#staff_type").val();
  var shift = $("#shift").val();
  var first_name = $("#first_name").val();
  var last_name = $("#last_name").val();
  var contact_no = $("#contact_no").val();
  var id_card_id = $("#id_card_id").val();
  var id_card_no = $("#id_card_no").val();
  var joining_date = $("#joining_date").val();
  var address = $("#address").val();
  var salary = $("#salary").val();

  //alert(first_name);
  $.ajax({
    type: "post",
    url: "ajax.php",
    dataType: "JSON",
    data: {
      staff_type: staff_type,
      shift: shift,
      first_name: first_name,
      last_name: last_name,
      contact_no: contact_no,
      id_card_id: id_card_id,
      id_card_no: id_card_no,
      joining_date: joining_date,
      address: address,
      salary: salary,
      add_employee: "",
    },
    success: function (response) {
      alert("Employee Added Successfully");
      document.getElementById("add_employee").reset();
      /* if (response.done == true) {
           $('#getCustomerName').html(first_name+' '+last_name);
           $('#getRoomType').html(room_type);
           $('#getRoomNo').html(room_no);
           $('#getCheckIn').html(check_in_date);
           $('#getCheckOut').html(check_out_date);
           $('#getTotalPrice').html(total_price);
           $('#getPaymentStaus').html("Unpaid");
           $('#bookingConfirm').modal('show');
           document.getElementById("booking").reset();
           } else {
           $('.response').html('<div class="alert bg-danger alert-dismissable" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em>' + response.data + '</div>');
           }*/
    },
  });

  return false;
});

$(document).on("click", "#complaint", function (e) {
  e.preventDefault();

  var complaint_id = $(this).data("id");
  console.log(complaint_id);
  $("#complaint_id").val(complaint_id);
});

$(document).on("click", "#change_shift", function (e) {
  e.preventDefault();

  var emp_id = $(this).data("id");
  console.log(emp_id);
  $("#getEmpId").val(emp_id);
});

$(".editbtn").on("click", function () {
  $("#editmodal").modal("show");

  $tr = $(this).closest("tr");

  var data = $tr
    .children("td")
    .map(function () {
      return $(this).text();
    })
    .get();

  console.log(data);

  $("#update_id").val(data[0]);
  $("#room_type_id").val(data[1]);
  $("#edit_room_number").val(data[2]);
  $("#edit_room_type").val(data[3]);
});

$(".deletebtn").on("click", function () {
  $("#deletemodal").modal("show");

  $tr = $(this).closest("tr");

  var data = $tr
    .children("td")
    .map(function () {
      return $(this).text();
    })
    .get();

  console.log(data);

  $("#delete_id").val(data[0]);
});

$(document).ready(function () {
  $(".messagedeletebtn").on("click", function () {
    $("#deletemodal").modal("show");

    $tr = $(this).closest("tr");

    var data = $tr
      .children("td")
      .map(function () {
        return $(this).text();
      })
      .get();

    console.log(data);

    $("#delete_id").val(data[0]);
  });
});

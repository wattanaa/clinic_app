$(function () {
    $(".patient").addClass("active");
    $(".patient ul").addClass("show ");

    var datatable = $(".table").DataTable({
        language: {
            paginate: {
                next: "<i class='fa-solid fa-angles-right'></i>",
                previous: "<i class='fa-solid fa-angles-left'></i>",
            },
        },
        lengthChange: false,
        pageLength: 15,
        search: {
            caseInsensitive: true,
        },
        columnDefs: [
            { orderable: false, targets: 4 },
        ],
    });

    $("#search_name").on("keyup", function () {
        datatable.column([0,2]).search(this.value).draw();
    });
    $("#search_position").on("keyup", function () {
        datatable.column(5).search(this.value).draw();
    });
    $("#search_status").on("change", function () {
        regex = "\\b" + this.value + "\\b";
        datatable.column(6).search(regex, true, false).draw();
    });

    // Model Delete
    $(".table tbody").on("click", ".dropdown-menu li .btn-delete", function () {
        console.log(555);
        let id = $(this).attr("data-id");
        $("#delete_employee_id").val(id);
    });
});

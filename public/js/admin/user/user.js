$(function () {
    $(".user").addClass("active");
    $(".user ul").addClass("show ");
    $(".user a.menu-item-user").addClass("active");

    var datatable = $(".table").DataTable({
        language: {
            paginate: {
                next: "<i class='fa-solid fa-angles-right'></i>",
                previous: "<i class='fa-solid fa-angles-left'></i>",
            },
        },
        lengthMenu: [5, 10, 15, 20, 30, 50, 100],
        search: {
            caseInsensitive: true,
        },
        columnDefs: [
            { orderable: false, targets: 1 },
            { orderable: false, targets: 2 },
            { orderable: false, targets: 3 },
            { orderable: false, targets: 4 },
            { orderable: false, targets: 6 }
        ],
    });

    $("#search_name").on("keyup", function () {
        datatable.column([0,2]).search(this.value).draw();
    });
    $("#search_role").on("keyup", function () {
        datatable.column(4).search(this.value).draw();
    });
    $("#search_status").on("change", function () {
        regex = "\\b" + this.value + "\\b";
        datatable.column(5).search(regex, true, false).draw();
    });

    // Model Delete
    $(".table tbody").on("click", ".dropdown-menu li .btn-delete", function () {
        console.log(555);
        let id = $(this).attr("data-id");
        $("#delete_user_id").val(id);
    });

    $(".table tbody").on("click", ".dropdown-menu li .btn-edit", function () {
        let id = $(this).attr("data-id");
        let _this = $(this).parents('tr');
        $("#e_user_id").val(id);
        $("#e_user_name").val(_this.find('.user_name').text());
        $("#e_user_email").val(_this.find('.user_email').text());
        $(`#e_user_role option[value=${_this.find('.user_role').text()}]`).prop("selected", true)
        if(_this.find('.user_status a').text() == ' Inactive') {
            $("#e_user_status option[value='0']").prop("selected", true)
        }else if(_this.find('.user_status a').text() == ' Active') {
            $("#e_user_status option[value='1']").prop("selected", true)
        }
        $("#e_old_image").val(_this.find('.user_image').attr('alt'));
        $(".image-output").attr('src',_this.find('.user_image').attr('src'));

    });
});

$(document).ready(function () {
    // Inisialisasi DataTable biasa
    $("#datatable").DataTable();

    // Inisialisasi DataTable dengan tombol export
    var table = $("#datatable-buttons").DataTable({
        lengthChange: false,
        buttons: ["copy", "excel", "pdf", "colvis"],
        language: {
            emptyTable: "Belum ada data."
        }
    });

    // Pindahkan container tombol ke tempat yang sesuai
    table.buttons().container()
        .appendTo("#datatable-buttons_wrapper .col-md-6:eq(0)");

    // Tambahkan class Bootstrap ke dropdown panjang data
    $(".dataTables_length select").addClass("form-select form-select-sm");
});

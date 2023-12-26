<!--   Core JS Files   -->
<script src="<?= base_url('assets/admin/') ?>js/core/jquery.3.2.1.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>js/core/popper.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>js/core/bootstrap.min.js"></script>
<!-- jQuery UI -->
<script src="<?= base_url('assets/admin/') ?>js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
<!-- Sweet Alert -->
<script src="<?= base_url('assets/admin/') ?>js/plugin/sweetalert/sweetalert.min.js"></script>

<!-- jQuery Scrollbar -->
<script src="<?= base_url('assets/admin/') ?>js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<!-- Datatables -->
<script src="<?= base_url('assets/admin/') ?>js/plugin/datatables/datatables.min.js"></script>
<!-- Atlantis JS -->
<script src="<?= base_url('assets/admin/') ?>js/atlantis.min.js"></script>

<script>
    $(document).ready(function() {
        $("#basic-datatables").DataTable({});
    });
</script>

<script>
    $(document).ready(function() {
        // Menggunakan class 'currency-input' sebagai selector
        $('.currency-input').on('input', function() {
            // Mengambil nilai input
            let inputValue = $(this).val();
            // Menghapus karakter non-angka
            inputValue = inputValue.replace(/[^0-9]/g, '');
            // Format angka sebagai mata uang
            let formattedValue = formatCurrency(inputValue);
            // Memasukkan kembali nilai yang telah diformat ke dalam input
            $(this).val(formattedValue);
        });

        $('.currency-input').each(function() {
            // Mengambil nilai input dari atribut value
            let inputValue = $(this).val();
            // Memformat nilai sebagai mata uang
            let formattedValue = formatCurrency(inputValue);
            // Memasukkan kembali nilai yang telah diformat ke dalam input
            $(this).val(formattedValue);
        });
    });

    // Fungsi untuk format currency
    function formatCurrency(value) {
        // Menggunakan metode toLocaleString() untuk format currency
        return parseInt(value).toLocaleString('id-ID');
    }
</script>

<script>
    $(document).ready(function() {

        // Menghentikan tautan dari navigasi langsung
        $('.btn-hapus').on('click', function(event) {
            event.preventDefault();
            var href = $(this).attr('href');

            // Menampilkan dialog konfirmasi SweetAlert
            swal({
                title: 'Yakin?',
                text: "Akan menghapus data ini secara permanen!",
                icon: 'warning',
                buttons: {
                    confirm: {
                        text: 'Yes, delete it!',
                        className: 'btn btn-success'
                    },
                    cancel: {
                        visible: true,
                        className: 'btn btn-danger'
                    }
                }
            }).then((willDelete) => {
                if (willDelete) {
                    // Jika pengguna mengkonfirmasi logout, arahkan ke URL logout
                    window.location.href = href;
                }
            });
        });

    });
</script>

<?php
if ($this->session->flashdata('success')) { ?>
    <script>
        var successMessage = <?php echo json_encode($this->session->flashdata('success')); ?>;
        $(document).ready(function() {
            swal("Selamat!", successMessage, "success");
        });
    </script>
<?php } else if ($this->session->flashdata('warning')) { ?>
    <script>
        var warningMessage = <?php echo json_encode($this->session->flashdata('warning')); ?>;
        $(document).ready(function() {

            swal("Oops!", warningMessage, "warning");
        });
    </script>
<?php } else if ($this->session->flashdata('error')) { ?>
    <script>
        var errorMessage = <?php echo json_encode($this->session->flashdata('error')); ?>;
        $(document).ready(function() {

            swal("Gagal!", errorMessage, "error");
        });
    </script>
<?php } ?>

<form action="{{ url('/level/ajax') }}" method="POST" id="form-tambah">
    @csrf
    <div id="modal-master" class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data level</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>


                <div class="form-group">
                    <label>Kode</label>
                    <input type="text" name="level_kode" id="level_kode" class="form-control" required>
                    <small id="error-level_kode" class="error-text form-text text-danger"></small>
                </div>

                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="level_nama" id="level_nama" class="form-control" required>
                    <small id="error-level_nama" class="error-text form-text text-danger"></small>
                </div>


            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-warning">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</form>

<script>
$(document).ready(function () {
    $('#form-tambah').validate({
        rules: {
            level_kode: {
                required: true
            },
            level_nama: {
                required: true
            },
        },
        messages: {
            level_kode: {
                required: "Kode harus diisi"
            },
            level_nama: {
                required: "Nama harus diisi"
            },
            
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        },
        submitHandler: function (form) {
            // Tambahkan log untuk memastikan submitHandler terpanggil
            console.log('Submit handler triggered');
            
            // Perubahan kecil untuk ajax request
            $.ajax({
                type: "POST",
                url: "/level/ajax", // Pastikan URL endpoint benar
                data: $(form).serialize(), // Serialisasi data form
                dataType: "json",
                success: function (response) {
                    // Tambahkan log untuk memastikan respon diterima
                    console.log('Response received:', response);

                    if (response.success) {
                        // Jika berhasil, bisa lakukan sesuatu
                        alert("Data berhasil disimpan!");
                        // Refresh atau redirect sesuai kebutuhan
                    } else {
                        // Jika terjadi error
                        alert("Gagal menyimpan data.");
                    }
                },
                error: function (xhr, status, error) {
                    // Tangani error jika request ajax gagal
                    console.log('Error occurred:', xhr, status, error);
                    alert("Terjadi kesalahan saat menyimpan data.");
                }
            });
        }
    });
});

</script>

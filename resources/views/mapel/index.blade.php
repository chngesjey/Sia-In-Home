@extends ('layout.app')

@section('title')
    Mapel
@endsection

@section('content')

     <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Daftar Isi Mapel</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">Daftar Isi Mapel</li>
                                </ol>
                            </div>
                        </div>
                    </div>
        </section> 

        <section class="content">

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Mapel</h3>
                            <div class="card-tools">
                                <button type="button" onclick="addForm(('{{route('mapel.index')}}'))" class="btn btn-tool">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                        </div>

                        <div class="card-body">
                            <table class="table table-hover-text-nowrap" style=>
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Mapel</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
        </section> 
        @includeIf('mapel.form')
@endsection

@push('script')
<script>

    let table;

    $(function() {
        table = $('.table').DataTable( {
            proccesing : true,
            autowitdh: false,
            ajax: {
                url: '{{route('mapel.data') }}'
            },
            columns : [
                {data: 'DT_RowIndex'},
                {data: 'nama'},
                {data: 'aksi'}
            ]
        });
    })

    $('#modalForm').on('submit', function(e){
        if(! e.preventDefault()){
            $.post($('#modalForm form').attr('action'), $('#modalForm form').serialize())
            .done((response) => {
                $('#modalForm').modal('hide');
                $('#modalForm form')[0].reset();
                table.ajax.reload();
                // Menambahkan Alert Ketceh Dari iziToast
                iziToast.success({
                    title: 'Sukses Dek',
                    message: 'Data Berhasil Di-Simpan Dek',
                    position: 'topRight'
                })
            })
            .fail((errors) => {
                iziToast.error({
                    title: 'Gagal Dek',
                    message: 'Data Gagal Di-Simpan Dek',
                    position: 'topRight'
                })
                return;
            })
        }
    })

    function addForm(url){
        $('#modalForm').modal('show');
        $('#modalForm .modal-title').text('Tambah Data Mapel');
        // Reset Search Dengan Tidak Reload
        $('#modalForm form')[0].reset(); 

        $('#modalForm form').attr('action', url);
        $('#modalForm [name=_method]').val('post');
        // Merubah Tanpa Nge-Reload
        table.ajax.reload();
    }

    function editData(url){
        $('#modalForm').modal('show');
        $('#modalForm .modal-title').text('Edit Data Mapel');

        // Mereset Setelah Memencet Submit
        $('#modalForm form')[0].reset();
        $('#modalForm form').attr('action', url);
        $('#modalForm [name=_method').val('put');

        $.get(url)
        .done((response) => {
            $('#modalForm [name=nama]').val(response.nama);
        })
        .fail((errors) => {
            alert('Tidak Dapat Menampilkan Data');
            return;
        })
    }

    function deleteData(url) {
        // Menambahkan Alert Seperti Di Web Side SweetAlert 
        swal({
            title: "Yakin Dek Ingin Hapus?",
            text: "Jika Adek Klik Oke! Maka Data Akan Terhapus",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                $.post(url, {
                    '_token' : $('[name = csrf-token]').attr('content'),
                    '_method' : 'delete'
            })            
            .done((response) => {
                swal({
                    title: "Sukses Dek!",
                    text: "Data Berhasil Dihapus",
                    icon: "success",
                });
                    return;
            })
            .fail((errors) => {
                swal({
                    title: "Gagal Dek!",
                    text: "Data Gagal Dihapus",
                    icon: "error",
                });
                    return;
            });

            table.ajax.reload();
        }
    });
}
</script>
@endpush
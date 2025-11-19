<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Book</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Book</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<!-- Main content -->
<section class="content">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">List of Books</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-md btn-primary" onclick="tambahBuku()">
                    Add Book
                </button>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-sm table-bordered table-striped" id="table-buku">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Book Code</th>
                        <th>Book Title</th>
                        <th>Author</th>
                        <th>Publisher</th>
                        <th>Category</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="form-buku" tabindex="-1" role="dialog" aria-hidden="true">
    <form action="action/bukuAction.php?act=save" method="post" id="form-plus-buku">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Book</h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="buku_id" name="buku_id" value="">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Book Code</label>
                                <input type="text" class="form-control" id="buku_kode" name="buku_kode">
                            </div>

                            <div class="form-group">
                                <label>Author</label>
                                <input type="text" class="form-control" id="buku_penulis" name="buku_penulis">
                            </div>

                            <div class="form-group">
                                <label>Category</label>
                                <select class="form-control" id="kategori_id" name="kategori_id"></select>
                            </div>
                        </div>

                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Book Title</label>
                                <input type="text" class="form-control" id="buku_judul" name="buku_judul">
                            </div>

                            <div class="form-group">
                                <label>Publisher</label>
                                <input type="text" class="form-control" id="buku_penerbit" name="buku_penerbit">
                            </div>

                        </div>
                    </div>

                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary" id="saveBtnBuku">Save</button>
                </div>
            </div>
        </div>
    </form>
</div>

<script>
    var tableBuku;

    function tambahBuku(){
        $('#form-buku').modal('show');
        $('#form-plus-buku').attr('action', 'action/bukuAction.php?act=save');

        $('#buku_id').val('');
        $('#buku_kode').val('');
        $('#buku_judul').val('');
        $('#buku_penulis').val('');
        $('#buku_penerbit').val('');

        loadKategoriList();
    }

    function editBuku(id){
        $.ajax({
            url: 'action/bukuAction.php?act=get&id='+id,
            method: 'post',
            success: function(response){
                var data = JSON.parse(response);

                $('#form-buku').modal('show');
                $('#form-plus-buku').attr('action', 'action/bukuAction.php?act=update&id='+id);

                $('#buku_id').val(data.buku_id);
                $('#buku_kode').val(data.buku_kode);
                $('#buku_judul').val(data.buku_judul);
                $('#buku_penulis').val(data.buku_penulis);
                $('#buku_penerbit').val(data.buku_penerbit);

                loadKategoriList(data.kategori_id);
            }
        });
    }

    function deleteBuku(id){
        if(confirm('Are you sure you want to delete this book?')){
            $.ajax({
                url: 'action/bukuAction.php?act=delete&id='+id,
                method: 'post',
                success: function(response){
                    var result = JSON.parse(response);
                    if(result.status){
                        tableBuku.ajax.reload();
                    }else{
                        alert(result.message);
                    }
                }
            });
        }
    }

    function loadKategoriList(selected = null){
        $.ajax({
            url: 'action/kategoriAction.php?act=load',
            method: 'get',
            success: function(res){
                var data = JSON.parse(res).data;

                $('#kategori_id').html('');

                data.forEach(function(item){
                    let kode = item[1];
                    let nama = item[2];

                    $('#kategori_id').append(
                        '<option value="'+item[0]+'">'+nama+'</option>'
                    );
                });

                if(selected !== null){
                    $('#kategori_id').val(selected);
                }
            }
        });
    }

    $(document).ready(function(){
        tableBuku = $('#table-buku').DataTable({
            ajax: 'action/bukuAction.php?act=load',
            columns: [
                { data: 0 },
                { data: 1 },
                { data: 2 },
                { data: 3 },
                { data: 4 },
                { data: 5 },
                { data: 6 }
            ]
        });

        $('#form-plus-buku').validate({
            rules: {
                buku_kode: { required: true },
                buku_judul: { required: true },
                buku_penulis: { required: true },
                buku_penerbit: { required: true }
            },
            errorElement: 'span',
            errorPlacement: function(error, element){
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function(element){
                $(element).addClass('is-invalid');
            },
            unhighlight: function(element){
                $(element).removeClass('is-invalid');
            },
            submitHandler: function(form){
                $.ajax({
                    url: $(form).attr('action'),
                    method: 'post',
                    data: $(form).serialize(),
                    success: function(response){
                        var result = JSON.parse(response);
                        if(result.status){
                            $('#form-buku').modal('hide');
                            tableBuku.ajax.reload();
                        } else {
                            alert(result.message);
                        }
                    }
                });
            }
        });
    });
</script>

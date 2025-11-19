<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Book Category</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Category</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<!-- Main content -->
<section class="content">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">List of Book Categories</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-md btn-primary" onclick="tambahData()">
                    Add
                </button>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-sm table-bordered table-striped" id="table-data">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Category Code</th>
                        <th>Category Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="form-data" tabindex="-1" role="dialog" aria-hidden="true">
    <form action="action/kategoriAction.php?act=save" method="post" id="form-plus">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Category</h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="kategori_id" name="kategori_id" value="">
                    <div class="form-group">
                        <label>Category Code</label>
                        <input type="text" class="form-control" name="kategori_kode" id="kategori_kode">
                    </div>
                    <div class="form-group">
                        <label>Category Name</label>
                        <input type="text" class="form-control" name="kategori_nama" id="kategori_nama">
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary" id="saveBtn">Save</button>
                </div>
            </div>
        </div>
    </form>
</div>

<script>
    var tableData;

    function tambahData(){
        $('#form-data').modal('show');
        $('#form-plus').attr('action', 'action/kategoriAction.php?act=save');
        $('#kategori_id').val('');
        $('#kategori_kode').val('');
        $('#kategori_nama').val('');
    }

    function editData(id){
        $.ajax({
            url: 'action/kategoriAction.php?act=get&id='+id,
            method: 'post',
            success: function(response){
                var data = JSON.parse(response);
                $('#form-data').modal('show');
                $('#form-plus').attr('action', 'action/kategoriAction.php?act=update&id='+id);
                $('#kategori_id').val(data.kategori_id || '');
                $('#kategori_kode').val(data.kategori_kode || '');
                $('#kategori_nama').val(data.kategori_nama || '');
            },
            error: function(e){
                alert('Failed to fetch data');
            }
        });
    }

    function deleteData(id){
        if(confirm('Are you sure?')){
            $.ajax({
                url: 'action/kategoriAction.php?act=delete&id='+id,
                method: 'post',
                success: function(response){
                    var result = JSON.parse(response);
                    if(result.status){
                        tableData.ajax.reload();
                    }else{
                        alert(result.message);
                    }
                },
                error: function(){
                    alert('Delete request failed');
                }
            });
        }
    }

    $(document).ready(function(){
        tableData = $('#table-data').DataTable({
            ajax: 'action/kategoriAction.php?act=load',
            columns: [
                { data: 0 },
                { data: 1 },
                { data: 2 },
                { data: 3 }
            ]
        });

        $('#form-plus').validate({
            rules: {
                kategori_kode: {
                    required: true,
                    minlength: 1
                },
                kategori_nama: {
                    required: true,
                    minlength: 3
                }
            },
            errorElement: 'span',
            errorPlacement: function(error, element){
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function(element, errorClass, validClass){
                $(element).addClass('is-invalid');
            },
            unhighlight: function(element, errorClass, validClass){
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
                            $('#form-data').modal('hide');
                            tableData.ajax.reload();
                        }else{
                            alert(result.message);
                        }
                    },
                    error: function(){
                        alert('Request failed');
                    }
                });
            }
        });
    });
</script>

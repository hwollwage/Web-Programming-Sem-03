$(document).ready(function() {
    $("#upload-form").submit(function(e) {
        e.preventDefault();

        var formdata = new FormData(this);

        $.ajax({
            type: "POST",
            url: "upload_ajax.php",
            data: formdata,
            cache: false,
            contentType: false,
            processData: false,
            success: function(response) {
                $("#status").html(response);
            },
            error: function() {
                $("#status").html("Terjadi kesalahan saat mengunggah file.");
            }
        });
    });
});

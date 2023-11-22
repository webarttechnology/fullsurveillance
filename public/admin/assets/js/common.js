/**
 * Sweet Alert for Delete
 */

function commonDelete(type, id) {
    Swal.fire({
        icon: "warning",
        title: "Are you Sure, You Want To Delete This?",
        showDenyButton: true,
        showCancelButton: false,
        denyButtonText: `No`,
        confirmButtonText: "Yes",
    }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            if (type == "user") {
                window.location.href = "user-delete/" + id;
            }

            if (type == "vendor") {
                window.location.href = "vendor/delete/" + id;
            }

            if (type == "category") {
                window.location.href = "category/delete/" + id;
            }

            if (type == "sub-category") {
                window.location.href = "../delete/" + id;
            }

            if (type == "sub-sub-category") {
                window.location.href = "../../delete/" + id;
            }

            if(type == "product"){
                window.location.href = "./product/delete/" + id;
            }

        } else if (result.isDenied) {
            Swal.fire("Your Data is Safe Now", "", "info");
        }
    });
}

/**
 * Ck-editor
 */

function ckEditorCustom() {
    tinymce.init({
        selector: ".ckeditor",
        plugins: "image code",
        toolbar: "undo redo | link image | code",
        image_title: true,
        automatic_uploads: true,
        file_picker_types: "image",
        file_picker_callback: function (cb, value, meta) {
            var input = document.createElement("input");
            input.setAttribute("type", "file");
            input.setAttribute("accept", "image/*");

            input.onchange = function () {
                var file = this.files[0];

                var reader = new FileReader();
                reader.onload = function () {
                    var id = "blobid" + new Date().getTime();
                    var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                    var base64 = reader.result.split(",")[1];
                    var blobInfo = blobCache.create(id, file, base64);
                    blobCache.add(blobInfo);
                    cb(blobInfo.blobUri(), { title: file.name });
                };
                reader.readAsDataURL(file);
            };
            input.click();
        },
        content_style:
            "body { font-family:Helvetica,Arial,sans-serif; font-size:14px }",
    });
}

ckEditorCustom();
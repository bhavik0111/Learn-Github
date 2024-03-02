$(document).ready(function () {
    // RESOURCE CONFIRMATION MODAL
    $(document).on("click", ".resource-modal-action", function (e) {
        e.preventDefault();
        $("#resource_confirmation_modal form").attr(
            "action",
            $(this).attr("href")
        );
        $("#resource_confirmation_modal").modal("show");
    });

    // PERMISSIONS
    $(document).on("change", ".check-all-permissions", function () {
        if ($(this).prop("checked") == true) {
            $('input[name="permissions[]"]').prop("checked", true);
        } else {
            $('input[name="permissions[]"]').prop("checked", false);
        }
    });

    // TABLES
    $(document).on("change", ".per_page", function () {
        $(".table-search-form:first").submit();
    });

    // Section Meta Boxes
    $(document).on("click", ".btn-add-metabox-section", function () {
        let html = "";
        html += '<div class="card-body metabox-item">';
        html += '<div class="mb-3 text-end">';
        html +=
            '<button type="button" class="btn btn-danger p-2 btn-remove-metabox-section"><i class="fa fa-minus"></i></button>';
        html += "</div>";
        html += '<div class="form-group mb-3 row">';
        html += '<label class="col-2 col-form-label">Title</label>';
        html += '<div class="col">';
        html +=
            '<input type="text" name="metabox[title][]" class="form-control" placeholder="Enter Title" required autofocus>';
        html += "</div>";
        html += "</div>";
        html += '<div class="form-group mb-3 row">';
        html += '<label class="col-2 col-form-label">Description</label>';
        html += '<div class="col">';
        html +=
            '<textarea name="metabox[description][]" rows="4" class="form-control tinymce-text-editor" placeholder="Enter Description"></textarea>';
        html += "</div>";
        html += "</div>";
        html += '<div class="form-group mb-3 row">';
        html += '<label class="col-2 col-form-label">Image</label>';
        html += '<div class="col">';
        html +=
            '<input type="file" name="metabox[image][]" class="form-control">';
        html += "</div>";
        html += "</div>";
        html += '<div class="form-group mb-3 row">';
        html += '<label class="col-2 col-form-label">Order By</label>';
        html += '<div class="col">';
        html +=
            '<input type="text" name="metabox[order_by][]" class="form-control" placeholder="Enter Order">';
        html += "</div>";
        html += "</div>";
        html += '<div class="form-group mb-3 row">';
        html += '<label class="col-2 col-form-label">Status</label>';
        html += '<div class="col">';
        html +=
            '<select name="metabox[status][]" class="form-control" required>';
        html += '<option value="1">Active</option>';
        html += '<option value="0" selected="selected">Inactive</option>';
        html += "</select>";
        html += "</div>";
        html += "</div>";
        html += "</div>";
        $(".metabox-section").append(html);
        initializeTinyMceTextEditor();
    });

    $(document).on("click", ".btn-remove-metabox-section", function () {
        $(this).parents(".metabox-item").remove();
    });

    
    // Solutions
    $(document).on("click", ".btn-add-solution-section", function () {
        let html = "";
        html += `
            <div class="solution-item">
                <div class="card-body">
                    <div class="form-group mb-3 row">
                        <label class="col-2 col-form-label">Title</label>
                        <div class="col">
                            <input type="text" name="solution[title][]" class="form-control" placeholder="Enter Title">
                        </div>
                    </div>
                    <div class="form-group mb-3 row">
                        <label class="col-2 col-form-label">Sub Title</label>
                        <div class="col">
                            <input type="text" name="solution[sub_title][]" class="form-control" placeholder="Enter Sub Title">
                        </div>
                    </div>
                    <div class="form-group mb-3 row">
                        <label class="col-2 col-form-label">Description</label>
                        <div class="col">
                            <textarea name="solution[description][]" rows="4" class="form-control tinymce-text-editor" placeholder="Enter Description"></textarea>
                        </div>
                    </div>
                    <div class="form-group mb-3 row">
                        <label class="col-2 col-form-label">Attachment</label>
                        <div class="col">
                            <input type="file" name="solution[attachment][]" class="form-control" required accept="video/mp4,video/*">
                        </div>
                    </div>
                    <div class="form-group mb-3 row">
                        <label class="col-2 col-form-label">Status</label>
                        <div class="col">
                            <select name="solution[status][]" class="form-control" required>
                                <option value="0">Inactive</option>
                                <option value="1">Active</option>
                            </select>
                        </div>
                    </div>
                    <div class="text-end">
                        <button type="button" class="btn btn-danger p-2 btn-remove-solution-section"><i class="fa fa-minus"></i></button>
                    </div>
                </div>
                <hr class="m-0">
            </div>
        `;
        $('.solution-section').append(html);
        initializeTinyMceTextEditor();
    });

    $(document).on('click','.btn-remove-solution-section',function(){
        $(this).parents(".solution-item").remove();
    });

    initializeTinyMceTextEditor();
    initializeSelect2Element();

    // Add the CSRF token to the headers of every AJAX request
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
});


/* Tiny MCE Text Editor */
function initializeTinyMceTextEditor(element = ".tinymce-text-editor") {
    let options = {
        selector: ".tinymce-text-editor",
        height: 250,
        menubar: false,
        statusbar: false,
        automatic_uploads: true,
        file_picker_types: "image",
        plugins: [
            /* "advlist autolink lists link image charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table paste code help wordcount", */
            "code","lists"
        ],
        toolbar:
            "undo redo | formatselect | " +
            "bold italic backcolor | alignleft aligncenter " +
            "alignright alignjustify | bullist numlist outdent indent | " +
            "removeformat | h1 h2 h3 h4 h5 | code",
        content_style:
            "body { font-family: -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif; font-size: 14px; -webkit-font-smoothing: antialiased; }",
        file_picker_callback: function (cb, value, meta) {
            var input = document.createElement("input");
            input.setAttribute("type", "file");
            input.setAttribute("accept", "image/*");
            /*
                Note: In modern browsers input[type="file"] is functional without
                even adding it to the DOM, but that might not be the case in some older
                or quirky browsers like IE, so you might want to add it to the DOM
                just in case, and visually hide it. And do not forget do remove it
                once you do not need it anymore.
            */

            input.onchange = function () {
                var file = this.files[0];

                var reader = new FileReader();
                reader.onload = function () {
                    /*
                    Note: Now we need to register the blob in TinyMCEs image blob
                    registry. In the next release this part hopefully won't be
                    necessary, as we are looking to handle it internally.
                    */
                    var id = "blobid" + new Date().getTime();
                    var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                    var base64 = reader.result.split(",")[1];
                    var blobInfo = blobCache.create(id, file, base64);
                    blobCache.add(blobInfo);
                };
                reader.readAsDataURL(file);
            };

            input.click();
        },
    };
    tinyMCE.init(options);
}

/* Select2 Element */
function initializeSelect2Element(element = ".select2-element") {
    $(element).select2();
}

function success_message(message = "Success", duration = 3000) {
    Toastify({
        text: message,
        duration: duration,
        close: true,
        backgroundColor: "#198754",
        gravity: "top",
        position: "center",
    }).showToast();
}

function error_message(message = "Something Went Wrong !!", duration = 3000) {
    Toastify({
        text: message,
        duration: duration,
        close: true,
        backgroundColor: "#dc3545",
        gravity: "top",
        position: "center",
    }).showToast();
}
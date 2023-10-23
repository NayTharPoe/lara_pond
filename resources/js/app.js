import "./bootstrap";
import * as FilePond from "filepond";
import "filepond/dist/filepond.min.css";
import FilePondPluginImagePreview from "filepond-plugin-image-preview";
import "filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css";

FilePond.registerPlugin(FilePondPluginImagePreview);

const inputElement = document.querySelector("input[type='file']");
FilePond.create(inputElement);
const csrfToken = document
    .querySelector('meta[name="csrf-token"]')
    .getAttribute("content");

FilePond.setOptions({
    server: {
        process: "/tmp-upload",
        revert: "/tmp-delete",
        headers: {
            "X-CSRF-TOKEN": csrfToken,
        },
    },
});

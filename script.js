// script.js

// Upload APK file
function uploadApk() {
    const apkFile = document.getElementById('apkFile').files[0];
    const message = document.getElementById('message');

    if (!apkFile) {
        message.textContent = "Please select an APK file to upload.";
        return;
    }

    const formData = new FormData();
    formData.append("apkFile", apkFile);

    const xhr = new XMLHttpRequest();
    xhr.open("POST", "upload.php", true);

    xhr.onload = function () {
        if (xhr.status === 200) {
            message.textContent = xhr.responseText;
        } else {
            message.textContent = "File upload failed.";
        }
    };
    xhr.send(formData);
}

// Download APK file
function downloadApk() {
    window.location.href = "download.php";
}

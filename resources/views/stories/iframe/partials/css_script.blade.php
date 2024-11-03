<style>
    .form-group {
        margin-bottom: 15px;
    }

    .series_cover {
        border: 2px dashed #ddd;
        padding: 20px;
        text-align: center;
        cursor: pointer;
        position: relative;
    }

    .series_cover #drop a {
        display: inline-block;
        padding: 10px 20px;
        color: #fff;
        background-color: #007bff;
        text-decoration: none;
        border-radius: 5px;
        font-weight: bold;
    }

    .series_cover #drop input[type="file"] {
        display: none;
    }

    .alert {
        margin-top: 10px;
    }

    #progress {
        margin-top: 10px;
    }

    .progress-bar {
        width: 0;
        transition: width 0.5s;
    }

    #SeriesCoverPreview {
        margin-top: 10px;
        display: none;
        max-height: 300px;
        max-width: 300px;
    }
</style>
<script>
document.addEventListener("DOMContentLoaded", function () {
const selectImageBtn = document.getElementById("selectImageBtn");
const fileInput = document.getElementById("fileInput");
const previewImg = document.getElementById("SeriesCoverPreview");
const progressBar = document.querySelector(".progress-bar");
const progressContainer = document.getElementById("progress");

// Khi click vào nút "Chọn ảnh", mở hộp thoại chọn file
selectImageBtn.addEventListener("click", function () {
    fileInput.click();
});

fileInput.addEventListener("change", function (e) {
    const file = e.target.files[0];
    if (file) {
        // Show the progress bar
        progressContainer.style.display = "block";
        progressBar.style.width = "0%";

        // Update preview image
        const reader = new FileReader();
        reader.onload = function (event) {
            previewImg.src = event.target.result;
            previewImg.style.display = "block";
        };
        reader.readAsDataURL(file);

        // Simulate a loading progress
        let loadProgress = 0;
        const progressInterval = setInterval(() => {
            loadProgress += 10;
            progressBar.style.width = `${loadProgress}%`;
            if (loadProgress >= 100) {
                clearInterval(progressInterval);
                progressContainer.style.display = "none";
            }
        }, 100);
    }
});
});

</script>

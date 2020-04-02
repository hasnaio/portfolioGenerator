<!DOCTYPE html>
<html>
<title>Image Upload</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style>

    .imagePreview {
        width:300px;
        min-height:100px;
        border:2px solid #dddddd;
        margin-top:15px;
        margin-left:10px;
        display:flex;
        align-items:center;
        justify-content:center;
        font-weight:bold;
        color: #cccccc;
    }

    .imagePreviewImage {
        display:none;
        width:100%;
    }

</style>
<body>

<header class="w3-container w3-teal">
  <h3>Image Upload</h3>
</header>


<div class="w3-container w3-margin-top w3-padding w3-display-middle w3-half">

    <form action="upload.php" method="POST" enctype="multipart/form-data" class="w3-container w3-card-4 w3-display-middle" >
    
    <p><input type="file" name="fileUpload" id="fileUpload" style="width:100%" required></p>

    <div class="imagePreview" id="imagePreview">
        <img src="" alt="image preview" class="imagePreviewImage">
    <span class="imagePreviewDefaultText">your image will be previewed here</span>
    </div>
    <p><button class="w3-button w3-section w3-teal w3-ripple" style="margin-left:110px;" type="submit" name="submit"> UPLOAD </button></p>

    <script>
        const fileUpload = document.getElementById("fileUpload");
        const previewContainer = document.getElementById("imagePreview");
        const previewImage = previewContainer.querySelector(".imagePreviewImage");
        const previewDefaultText = previewContainer.querySelector(".imagePreviewDefaultText");
        
        fileUpload.addEventListener("change", function() {
            const file = this.files[0];
            
            if (file) {
                const reader = new FileReader();

                previewDefaultText.style.display="none";
                previewImage.style.display="block";

                reader.addEventListener("load", function() {
                    console.log(this);
                    previewImage.setAttribute("src", this.result);
                    
                });

                reader.readAsDataURL(file);
            }
        });
    </script>

    </form>

    
    </div>

</body>
</html> 
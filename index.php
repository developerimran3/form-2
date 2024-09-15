<?php

if (file_exists(__DIR__ . "/autoload.php")) {
    require_once(__DIR__ . "/autoload.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <title>Form Managment</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

    <div class="container my-5">
        <div class="row justify-content-center my-5">
            <div class="col-md-5 my-5">
                <div class="card shadow">
                    <div class="card-header">
                        <h2 class="card-title"> Uplode Your File</h2>
                    </div>
                    <div class="card-body">
                        <form action="">
                            <div class="my-3">
                                <label for="">Name</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="my-3">
                                <label for="">Phone</label>
                                <input type="text" class="form-control" name="phone">
                            </div>
                            <div class="my-3">
                                <label for="">Profile Photo</label>
                                <label class="uploaded">
                                    <input type="file" id="profile-photo" class="form-control">
                                    <img id="profile-photo-icon" src="https://www.freeiconspng.com/uploads/pictures-icon-22.gif" alt="">
                                </label>
                                <div id="profile-photo-preview" class="preview-image">
                                    <img src="" alt="">
                                    <button id="profile-photo-close" class=" fa fa-times"></button>
                                </div>
                            </div>

                            <div class="my-3">
                                <input type="submit" value="Save" class="btn btn-success w-100">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const profilePhoto = document.getElementById("profile-photo");
        const profilePhotoPreview = document.getElementById("profile-photo-preview");


        profilePhoto.onchange = (event) => {

            const imageURL = URL.createObjectURL(event.target.files[0]);
            profilePhotoPreview.setAttribute('src',
                imageURL);

        };
    </script>
</body>

</html>
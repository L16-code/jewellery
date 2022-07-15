<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
        .text-font {
            font-size: 35px;
            font-weight: bolder;
        }

        .height {
            height: 100vh;
        }

        .error {
            color: red;
            font-size: large;

        }

        .success {
            color: green;
            font-size: large;

        }

        .error1 {
            color: red;
            font-size: large;

        }

        .success1 {
            color: green;
            font-size: large;

        }

        .error2 {
            color: red;
            font-size: large;

        }

        .success2 {
            color: green;
            font-size: large;

        }

        .hide {
            display: none;
        }
    </style>

</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2 bg-dark height">
                <p class="pt-5 pb-5 text-center">
                    <a href="admin-panel.php" class="text-decoration-none"><span class="text-light text-font">Admin</span></a>
                </p>
                <hr class="bg-light ">
                <p class="pt-2 pb-2 text-center">
                    <a href="admin-profile.php" class="text-decoration-none"><span class="text-light">Profile</span></a>
                </p>
                <hr class="bg-light ">
                <p class="pt-2 pb-2 text-center">
                    <a href="categories.php" class="text-decoration-none"><span class="text-light">Categories</span></a>
                </p>
                <hr class="bg-light ">
                <p class="pt-2 pb-2 text-center">
                    <a href="subcategories.php" class="text-decoration-none"><span class="text-light">Browse Categories</span></a>
                </p>
                <hr class="bg-light ">
                <p class="pt-2 pb-2 text-center">
                    <a href="products-add.php" class="text-decoration-none"><span class="text-light">Add Products</span></a>
                </p>
                <hr class="bg-light ">
                <p class="pt-2 pb-2 text-center">
                    <a href="products-display.php" class="text-decoration-none"><span class="text-light">View Products</span></a>
                </p>
                <hr class="bg-light ">
                <p class="pt-2 pb-2 text-center">
                    <a href="new-user-requests.php" class="text-decoration-none"><span class="text-light">New user requests</span></a>
                </p>
                <hr class="bg-light ">
                <p class="pt-2 pb-2 text-center">
                    <a href="view-users.php" class="text-decoration-none"><span class="text-light">View user</span></a>
                </p>
                <hr class="bg-light ">
                <p class="pt-2 pb-2 text-center">
                    <a href="display-orders.php" class="text-decoration-none"><span class="text-light">View Orders</span></a>
                </p>

            </div>
            <div class="col-sm-10 bg-light">
                <div class="row">
                    <div class="col-sm-2">
                        <p class="text-center pt-5">
                            <img class="rounded" src="<?php echo ("/test123/profile-pic/") . "display-picture.jpg"; ?>" width="150px" height="140px">
                        </p>
                    </div>
                    <div class="col-sm-8">
                        <h1 class="text-center pt-4 pb-5"><strong>Add Products</strong></h1>
                        <hr class="w-25 mx-auto">
                    </div>
                    <div class="col-sm-2">
                        <p class="pt-5 text-center">
                            <a href="logout.php" class="btn btn-outline-primary">Logout</a>
                        </p>
                    </div>
                </div>
                <div class="container mx-auto">
                    <form action="products-add.php" id="the-form" class="form-control w-50 mx-auto" enctype="multipart/form-data" method="post">

                        <label class="pt-4 pb-2 text-center">Enter product name</label>
                        <input type="text" class="form-control" value="<?php /*echo $_POST['pname'] */?>" id="name" name="pname" placeholder="Enter Product name">
                        <label class="pt-4 pb-2 text-center">Enter Brand name</label>
                        <input type="text" class="form-control" value="<?php /*echo $_POST['brand']*/ ?>" id="brand" name="brand" placeholder="Enter brand name">
                        <label class="pt-4 pb-2 text-center">Enter product price</label>
                        <input type="text" class="form-control" value="<?php /*echo $_POST['price']*/ ?>" id="prprice" name="price" placeholder="Enter Product price">
                        <label class="pt-4 pb-2 text-center">Enter quantity</label>
                        <input type="text" class="form-control" value="<?php /*echo $_POST['qty'] */?>" id="qty" name="qty" placeholder="Enter quantity">

                        <label class="pt-4 pb-2 text-center" for="categories">Choose a category</label>
                        <select class="form-control" id="categories" name="categories" onchange="this.form.submit()">
                            
                            

                        </select>

                        
                        <label class="pt-4 pb-2 text-center" for="subcategories">Choose a sub-category</label>
                        <select class="form-control" id="subcategories" name="subcategories">
                            <option value="">-</option>
                            
                        </select>
                        <br>


                        <p class="text-danger pt-2"><strong>Upload product images</strong></p>
                        <input type="file" name="fileToUpload[]" class="form-control" multiple>
                        <p>

                        </p><br>
                        <div class="container w-25 mx-auto">
                            <div class="hide"><img class="mx-auto" style="height: 50px; width: 50px;" src="/test123/products-images/ajax-loader.gif"></div>
                        </div>
                        <br>
                        <button type="button" class="btn btn-primary form-control" onclick="addproduct()" id="btnSubmit">Add product</button>
                        <br><br>
                        <div class="error"></div>
                        <div class="success"></div>
                    </form>

                    <br><br>



                    <script>
                        function addproduct() {
                            event.preventDefault();
                            var form = $('#the-form')[0];
                            var data = new FormData(form);
                            $('.hide').show();
                            $.ajax({
                                type: "POST",
                                enctype: 'multipart/form-data',
                                url: "product-upload.php",
                                data: data,
                                processData: false,
                                contentType: false,
                                cache: false,
                                success: function(data) {
                                    if (data == 1) {
                                        $('.success').html("Product uploaded").show();
                                        $('.error').hide();
                                    }

                                    if (data == 0) {
                                        $('.error').html("Error uploading file. Pls try again.").show();
                                        $('.success').hide();
                                    }
                                    if (data == 2) {
                                        $('.error').html("File is not an image.").show();
                                        $('.success').hide();
                                    }
                                    if (data == 3) {
                                        $('.error').html("File already exist.").show();
                                        $('.success').hide();
                                    }
                                    if (data == 4) {
                                        $('.error').html("File too large. Keep file size below 200KB.").show();
                                        $('.success').hide();
                                    }
                                    if (data == 5) {
                                        $('.error').html("Uploaded file is not an image.").show();
                                        $('.success').hide();
                                    }
                                    if (data == 6) {
                                        $('.error').html("Uknown error occurs.").show();
                                        $('.success').hide();
                                    }
                                    if (data == 0) {
                                        $('.error').html("#######").show();
                                        $('.success').hide();
                                    }

                                },
                                complete: function() {
                                    $('.hide').hide();
                                },
                                error: function(e) {
                                    $(".error").text(e.responseText);
                                    console.log("ERROR : ", e);
                                }
                            });
                        }
                    </script>
                </div>

            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>

</html>
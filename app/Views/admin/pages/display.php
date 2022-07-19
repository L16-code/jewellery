<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Browse Products</title>
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
    </style>

</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2 bg-dark height">
                <p class="pt-5 pb-5 text-center">
                    <a href="admin.php" class="text-decoration-none"><span class="text-light text-font">Admin</span></a>
                </p>
                <hr class="bg-light ">
                <p class="pt-2 pb-2 text-center">
                    <a href="user-profile.php" class="text-decoration-none"><span class="text-light">Profile</span></a>
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
                    <a href="product-upload" class="text-decoration-none"><span class="text-light">Add Products</span></a>
                </p>
                <hr class="bg-light ">
                <p class="pt-2 pb-2 text-center">
                    <a href="display" class="text-decoration-none"><span class="text-light">Browse Products</span></a>
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
                        <h1 class="text-center pt-4 pb-2"><strong>Display Products</strong></h1>
                        <hr class="w-25 mx-auto">

                    </div>
                    <div class="col-sm-2">
                        <p class="pt-5 text-center">
                            <a href="logout.php" class="btn btn-outline-primary">Logout</a>
                        </p>

                    </div>

                </div>


                <div class="container pt-5 pb-5">

                    <div class="table table-responsive">
                        <table class="table table-striped w-100">
                            <thead>
                                <tr>
                                    <th class="text-left">Category</th>
                                    <th class="text-left">Product Name</th>
                                    <th class="text-left">Quantity</th>
                                    <th class="text-left">Price</th>
                                    <th class="text-left">Image</th>

                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <form method="post" id="the-form" enctype="multipart/form-data">
                                        <td><input type="text" class="form-control" name="category-name" value="['category_name']" readonly></td>
                                        <td><input type="text" class="form-control" name="product-name" value="['product_name']"></td>
                                        <input type="hidden" class="form-control" name="subcategories" value="['subcategory_id']" readonly>
                                        <input type="hidden" class="form-control" id="pid" name="pid" value="['id'])" readonly>
                                        <td><input type="number" class="form-control" name="quantity" value="['qty']"></td>
                                        <td><input type="number" class="form-control" name="price" value="['price']"></td>
                                        <td><img src="['image']" height="80px" width="150px">
                                            <input name="fileToUpload[]" class="form-control" type="file" multiple>
                                        </td>
                                        <td><button type="submit" formaction="products-update.php" class="form-control">Update</button></td>
                                        <td><button type="submit" formaction="" class="form-control">Delete</button></td>
                                    </form>


                                </tr>
                                <?php
                                ?>

                            </tbody>
                        </table>

                    </div>

                </div>
                <span class="error"></span><span class="success"></span>

                <div class="container pt-5">
                    <div class="row">
                        <div class="col-sm-4">

                        </div>
                        <div class="col-sm-4">
                            <nav aria-label="...">
                                <ul class="pagination">
                                    <li class="page-item ">
                                        <a class="page-link" href="#">Previous</a>
                                    </li>


                                    <li class="page-item ">
                                        <a class="page-link" href="new-user-requests.php?page= </a>
                                    </li>


                                    <li class="page-item ">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-sm-4">

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1 class="text-success text-center mt-5">Basic Inventory System</h1>
    <div class="mt-5 text-center">
        <form action="compute.php" method="POST" class="row justify-content-center">
            <div class="form-group col-md-3">
                <label for="Product_name" class="form-label">Product Name</label>
                <input type="text" class="form-control" id="Product_name" name="productname" required>
            </div>
            <div class="form-group col-md-3">
                <label for="Initial_qty" class="form-label">Initial Qty</label>
                <input type="text" class="form-control" id="Initial_qty" name="qty" required>
            </div>
            <div class="form-group col-md-3">
                <label for="Out" class="form-label">Out</label>
                <input type="text" class="form-control" id="Out" name="out" required>
            </div>
            <div class="mb3-">
                <button class="btn btn-success mx-auto d-block" type="submit" name="get_balance" value="get_balance">Get Balance</button>
            </div>
        </form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>

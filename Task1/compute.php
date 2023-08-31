<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Computation Result</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="text-success text-center mt-5">Basic Inventory System</h1>

        <?php 
        $productname = $_POST['productname'];
        $qty = $_POST['qty'];
        $out = $_POST['out'];

        class Compute {
            public int $out; 
            public int $qty;
            public string $productname;

            public function computation($out, $qty, $productname) {
                $this->out = $out;
                $this->qty = $qty;
                $this->productname = $productname; 
            }   

            public function subtract($num1, $num2) {
                return $num1 - $num2;
            }

            public function displayproduct() : string {
                return $this->productname;
            }    
        }

        $compute = new Compute();
        $compute->computation($out, $qty, $productname); // Initialize the properties
        $balance = $compute->subtract($qty, $out);
        $display = $compute->displayproduct();

        echo "<div class='text-center'>";
        echo "<h2>Product Name: " . $display . "</h2>";
        echo "<h2>Balance: " . $balance . "</h2>";
        echo "</div>";
        ?>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>

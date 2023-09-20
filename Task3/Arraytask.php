<?php
class Arknights_Operators {
    protected $ArknightsOperatorsList = [];

    public function __construct($list) {
        $this->ArknightsOperatorsList = $list;
    } 

    public function displayOperatorsList() : array {
        return $this->ArknightsOperatorsList;
    }
 
    public function addOperator(string $Arknights_Operators) :void {
        array_push($this->ArknightsOperatorsList, $Arknights_Operators);
    }

    public function limitOperator(int $Arknights_Operators) :void {
        array_splice($this->ArknightsOperatorsList, $Arknights_Operators);
    }

    public function removeOperator(string $Arknights_Operators) :void {
        array_shift($this->ArknightsOperatorsList);
    }   

    
}

$Operators = new Arknights_Operators(["Amiya", "Fiammeta", "Noir Corne", "F12", "Durin", "Ranger", "Orchid", "Midnight", "Kroos", "Fang", "Spot", "Cardigan", "Steward", "Ansel"]);

$Operators->limitOperator("3");
$Operators->addOperator("SilverAsh");
$Operators->removeOperator("Amiya")

/*https://github.com/SamanoRajelJohann/ITE601/edit/main/Task3/Arraytask.php*/

?>


<html>
<head>
    <style>
       
        table {
            margin: 0 auto;
            border-collapse: collapse;
        }

        
        table td {
            text-align: center;
            padding: 8px;
            border: 1px solid #ccc;
        }

        
        table th {
            background-color: #f2f2f2;
            padding: 10px;
        }
    </style>
</head>
<body>
    
    <table border="7">
        <tr>
           <b><th><h1> Operators </h1></th></b>
        </tr>
        <?php foreach ($Operators->displayOperatorsList() as $Operator) {
            echo "<b><tr><td><h1>" . $Operator . "</b></h1></td></tr>";
        } ?>
    </table>
</body>
</html>



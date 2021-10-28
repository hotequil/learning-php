<form action="./cash-machine.php" method="post" name="form">
    <fieldset>
        <legend>Caixa eletrônico</legend>

        <div>
            <label for="value">Valor</label>
            <input type="number" name="value" id="value" step="1" min="0" required placeholder="Insira o valor">
        </div>

        <input type="submit" name="submit" value="Receber notas">
    </fieldset>
</form>

<?php 
    $isSubmitted = isset($_REQUEST['submit']);

    function ended($value){
        return $value === 0;
    }

    function isEven($value){
        return $value % 2 === 0;
    }

    function printCash($phrase, $quantity){
        echo "<h2>$phrase: $quantity</h2>";
    }

    if($isSubmitted){
        $value = intval($_REQUEST['value']);
        $moneyBills = [10, 5, 2];
        $bills = [];
        $rest = null;

        for($index = 0; $index < count($moneyBills); $index++){
            $billType = $moneyBills[$index];
            $quantityBills = 0;

            if((!isEven($value) || isEven($billType)) && !ended($rest)){
                $rest = $value % $billType;
                $quantityBills = ($value - $rest) / $billType;
                $value = $rest;
            }

            array_push($bills, $quantityBills);
        }

        for($index = 0; $index <= count($bills); $index++){
            $quantity = $bills[$index];

            switch($index){
                case 0:
                    printCash("Quantidade de notas de 10", $quantity);
                    break;
                case 1:
                    printCash("Quantidade de notas de 5", $quantity);
                    break;
                case 2:
                    printCash("Quantidade de notas de 2", $quantity);
                    break;
                case 3:
                    printCash("Valor de resto que não foi possível sacar por ser baixo", $rest);
                    break;
            }
        }
    }
?>

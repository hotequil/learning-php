<form name="form" method="post" action="calculator.php">
    <fieldset>
        <legend>Calculadora</legend>

        <div>
            <label for="firstNumber">Primeiro número</label>
            <input type="number" id="firstNumber" name="firstNumber" required>
        </div>

        <div>
            <label for="secondNumber">Segundo número</label>
            <input type="number" id="secondNumber" name="secondNumber" required>
        </div>

        <div>
            <label for="operator">Operação</label>
            <select name="operator" id="operator" required>
                <option selected value="+">Adição</option>
                <option value="-">Subtração</option>
                <option value="*">Multiplicação</option>
                <option value="/">Divisão</option>
            </select>
        </div>

        <input type="submit" name="submit" value="Calcular">
    </fieldset>
</form>

<?php 
    $isSubmitted = isset($_REQUEST['submit']);

    if($isSubmitted){
        $firstNumber = $_REQUEST['firstNumber'];
        $secondNumber = $_REQUEST['secondNumber'];
        $operator = $_REQUEST['operator'];
        $result = 0;

        eval("\$result = ($firstNumber $operator $secondNumber);");

        echo "<h1>O resultado é: $result</h1>";
    }
?>

<form action="fuels.php" method="POST" name="form">
    <fieldset>
        <legend>Qual combustível é mais barato</legend>

        <div>
            <label for="gas">Preço da gasolina</label>
            <input type="number" name="gas" id="gas" step="any" placeholder="Exemplo: 5.28" required>
        </div>

        <div>
            <label for="alcohol">Preço do álcool</label>
            <input type="number" name="alcohol" id="alcohol" step="any" placeholder="Exemplo: 4.12" required>
        </div>

        <input type="submit" value="Calcular" name="submit">
    </fieldset>    
</form>

<?php 
    $isSubmitted = isset($_REQUEST['submit']);

    if($isSubmitted){
        $gas = $_REQUEST['gas'];
        $alcohol = $_REQUEST['alcohol'];
        $result = $alcohol / $gas;
        $percentual = number_format($result, 2);
        $word = $percentual >= 0.7 ? "álcool" : "gasolina";

        echo "<h1>Abasteça com $word ($percentual)";
    }
?>

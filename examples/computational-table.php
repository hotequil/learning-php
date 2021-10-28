<style>
    td{
        border: 1px solid #000;   
    }
</style>

<form action="./computational-table.php" method="POST" name="form">
    <fieldset>
        <legend>Tabela computational</legend>

        <div>
            <label for="rows">Quantidade de linhas</label>
            <input type="number" step="1" name="rows" id="rows" min="1" required placeholder="Insira as linhas">
        </div>

        <div>
            <label for="columns">Quantidade de colunas</label>
            <input type="number" step="1" name="columns" id="columns" min="1" required placeholder="Insira as colunas">
        </div>

        <input type="submit" value="Montar tabela" name="submit">
    </fieldset>
</form>


<?php 
    $isSubmitted = isset($_REQUEST['submit']);

    if($isSubmitted){
        $rows = intval($_REQUEST['rows']);
        $columns = intval($_REQUEST['columns']);

        echo "<table>";
        
        for($index = 0; $index < $columns; $index++){
            echo "<tr>";

            for($indexChildren = 0; $indexChildren < $rows; $indexChildren++) echo "<td>$index & $indexChildren</td>";

            echo "</tr>";
        }

        echo "</table>";
    }
?>

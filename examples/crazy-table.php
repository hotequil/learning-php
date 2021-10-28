<form action="crazy-table.php" name="form" method="POST">
    <fieldset>
        <legend>Tabuada maluca</legend>
        
        <div>
            <label for="number">Número</label>
            <input type="number" id="number" name="number">
        </div>

        <div>
            <label for="startNumber">Número inicial</label>
            <input type="number" id="startNumber" name="startNumber">
        </div>

        <div>
            <label for="finalNumber">Número final</label>
            <input type="number" id="finalNumber" name="finalNumber">
        </div>

        <input type="submit" value="Criar tabuada" name="submit">
    </fieldset>
</form>

<?php
    $isSubmitted = isset($_REQUEST['submit']);

    if($isSubmitted){
        $number = intval($_REQUEST['number']);
        $startNumber = intval($_REQUEST['startNumber']);
        $finalNumber = intval($_REQUEST['finalNumber']);

        for($index = $startNumber; $index <= $finalNumber; $index++){
            $result = $number * $index;

            echo "<h4>$number x $index = $result</strong><br>";
        }
    }
?>

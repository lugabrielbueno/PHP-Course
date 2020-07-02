<form>

    <input type="text" name="name">
    <input type="date" name='birth'>
    <input type="submit" value="OK">
</form>
<?php
/*
$meses = array('janeiro', 'fevereiro','março','abril','maio','junho','julho','agosto','setembro','outubro','novembro','dezembro');

foreach ($meses as $index => $mes) {
    echo "Indice: ".$index."</br>";
    echo "O mês é: ".$mes."</br></br>";
}
*/

if (isset($_GET)) {
    foreach ($_GET as $key => $value) {

        echo "Name of field: ".$key."<br>";
        echo "Value of field: ".$value."<br>";
        echo "<hr>";
    }
}

?>
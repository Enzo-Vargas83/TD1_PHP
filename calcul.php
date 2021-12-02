<?php include "Fonc_Start_n_EndPage.php"?>
<?php
start_page('Calcul');
?>
<?php
$op1 = $_POST['op1'];
$op2 = $_POST['op2'];
$op = $_POST['op'];
$action = $_GET['action']
?>
<?php
if('*' == $action)
{
    echo '<br><strong>$op1 * $op2 =</strong>' .$op1 * $op2 ;
}
elseif('+' == $op)
{
    echo "<br><strong>$op1 + $op2 = </strong>" .$op1 * $op2 ;
}
else
{
    echo '<br/><strong>opérateur ' . $op . ' non géré </strong>';
}
?>
<?php
end_page();
?>
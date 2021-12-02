<?php include "Fonc_Start_n_EndPage.php"?>
<?php
start_page('Calcul');
?>
<?php
$op1 = $_GET['op1'];
$op2 = $_GET['op2'];
$action = $_GET['action']
?>
<?php
if('*' == $action)
{
    echo "<br><strong>$op1 + $op2 = </strong>" .$op1 * $op2 ;
}
elseif('+' == $action)
{
    echo "<br><strong>$op1 + $op2 = </strong>" .$op1 + $op2 ;
}
else
{
    echo '<br/><strong>opérateur ' . $action . ' non géré </strong>';
}
?>
<?php
end_page();
?>
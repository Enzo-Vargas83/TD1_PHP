<?php
    include "index.php";
    include "Fonc_Start_n_EndPage.php";
?>

<?php
    start_page("calcul");
?>

<?php
    $op1 = $_POST['op1'];
    $op2 = $_POST['op2'];
    $op = $_POST['op'];
?>

<?php
if('*' == $op)
{
    echo "$op1 * $op2 =";
}
elseif('+' == $op)
{
    echo "$op1 + $op2 =";
}
else
{
    echo '<br/><strong>opérateur ' . $op . ' non géré </strong>';
}
?>

<?php
    start_page("calcul");
?>

<?php
    $operateurs = '*+-/';
?>

<?php
    end_page();
?>
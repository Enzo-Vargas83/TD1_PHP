<?php
    include("Fonc_Start_n_EndPage.php");
?>

<?php
 start_page("calculator");
?>
<form action="calculator.php" method="post">
    <label>
        <input type="text" name="op1">
        <input type="text" name="op2">
        <input checked="checked" type="radio" name="op" value="*"/>*<br/>
        <input type="radio" name="op" value="+"/>+<br/>
        <input type="radio" name="op" value="-"/>-<br/>
        <input type="radio" name="op" value="/"/>/<br/>
        <input type="submit" name="submit">
    </label>

</form>

<?php
  end_page();
?>

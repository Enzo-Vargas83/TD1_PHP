<?php
    include "Fonc_Start_n_EndPage.php";
?>

<?php
 start_page("calculator");
?>
<form action="calcul.php" method="post">
    <label>
        <input type="text" name="op1">
        <input type="text" name="op2"><br/>
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

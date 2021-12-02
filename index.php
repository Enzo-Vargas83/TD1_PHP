<?php include "start_end.php"?>
<?php
start_page("Calculator");
?>
<?php
$operateurs = '*+-/';
?>
    <form action="calcul.php" method="post">
        <label>
            <input type="text" name="op2"><br>
            <input type="text" name="op1"><br>
            <?php
            for($cpt = 0 ; $cpt <= 3 ; ++$cpt)
            {
                echo '<input ';
                if($cpt == 0)
                { echo 'checked="checked" '; }
                echo 'type="radio" name="op" value="' . $operateurs[$cpt] . '"/>' . $operateurs[$cpt] . ' <br/>' . "\n";
            }
            ?>
            <!--        <input checked="checked" type="radio" name="op" value="*"/>*<br/>-->
            <!--        <input type="radio" name="op" value="+"/>+<br/>-->
            <!--        <input type="radio" name="op" value="-"/>-<br/>-->
            <!--        <input type="radio" name="op" value="/"/>/<br/>-->
        </label>
        <input type="submit" name="action">
    </form>
<?php
end_page();

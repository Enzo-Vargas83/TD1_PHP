<?php
     function start_page($title)
     {
    ?><!DOCTYPE html>
    <html lang="fr">
    <head>
        <title><?php echo $title; ?></title>
    </head>
    <body>
        <hr/><br/><strong>Test</strong><br/><hr/>
    <?php
    }

    function end_page()
    {
    ?>
    </body>
    </html>
    <?php
    }
?>
<?php
    start_page('Test');
    end_page();
?>

<?php
    //echo date('l F d, Y');
    $jourEng = date('F d, Y, H:i:s');
    $jourFr = date('d/m/Y', strtotime('2021-11-25'));
    echo "$jourFr </br>";
    echo $jourEng;

?>

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
    $jourEng = date('l F d, Y');
    $jourFr = date('d/m/Y', strtotime('2020-04-01'));
    echo $jourFr;
    echo $jourEng;

?>

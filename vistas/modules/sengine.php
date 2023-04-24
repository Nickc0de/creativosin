<?php
$listado = [];
$cats = sInCat($_GET['s'],$_GET['l']);
    foreach($cats as $cat){
        $listado []= sEngine($cat, 'personas');
        $listado []= sEngine($cat, 'empresas');
    } 
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/main.css" />
        <!-- UIkit CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.3/dist/css/uikit.min.css" />
        <!-- google fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,700;1,400&display=swap" rel="stylesheet">
        <!-- UIkit JS -->
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.3/dist/js/uikit.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.3/dist/js/uikit-icons.min.js"></script>
        <title>Creativos Inn</title>
    </head>
    <body class="uk-background-muted">
        <div class="uk-card uk-card-default uk-card-body">
            <ul class="uk-list uk-list-divider">
                <?php
                foreach($listado as $item){
                    foreach($item as $it){
                        $cat = 'persona';
                        if($it['nit']){
                            $cat = 'empresa';
                        }
                ?>
                    <li><a href="<?php echo '?md='.$cat.'&id='.$it['id'];?>"><?php echo $it['nombre'];?></a></li>
                <?php
                    }
                }
                ?>
            </ul>
        </div>
    </body>
</html>
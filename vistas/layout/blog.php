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
    <title>Blog</title>
</head>
<body class="uk-background-muted">
        <?php include('vistas/modules/navbar.php'); ?>
    <section id="content-personal">
        <div class="uk-grid-collapse uk-child-width-expand" uk-grid>
            <?php include('vistas/modules/cat-aside.php');?>
            <?php include('vistas/blog_entrevista.php');?>
            <?php include('vistas/modules/right-aside.php');?>   
        </div>
    </section>
    <section id="footer">
        <?php include('vistas/layout/footer.php');?>
    </section>
    <?php include('vistas/modules/register-modal.php');?>
</body>
</html>
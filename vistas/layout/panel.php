<?php
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
    <title>Página personal</title>
</head>
<body class="uk-background-muted">
        <?php include('vistas/modules/navbar.php'); ?>
    <section id="content-personal">
        <div class="uk-grid-collapse uk-child-width-expand" uk-grid>
            <?php include('vistas/modules/cat-aside.php');?>
            <?php include('vistas/persona-profile.php');?>
            <?php include('vistas/modules/right-aside.php');?>   
        </div>
    </section>
    <section id="footer">
        <?php include('vistas/layout/footer.php');?>
    </section>
    <?php include('vistas/modules/register-modal.php');?>
    <script>
        let dialog = '<a class="uk-navbar-item uk-logo uk-margin-left" href="./" aria-label="Back to Home" tabindex="0" role="menuitem"><img src="images/logo_main.png" alt="Creativos Inn" width="120"></a><h2 class="cinn-text-blue">Creativosinn te da la bienvenida a la plataforma del futuro</h2><h3>¿quieres ser nuestro aliado estratégico?</h3><p class="uk-text-small">  CreativosInn, pondrá a su servicio la plataforma como Aliado Estratégico y aparecerás registrado como persona o empresa y podrás comercializar tús servicios o productos y disfrutar de ofertas, promociones y un ilimitado número de beneficios, y adquirir algunos de nuestros planes. La implementación de este proceso comercial digital requiere contar con sus datos y su autorización. </p><p class="uk-text-small">Basado en la ley 1581 de 2012, artículo 9, recurrimos al siguiente medio digital para solicitar su autorización para el tratamiento de datos personales o empresariales. Manifiesto que la presente autorización me fue solicitada y puesta de presente antes entregar mis datos personales o empresariales, y que la suscribo de forma libre y voluntaria una vez leída en su totalidad, y autorizo a CreativosInn para que utilice mi información.</p>'
        UIkit.modal.confirm(dialog)
        // UIkit.util.on('#js-modal-confirm', 'click', function (e) {
        //     e.preventDefault();
        //     e.target.blur();
        //     UIkit.modal.confirm('UIkit confirm!').then(function () {
        //         console.log('Confirmed.')
        //     }, function () {
        //         console.log('Rejected.')
        //     });
        // });
        </script>
</body>
</html>
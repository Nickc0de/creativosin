<div id="register-modal-1" uk-modal bg-close="false">
    <div class="uk-modal-dialog uk-modal-body uk-border-rounded">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <h2 class="uk-modal-title">Registro</h2>
        <?php include('modules/reg-form.php');?>
    </div>
</div>
<div id="register-modal-2" uk-modal bg-close="false">
    <div class="uk-modal-dialog uk-modal-body uk-border-rounded">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <h2 class="uk-modal-title">Registro</h2>
        <?php include('modules/reg-form-2.php');?>
    </div>
</div>
<div id="verify-modal" uk-modal bg-close="false">
    <div class="uk-modal-dialog uk-modal-body uk-border-rounded">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <h2 class="uk-modal-title">Verifica tu cuenta</h2>
        <?php include('modules/verify.php');?>
    </div>
</div>
<script type="text/javascript">
    let tipo = document.getElementById('tipo')
    let nit = document.getElementById('nit')
    let empresa = document.getElementById('empresa')
    let nombre = document.getElementById('nombre')
    let correo = document.getElementById('correo')
    let celular = document.getElementById('celular')
    tipo.addEventListener('change',function(e){
        if(tipo.value == 2){
            nit.removeAttribute('hidden')
            empresa.removeAttribute('hidden')
            nit.innerHTML = createControlRegForm(
                'text',
                '<strong>NIT</strong>, campo requerido',
                'Número de identificación de la empresa', 
                required = true
                )
            empresa.innerHTML = createControlRegForm(
            'text',
            '<strong>Nombre empresa</strong>, campo requerido',
            'Escriba el nombre de la empresa', 
            required = true
            )
            nombre.setAttribute('placeholder', 'Escribe tu nombre')
            correo.setAttribute('placeholder', 'Escribe tu correo')
            celular.setAttribute('placeholder', 'Tu número celular')
        }else{
            nit.setAttribute('hidden', 'hidden')
            nit.innerHTML = ''
            empresa.setAttribute('hidden', 'hidden')
            empresa.innerHTML = ''
            nombre.setAttribute('placeholder', 'Nombre completo')
            correo.setAttribute('placeholder', 'Correo electrónico')
            celular.setAttribute('placeholder', 'Celular')
        }

    })

    function createControlRegForm(tipo,tooltip,placeholder, required = false){
        let req = ''
        if(required){
            req = 'required'
        }
        return '<span uk-icon="icon: info" class="uk-margin-small-right" uk-tooltip="pos: right; title:'+tooltip+'"></span>\n<div class="uk-inline uk-width-expand">\n<input class="uk-width-expand uk-input uk-border-rounded" type="'+tipo+'" maxlength="100" '+req+' placeholder="'+placeholder+'">\n</div>'
    }
</script>
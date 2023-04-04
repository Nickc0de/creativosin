
<form class="uk-grid-small uk-margin-small-left cinn-form" uk-grid>
    <div class="uk-iconnav uk-width-1-2@s uk-flex uk-flex-middle">
        <span uk-icon="icon: info" class="uk-margin-small-right" uk-tooltip="pos: right; title:Seleccione el tipo de cuenta que desea crear"></span>
        <div class="uk-text-left " uk-form-custom="target: > * > span:first-child">
            <select aria-label="Custom controls" required id="tipo">
                <option value="1">Persona</option>
                <option value="2">Empresa</option>
            </select>
            <button class="uk-button uk-button-default uk-border-rounded" type="button" tabindex="-1">
                <span class="uk-border-rounded"></span>
                <span uk-icon="icon: chevron-down"></span>
            </button>
        </div>
    </div>
    
    <!-- <div class="uk-text-left uk-width-1-2@s uk-child-width-expand" uk-form-custom="target: > * > span:first-child">
        <select aria-label="Custom controls" >
            <option value="">Tipo de documento</option>
            <option value="1">Cédula de ciudadania</option>
            <option value="2">Cédula de extranjería</option>
        </select>
        <button class="uk-button uk-button-default uk-border-rounded" type="button" tabindex="-1">
            <span></span>
            <span uk-icon="icon: chevron-down"></span>
        </button>
    </div> -->
    <!-- <div class="uk-width-1-1">
        <input class=" uk-width-1-1 uk-input uk-border-rounded" type="text" maxlength="20" requiered placeholder="Número de identificación">
    </div> -->
    <div class="uk-iconnav uk-width-1-1 uk-flex uk-flex-middle uk-animation-fade" id="nit" hidden></div>
    <div class="uk-iconnav uk-width-1-1 uk-flex uk-flex-middle uk-animation-fade" id="empresa" hidden></div>
    <div class="uk-iconnav uk-width-1-1 uk-flex uk-flex-middle">
        <span uk-icon="icon: info" class="uk-margin-small-right" uk-tooltip="pos: right; title:<strong>Nombre completo</strong>, campo requerido"></span>
        <div class="uk-inline uk-width-expand">
            <input id="nombre" class="uk-width-expand uk-input uk-border-rounded" type="text" maxlength="100" required placeholder="Nombre completo">
        </div>
    </div>
    <div class="uk-iconnav uk-width-1-1 uk-flex uk-flex-middle">
        <span uk-icon="icon: info" class="uk-margin-small-right" uk-tooltip="pos: right; title:Correo electrónico, campo requerido"></span>
        <div class="uk-inline uk-width-expand">
            <input id="correo" class="uk-input uk-border-rounded" type="email" maxlength="150" required placeholder="Correo electrónico">
        </div>
    </div>
    <div class="uk-iconnav uk-width-1-1 uk-flex uk-flex-middle">
        <span uk-icon="icon: phone" class="uk-margin-small-right" uk-tooltip="pos: right; title:Número celular"></span>
        <div class="uk-inline uk-width-expand">
            <input id="celular" class="uk-input uk-border-rounded" type="text" maxlength="20"  placeholder="Celular">
        </div>
    </div>
    <div class=" uk-width-expand uk-text-center">
        <input  class="uk-width-1-2 uk-margin-small-top uk-button uk-button-default cinn-button-violet-inv uk-border-rounded" type="submit" value="Siguiente" uk-toggle="target: #register-modal-2" >
    </div>
</form>

<!-- restringir el boton siguiente con javascript si no ha rellenado los datos obligatorios, de igual manera crear un submit oculto y generar ujn mensaje de error si no se ha llenado los datos necesarios -->


<form class="uk-grid-small uk-margin-small-left cinn-form" uk-grid>
    <div class="uk-iconnav uk-width-1-1 uk-flex uk-flex-middle">
        <span uk-icon="icon: info" class="uk-margin-small-right" uk-tooltip="Indique el oficio al que se dedica, campo requerido"></span>
        <div class="uk-inline uk-width-expand">
            <input class="uk-input uk-border-rounded" type="text" maxlength="150" required placeholder="Profesión">
        </div>
    </div>
    <div class="uk-iconnav uk-width-1-1 uk-flex uk-flex-middle">
        <span uk-icon="icon: receiver" class="uk-margin-small-right" uk-tooltip="Número de teléfono fijo"></span>
        <div class="uk-inline uk-width-expand">
            <input class="uk-input uk-border-rounded" type="text" maxlength="20" placeholder="Número de teléfono">
        </div>
    </div>
    <div class="uk-iconnav uk-width-1-1 uk-flex uk-flex-middle">
        <span uk-icon="icon: tag" class="uk-margin-small-right" uk-tooltip="Dirección donde presta sus servicios"></span>
        <div class="uk-inline uk-width-expand">
            <input class="uk-input uk-border-rounded" type="text" maxlength="150" placeholder="Dirección de despacho">
        </div>
    </div>
    <div class="uk-iconnav uk-width-1-1 uk-flex uk-flex-middle">
        <span uk-icon="icon: location" class="uk-margin-small-right" uk-tooltip="Enlace de google maps si cuenta con uno"></span>
        <div class="uk-inline uk-width-expand">
            <input class="uk-input uk-border-rounded" type="email" maxlength="150" placeholder="Ubicación google">
        </div>
    </div>
    <div class="uk-iconnav uk-width-1-1 uk-flex uk-flex-middle">
        <span uk-icon="icon: world" class="uk-margin-small-right" uk-tooltip="Dirección de su sitio web"></span>    
        <div class="uk-inline uk-width-expand">
            <input class="uk-input uk-border-rounded" type="text" maxlength="20"  placeholder="Página web">
        </div>
    </div> 
    <div class="uk-width-1-1 uk-margin-small-left uk-margin-top">
        <div class="uk-padding-small">
            <input type="checkbox" class="uk-checkbox uk-border-rounded uk-margin-small-right">Acepto términos y condiciones
        </div>
    </div>   
    <div class="uk-width-expand uk-text-right">
        <input class="uk-margin-small-top uk-button uk-button-default uk-border-rounded" value="REGRESAR" uk-toggle="target: #register-modal-1" >
        <input class="uk-margin-small-top uk-button uk-button-default cinn-button-violet-inv uk-border-rounded"  value="REGISTRARSE" uk-toggle="target: #verify-modal">
    </div>
</form>

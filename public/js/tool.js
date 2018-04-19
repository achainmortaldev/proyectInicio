/******************************************************************************/
/****   BOOTBOX ****/
function deleteMsg(msg, handleData) {
    bootbox.confirm({
        title: DOMINIO_CLIENTE,
        show: true,
        message: "<div style='width:100%'> <div style='width: 12%;float: left;margin-top: 25px;padding-left: 12px; font-size: 35px; margin-bottom: 20px;'><i class='glyphicon glyphicon-remove-sign'></i> </div> <div style='width:85%; '><p>" + "Esta seguro de querer eliminar?" + "</p> <p>" + msg + "</p> <small>¿Desea continuar?</small></div> </div>  ",
        buttons: {
            'cancel': {
                label: "No",
                className: 'btn-default'
            },
            'confirm': {
                label: "Si",
                className: 'btn-primary'
            }
        },
        callback: function (result) {
            handleData(result);
        }
    });
}

function warningMsg(msg, handleData) {
    bootbox.confirm({
        title: DOMINIO_CLIENTE,
        show: true,
        message: "<div style='width:100%'> <div style='width: 12%;float: left;margin-top: 10px;padding-left: 12px; font-size: 35px; margin-bottom: 20px;'><i class='glyphicon glyphicon-warning-sign'></i> </div> <div style='width:85%; '><p>" + "Advertencia!!!" + "</p> <p>" + msg + "</p></div> </div>  ",
        buttons: {
            'cancel': {
                label: "Aceptar",
                className: 'btn-default'
            },
        },
        callback: function (result) {
            handleData(result);
        }
    });
}

function confirmMsg(msg, handleData) {
    bootbox.confirm({
        title: DOMINIO_CLIENTE,
        show: true,
        message: "<div style='width:100%'> <div style='width: 12%;float: left;margin-top: 10px;padding-left: 12px; font-size: 35px; margin-bottom: 20px;'><i class='glyphicon glyphicon-question-sign'></i> </div> <div style='width:85%; '><p>" + "Confirma la acción seleccionada?" + "</p> <p>" + msg + "</p></div> </div>  ",
        buttons: {
            'cancel': {
                label: "No",
                className: 'btn-default'
            },
            'confirm': {
                label: "Si",
                className: 'btn-primary'
            }
        },
        callback: function (result) {
            handleData(result);
        }
    });
}


/******************************************************************************/
$.hideContainer = function($id){
  $("#"+$id).hide();
}

$.openContainer = function($id){
  $("#"+$id).show();
}
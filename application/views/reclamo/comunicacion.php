<?php $this->layout('partials/layout', ['title' => 'User Profile']) ?>

<?php $this->start('style') ?>
<?php $this->stop() ?>
<?php $this->start('contenido') ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  	<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>COMUNICACION<small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#"> Reclamo</a></li>
        <li class="active">Comunicación</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row" id="divPanelComunicacion" >
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Gestión de Comunicación</h3>
              <div class="box-tools pull-right">
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- bloque derivacion-->
              <div id="divStepComunicacion">
                <div class="row"  >                
                  <div class="stepwizard">
                      <div class="stepwizard-row setup-panel">
                          <div class="stepwizard-step col-xs-4"> 
                              <div class="info-box bg-green " >
                                <a href="#step-1" class="info-box-icon" style="color:white"><i class="fa fa-fw fa-newspaper-o"></i></a>

                                <div class="info-box-content">
                                  <span class="info-box-text">Datos</span>
                                  <span class="info-box-text">Reclamante</span>
                                </div>
                              </div>
                          </div>
                          <div class="stepwizard-step col-xs-4"> 
                              <div class="info-box bg-aqua " >
                                <a href="#step-2" class="info-box-icon" style="color:white"><i class="fa fa-fw fa-bullhorn"></i></a>

                                <div class="info-box-content">
                                  <span class="info-box-text">Notificación</span>
                                  <span class="info-box-text"></span>
                                </div>
                              </div>
                          </div>
                          <div class="stepwizard-step col-xs-4"> 
                              <div class="info-box bg-aqua " >
                                <a href="#step-3" class="info-box-icon" style="color:white"><i class="fa fa-fw fa-briefcase"></i></a>
                                <div class="info-box-content">
                                  <span class="info-box-text">Documentos</span>
                                  <span class="info-box-text">pdf, jpeg, jpg</span>
                                  <span class="info-box-text">png, gif</span>
                                </div>
                              </div>
                          </div>
                      </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-12 col-md-12">
                    <form role="form">

                        <div class="box box-primary setup-content" data-step="step-1">
                          <div class="box-header with-border">
                            <h3 class="box-title">Comunicación</h3>
                          </div>
                          <div class="box-body">
                            <div class="row">
                              <div class="col-lg-12 col-md-12 col-ms-12">
                                <div class="form-group">
                                  <label for="comunicacion[respuesta]">Respuesta</label>
                                  <textarea class="form-control" name="comunicacion[respuesta]" placeholder="Ingresa la respuesta comunicada de la empresa" rows="4"></textarea>
                                </div>
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label class="control-label">Parentesco</label>
                                  <select class="form-control input-lg select2Default" name="sucursal">
                                    <option value="">--Seleccione--</option>
                                    <option value="FAMILIAR">Familiar</option>
                                    <option value="TITULAR">Titular</option>
                                    <option value="OTRO">Otro</option>
                                  </select>
                                </div>
                              </div>

                              <div class="col-md-6">
                                <div class="form-group">
                                  <label class="control-label">Persona a quien se da la comunicación</label>
                                  <input maxlength="100" type="text" class="form-control" placeholder="Apellido Materno" name="apellido_materno" />
                                </div>
                              </div>
                            </div>

                            <button class="btn btn-primary nextBtn pull-right" type="button">Siguiente</button>
                          </div>
                        </div>

                        <div class="box box-primary setup-content" data-step="step-2">
                          <div class="box-header with-border">
                            <h3 class="box-title">Notificación</h3>
                          </div>
                          <div class="box-body">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="notificacion[id_tipo_notificacion]" class="control-label">Tipo Notificación</label>
                                  <select class="form-control input-lg " name="notificacion[id_tipo_notificacion]" onchange="changeTipoNotificacion(event)">
                                    <option value=""></option>
                                    <option value="REAL">Real</option>
                                    <option value="PROCESAL">Procesal</option>
                                    <option value="ESPECIAL">Especial</option>
                                  </select>
                                </div>
                              </div>
                            </div>

                            <div class="row" id="divProcesal" style="display:none">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="reclamo[id_notificacion]" class="control-label">Notificación</label>
                                  <select class="form-control input-lg" name="reclamo[id_notificacion]" onchange="changeNotificacionProcesal(event)" >
                                    <option value="">--Seleccione--</option>
                                    <option value="PROCESAL">Procesal</option>
                                    <option value="RECLAMANTE">Reclamante</option>
                                  </select>
                                </div>
                              </div>

                              <div class="col-md-6" id="divProcesalSucursal" style="display:none">
                                <div class="form-group">
                                  <label for="notificacion[agencia]" class="control-label">Agencia</label>
                                  <select class="form-control input-lg select2Default" name="notificacion[agencia]" >
                                    <option value="CC">Cala Cala</option>
                                    <option value="AG">6 de Agosto</option>
                                    <option value="TQ">Tiquipaya</option>
                                    <option value="HK">Huarakasa</option>
                                  </select>
                                </div>
                              </div>
                            </div>

                            <div class="row" id="divEspecial" style="display:none">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="reclamo[id_notificacion_especial]" class="control-label">Notificación</label>
                                  <select class="form-control input-lg" name="reclamo[id_notificacion_especial]" onchange="changeNotificacionEspecial(event)" >
                                    <option value="TELF">--Seleccione--</option>
                                    <option value="TELF">Telefono</option>
                                    <option value="EMAIL">Correo Electronico</option>
                                  </select>
                                </div>
                              </div>

                              <div class="col-md-6" id="divEspecialTelefono" style="display:none">
                                <div class="form-group">
                                  <label for="notifiacion[telefono]" class="control-label">Teléfono</label>
                                  <input type="text" class="form-control" placeholder="Teléfono" name="notifiacion[telefono]" />
                                </div>
                              </div>

                              <div class="col-md-6" id="divEspecialEmail" style="display:none">
                                <div class="form-group">
                                  <label for="notifiacion[email]" class="control-label">Correo Electronico</label>
                                  <input type="text" class="form-control" placeholder="dirección" name="notifiacion[email]" />
                                </div>
                              </div>
                            </div>  

                            <div class="row" id="divReal" style="display:none">
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label for="reclamo[direccion_notificacion]" class="control-label">Dirección</label>
                                  <input type="text" class="form-control" placeholder="dirección" name="reclamo[direccion_notificacion]" />
                                </div>
                              </div>
                            </div>

                            <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
                          </div>
                        </div>

                        <div class="box box-primary setup-content" data-step="step-3">
                          <div class="box-header with-border">
                            <h3 class="box-title">Comunicación</h3>
                          </div>
                          <div class="box-body">
                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label class="control-label"></label>
                                  <input id="inputComunicacion" name="inputComunicacion[]" type="file" multiple accept="image" class="form-control">
                                </div>
                              </div>
                            </div>
                            <button class="btn btn-success pull-right" type="submit">Finish!</button>
                          </div>
                        </div>
                    </form>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php $this->stop() ?>

<?php $this->start('script') ?>
<script type="text/javascript">
  $(document).ready(function () {

      $("#inputComunicacion").fileinput({
          theme: "explorer",
          uploadUrl: "/file-upload-batch/2",
          allowedFileExtensions: ['jpg', 'png', 'gif'],
          overwriteInitial: false,
          initialPreviewAsData: true,
      });

      $("#divStepComunicacion").toStepByStep();
  });

  function changeTipoNotificacion(event){
  var target = event.target;

  if(Boolean(target)){
    var option_selected = target.selectedOptions[0];
    if(Boolean(option_selected)   ){
      $("#divReal").find("input[name='direccion']").val('');
      switch(option_selected.value){
        case "REAL":
          $("#divReal").show();
          $("#divReal").find("input[name='direccion']").attr('readonly', 'readonly');
          $("#divReal").find("input[name='direccion']").val('direccion real que especifica el reclamante');
          $("#divEspecial").hide();
          $("#divProcesal").hide();
          break;
        case "PROCESAL":
          $("#divProcesal").show();
          $("#divEspecial").hide();
          $("#divReal").hide();
          break;
        case "ESPECIAL":
          $("#divEspecial").show();
          $("#divReal").hide();
          $("#divProcesal").hide();
          break;
      }
    }
  }
}

function changeNotificacionProcesal(event){
  var target = event.target;
  if(Boolean(target)){
    var option_selected = target.selectedOptions[0];
    if(Boolean(option_selected)   ){
      $("#divReal").find("input[name='direccion']").val('');
      switch(option_selected.value){
        case "PROCESAL":
          $("#divReal").show();
          $("#divProcesal").find("#divProcesalSucursal").hide();
          break;
        case "RECLAMANTE":
          $("#divProcesal").find("#divProcesalSucursal").show();
          $("#divReal").hide();
          $("#divReal").find("input[name='direccion']").removeAttr('readonly');
          break;
      }
    }
  }
}

function changeNotificacionEspecial(event){
  var target = event.target;
  if(Boolean(target)){
    var option_selected = target.selectedOptions[0];
    if(Boolean(option_selected)   ){
      switch(option_selected.value){
        case "TELF":
          $("#divEspecialTelefono").show();
          $("#divEspecialEmail").hide();
          break;
        case "EMAIL":
          
          $("#divEspecialTelefono").hide();
          $("#divEspecialEmail").show();
          break;
      }
    }
  }
}
</script>
<?php $this->stop() ?>
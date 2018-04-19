<?php $this->layout('partials/layout', ['title' => 'User Profile']) ?>

<?php $this->start('style') ?>
<?php $this->stop() ?>

<?php $this->start('contenido') ?>
<?php $base_public = "http://".$_SERVER['HTTP_HOST']."/ypfb/public/"; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>RECLAMOS<small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Reclamos</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Comerciales</span>
              <span class="info-box-number">90<small>%</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Tecnicos</span>
              <span class="info-box-number">41,410</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Equipos Quemados</span>
              <span class="info-box-number">760</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total</span>
              <span class="info-box-number">2,000</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="callout callout-info" style="height: 60px">
            <div class="col-lg-3 col-md-3 col-sm-12 ">
              <div class="btn-group" role="group" aria-label="search simple"> 
                <button type="button" class="btn btn-block btn-primary"><i class="fa fa-fw fa-plus"></i>&nbsp;</button>
              </div>
              <div class="clearfix"></div>
            </div>

            <div class="col-lg-8 col-md-8 col-sm-12">
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ingreso texto a buscar">
              <div class="clearfix"></div>
            </div>

            <div class="col-lg-1 col-md-1 col-sm-12 text-right">
              <div class="btn-group" role="group" aria-label="search simple"> 
                <button type="button" class="btn btn-block btn-default" data-toggle="collapse" data-parent="#accordion" aria-expanded="true" data-target="#collapseOne" ><i class="fa fa-fw fa-search"></i>&nbsp;</button>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>     

          <div id="collapseOne" class="panel-collapse collapse" aria-expanded="true" >
            <div class="box-body">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Buscador Avanzado</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form">
                  <div class="box-body">

                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="numero">Número</label>
                        <input type="text" class="form-control" id="numero" placeholder="Enter email">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="codigoConsumidor">Código Consumidor</label>
                        <input type="text" class="form-control" id="codigoConsumidor" placeholder="Password">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> Check me out
                        </label>
                      </div>
                    </div>

                    <div class="col-md-6 text-right">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                  <!-- /.box-body -->
                </form>
              </div>

            </div>
          </div>

        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Reclamos</h3>
              
              <div class="box-tools pull-right">
              </div>
            </div>


            <div class="box-body">
              <div class="row">
                <table id="tblReclamo" 
                       data-search="true"
                       data-show-refresh="true"
                       data-show-toggle="true"
                       data-show-columns="true"
                       data-query-params="queryParams"
                       data-pagination="true" 
                       data-toolbar="#toolbar"
                       class="table table-hover"
                         >
                      <thead>
                      <tr>
                          <th data-field="consumidor">Consumidor</th>
                          <th data-field="numero">Núm Reclamo</th>
                          <th data-field="nombre">Nombre</th>
                          <th data-field="apellidos">Apellidos</th>
                          <th data-field="ci">Ci</th>
                          <th data-field="descripcion">Descripcion</th>
                          <th data-field="accion"
                              data-align="center"
                              data-formatter="actionFormatter"
                              data-events="actionEvents"></th>
                      </tr>
                      </thead>
                </table>
              </div>
            </div>
          </div>
        </div>
        
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Gestión de Reclamos</h3>
              <div class="box-tools pull-right">
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <div class="row">
                
                
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
                      <div class="panel panel-primary setup-content" id="step-1">
                          <div class="panel-heading">
                               <h3 class="panel-title">Reclamante</h3>
                          </div>
                          <div class="panel-body">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Nombre</label>
                                    <input maxlength="100" type="text" class="form-control" placeholder="Nombre" name="nombre" />
                                </div>
                              </div>

                              <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Apellido Paterno</label>
                                    <input maxlength="100" type="text" class="form-control" placeholder="Apellido Paterno" name="apellido_paterno" />
                                </div>
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label class="control-label">Apellido Materno</label>
                                  <input maxlength="100" type="text" class="form-control" placeholder="Apellido Materno" name="apellido_materno" />
                                </div>
                              </div>

                              <div class="col-md-6">
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label class="control-label">Ci</label>
                                  <input maxlength="100" type="text" class="form-control" placeholder="número de identificación" name="ci" />
                                </div>
                              </div>

                              <div class="col-md-6">
                                <div class="form-group">
                                  <label class="control-label">Expedido</label>
                                  <div class="input-group">
                                    <input type="text" class="form-control" aria-label="...">
                                    <div class="input-group-btn">
                                      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CB <span class="caret"></span></button>
                                      <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#">Cochabamba</a></li>
                                        <li><a href="#">La Paz</a></li>
                                        <li><a href="#">Santa Cruz</a></li>
                                        <li><a href="#">Chuquisaca</a></li>
                                        <li><a href="#">Potosi</a></li>
                                        <li><a href="#">Tarija</a></li>
                                        <li><a href="#">Beni</a></li>
                                        <li><a href="#">Pando</a></li>
                                        <li><a href="#">Oruro</a></li>
                                      </ul>
                                    </div><!-- /btn-group -->
                                  </div><!-- /input-group -->
                                </div>
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label class="control-label">Num Casa</label>
                                  <input maxlength="100" type="text" class="form-control" placeholder="Número Casa" name="numero_casa" />
                                </div>
                              </div>

                              <div class="col-md-6">
                                <div class="form-group">
                                  <label class="control-label">Num Piso</label>
                                  <input maxlength="100" type="text" class="form-control" placeholder="Número de piso" name="numero_piso" />
                                </div>
                              </div>
                            </div>


                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label class="control-label">Dirección</label>
                                  <input maxlength="100" type="text" class="form-control" placeholder="dirección" name="direccion" />
                                </div>
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label class="control-label">Observación</label>
                                  <textarea name="" rows="5" class="form-control" placeholder="observación del reclamo" name="observacon"></textarea>
                                </div>
                              </div>
                            </div>
                            
                              <button class="btn btn-primary nextBtn pull-right" type="button">Siguiente</button>
                          </div>
                      </div>
                      
                      <div class="panel panel-primary setup-content" id="step-2">
                          <div class="panel-heading">
                               <h3 class="panel-title">Notificación</h3>
                          </div>
                          <div class="panel-body">

                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label class="control-label">Sucursal</label>
                                  <select class="form-control input-lg select2Default" name="sucursal" onchange="changeNotificacion(event)">
                                    <option value=""></option>
                                    <option value="REAL">Real</option>
                                    <option value="PROCESAL">Procesal</option>
                                    <option value="ESPECIAL">Especial</option>
                                  </select>
                                </div>

                              </div>

                              <div class="col-md-6">
                              </div>
                            </div>

                            <div class="row" id="divReal" style="display:none">
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label class="control-label">Dirección</label>
                                  <input type="text" class="form-control" placeholder="dirección" name="direccion" />
                                </div>
                              </div>
                            </div>

                            <div class="row" id="divEspecial" style="display:none">
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label class="control-label">Sucursal</label>
                                  <select class="form-control input-lg select2Default" name="sucursal" >
                                    <option value="AL">Cala Cala</option>
                                    <option value="WY">6 de Agosto</option>
                                    <option value="WY">Tiquipaya</option>
                                    <option value="WY">Huarakasa</option>
                                  </select>
                                </div>
                              </div>
                            </div>  

                            <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
                          </div>
                      </div>
                      
                      <div class="panel panel-primary setup-content" id="step-3">
                          <div class="panel-heading">
                               <h3 class="panel-title">Documentos</h3>
                          </div>
                          <div class="panel-body">
                              
                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label class="control-label">Documentos</label>
                                  <input id="input-ke-1" name="input-ke-1[]" type="file" multiple accept="image" class="form-control">
                                </div>
                              </div>
                            </div>


                              Documentos
                              <button class="btn btn-success pull-right" type="submit">Finish!</button>
                          </div>
                      </div>
                  </form>
                </div>
                
              </div>
              <!-- /.row -->
            </div>
            <!-- ./box-body -->
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



<?php $this->stop() ?>

<?php $this->start('script') ?>
<script type="text/javascript">
$(document).ready(function () {
  
    /*$( ".sucursal" ).select2( {
      theme: "bootstrap",
      placeholder: "Seleccione Sucursal",
      maximumSelectionSize: 6,
      containerCssClass: ':all:',
      allowClear: true
    } );


    var navListItems = $('div.setup-panel div a'),
        allWells = $('.setup-content'),
        allNextBtn = $('.nextBtn');

    allWells.hide();
    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
            $item = $(this).closest(".info-box");

        if (!$item.hasClass('disabled')) {
            navListItems.closest(".info-box").removeClass('bg-green ').addClass(' bg-aqua');
            $item.addClass('bg-green');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allNextBtn.click(function () {
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            //nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            nextStepWizard = $('div.setup-panel').find('a[href="#' + curStepBtn + '"]').closest('.stepwizard-step').next().find('a'),
            curInputs = curStep.find("input[type='text'],input[type='url']"),
            isValid = true;

        if (isValid) nextStepWizard.removeAttr('disabled').trigger('click');
    });
    $('div.setup-panel div div.bg-green').find('a').trigger('click');*/

    $("#input-ke-1").fileinput({
        theme: "explorer",
        uploadUrl: "/file-upload-batch/2",
        allowedFileExtensions: ['jpg', 'png', 'gif'],
        overwriteInitial: false,
        initialPreviewAsData: true,
    });

    var data = [
        {
            "id":"1",
            "consumidor": 1,
            "numero": "1",
            "nombre": "Ricardo",
            "apellidos": "Arce Montero",
            "ci": 6512478,
            "descripcion" : "Consumidor a especificado que no tiene servicio de gas domiciliario",
            'accion': ""
        },
        {
            "id":"2",
            "consumidor": 1,
            "numero": "2",
            "nombre": "Juan",
            "apellidos": "Gutierres Salvado",
            "ci": 5412987,
            "descripcion" : "El consumidor ha espcificado no tener gas dominiciliario",
            'accion': ""
        },
        {
            "id":"3",
            "consumidor": 2,
            "numero": "3",
            "nombre": "Denis",
            "apellidos": "Mamani Canavir",
            "ci": 56412587,
            "descripcion" : "Consumdo elevado por el periodo de enero",
            "accion" : ""
        },
        {
            "id":"4",
            "consumidor": 3,
            "numero": "4",
            "nombre": "Maria",
            "apellidos": "Ordoñez Sandoval",
            "ci": 6524587,
            "descripcion" : "Consumidor ha reportado cortes reiterados",
            "accion" : ""
        },
        {
            "id":"5",
            "consumidor": 5,
            "numero": "5",
            "nombre": "Oscar",
            "apellidos": "Montaño Esquinero",
            "ci": 5432198,
            "descripcion" : "Anomalias en la red"
        },
        {
            "id":"6",
            "consumidor": 6,
            "numero": "6",
            "nombre": "Ricardo",
            "apellidos": "Arce Montero",
            "ci": 6512478,
            "descripcion" : "Consumidor a especificado que no tiene servicio de gas domiciliario",
            "accion" : ""
        },
        {
            "id":"7",
            "consumidor": 7,
            "numero": "7",
            "nombre": "Juan",
            "apellidos": "Gutierres Salvado",
            "ci": 5412987,
            "descripcion" : "El consumidor ha espcificado no tener gas dominiciliario",
            "accion" : ""
        },
        {
            "id":"8",
            "consumidor": 8,
            "numero": "9",
            "nombre": "Denis",
            "apellidos": "Mamani Canavir",
            "ci": 56412587,
            "descripcion" : "Consumdo elevado por el periodo de enero",
            "accion" : ""
        },
        {
            "id":"9",
            "consumidor": 9,
            "numero": "10",
            "nombre": "Maria",
            "apellidos": "Ordoñez Sandoval",
            "ci": 6524587,
            "descripcion" : "Consumidor ha reportado cortes reiterados",
            "accion" : ""
        },
        {
            "id":"10",
            "consumidor": 10,
            "numero": "11",
            "nombre": "Oscar",
            "apellidos": "Montaño Esquinero",
            "ci": 5432198,
            "descripcion" : "Anomalias en la red",
            "accion" : ""
        },
        {
            "id":"11",
            "consumidor": 11,
            "numero": "15",
            "nombre": "Oscar",
            "apellidos": "Montaño Esquinero",
            "ci": 5432198,
            "descripcion" : "Anomalias en la red",
            "accion" : ""
        }
    ]

    $('#tblReclamo').bootstrapTable({
        data: data
    });
});

function changeNotificacion(event){
  var target = event.target;

  if(Boolean(target)){
    console.log(target);
    var option_selected = target.selectedOptions[0];
    if(Boolean(option_selected)   ){
      $("#divReal").find("input[name='direccion']").val('');
      switch(option_selected.value){
        case "REAL":
          $("#divReal").show();
          $("#divReal").find("input[name='direccion']").attr('readonly', 'readonly');
          $("#divReal").find("input[name='direccion']").val('direccion real que especifica el reclamante');
          $("#divEspecial").hide();
          break;
        case "PROCESAL":
          $("#divReal").show();
          $("#divReal").find("input[name='direccion']").removeAttr('readonly');
          $("#divEspecial").hide();
          break;
        case "ESPECIAL":
          $("#divEspecial").show();
          $("#divReal").hide();
          break;
      }
    }
  }
}
</script>
<?php $this->stop() ?>
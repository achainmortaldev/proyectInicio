<?php $this->layout('partials/layout', ['title' => 'User Profile']) ?>

<?php $this->start('style') ?>
<?php $this->stop() ?>

<?php $this->start('contenido') ?>

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

      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="callout callout-info" style="min-height: 60px; overflow:hidden">
            <div class="row">
              <div class="col-lg-5 col-md-6 col-sm-12 " style="padding-bottom: 10px;">
                <div class="btn-group" role="group" aria-label="actions"> 
                  <a href="<?php echo site_url("reclamo/recepcion") ?>" class="btn btn-primary" id="btnAddClaimer" title="Registrar Reclamo"><i class="fa fa-fw fa-plus" ></i></a>

                  <a href="<?php echo site_url("reclamo/derivacion")."?reclamo=" ?>" class="btn btn-default" id="btnDerivation" title="Derivación" style="display:none; color: #444;"><i class="fa fa-fw fa-exchange" ></i></a>

                  <a href="<?php echo site_url("reclamo/pronunciamiento")."?reclamo=" ?>" class="btn btn-default" id="btnPronunciamiento" title="Pronunciamento" style="display:none; color: #444;"><i class="fa fa-fw fa-gavel" ></i></a>

                  <a href="<?php echo site_url("reclamo/comunicacion")."?reclamo=" ?>" class="btn btn-default" id="btnComunication" title="Comunicación" style="display:none; color: #444;" ><i class="fa fa-fw fa-bullhorn"></i></a>

                  <button type="button" class="btn btn-default" id="btnRefresh" title="Actualizar Datos"><i class="fa fa-fw fa-refresh" ></i>&nbsp;</button>
                </div>
                <div class="clearfix"></div>
              </div>

              <div class="col-lg-7 col-md-7 col-sm-12" style="padding-bottom: 10px;">
                <div class="input-group">
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ingreso texto a buscar">
                  <span class="input-group-btn">
                    <button type="button" class="btn btn-default" data-toggle="collapse" data-parent="#accordion" aria-expanded="true" data-target="#collapseOne" ><i class="fa fa-fw fa-search"></i>&nbsp;</button>
                  </span>
                </div><!-- /input-group -->
                <div class="clearfix"></div>
              </div>
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

      <div class="row" id="divTableClaimer">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Reclamos</h3>
              
              <div class="box-tools pull-right">
              </div>
            </div>
            <div class="box-body">
              <div class="row">
                <table id="tblReclamo" class="table table-hover">
                      <thead>
                      <tr>
                          <th data-field="consumidor">Consumidor</th>
                          <th data-field="numero">Núm Reclamo</th>
                          <th data-field="nombre">Nombre</th>
                          <th data-field="apellidos">Apellidos</th>
                          <th data-field="ci">Ci</th>
                          <th data-field="descripcion">Descripcion</th>
                          <th data-field="accion" data-align="center"
                              data-events="actionEvents"></th>
                      </tr>
                      </thead>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php $this->stop() ?>

<?php $this->start('script') ?>
<script type="text/javascript">
  $(document).ready(function () {

      var data = [
          {
              "id":"1000",
              "consumidor": 1,
              "numero": "1",
              "nombre": "Ricardo",
              "apellidos": "Arce Montero",
              "ci": 6512478,
              "descripcion" : "Consumidor a especificado que no tiene servicio de gas domiciliario",
              'accion': "<input type='checkbox' data-accion='click' name='check'>"
          },
          {
              "id":"2",
              "consumidor": 1,
              "numero": "2",
              "nombre": "Juan",
              "apellidos": "Gutierres Salvado",
              "ci": 5412987,
              "descripcion" : "El consumidor ha espcificado no tener gas dominiciliario",
              'accion': "<input type='checkbox' data-accion='click' name='check'>"
          },
          {
              "id":"3",
              "consumidor": 2,
              "numero": "3",
              "nombre": "Denis",
              "apellidos": "Mamani Canavir",
              "ci": 56412587,
              "descripcion" : "Consumdo elevado por el periodo de enero",
              "accion" : "<input type='checkbox' data-accion='click' name='check'>"
          },
          {
              "id":"4",
              "consumidor": 3,
              "numero": "4",
              "nombre": "Maria",
              "apellidos": "Ordoñez Sandoval",
              "ci": 6524587,
              "descripcion" : "Consumidor ha reportado cortes reiterados",
              "accion" : "<input type='checkbox' data-accion='click' name='check'>"
          },
          {
              "id":"5",
              "consumidor": 5,
              "numero": "5",
              "nombre": "Oscar",
              "apellidos": "Montaño Esquinero",
              "ci": 5432198,
              "descripcion" : "Anomalias en la red",
              "accion": "<input type='checkbox' data-accion='click' name='check'>"
          },
          {
              "id":"6",
              "consumidor": 6,
              "numero": "6",
              "nombre": "Ricardo",
              "apellidos": "Arce Montero",
              "ci": 6512478,
              "descripcion" : "Consumidor a especificado que no tiene servicio de gas domiciliario",
              "accion" : "<input type='checkbox' data-accion='click' name='check'>"
          },
          {
              "id":"7",
              "consumidor": 7,
              "numero": "7",
              "nombre": "Juan",
              "apellidos": "Gutierres Salvado",
              "ci": 5412987,
              "descripcion" : "El consumidor ha espcificado no tener gas dominiciliario",
              "accion" : "<input type='checkbox' data-accion='click' name='check'>"
          },
          {
              "id":"8",
              "consumidor": 8,
              "numero": "9",
              "nombre": "Denis",
              "apellidos": "Mamani Canavir",
              "ci": 56412587,
              "descripcion" : "Consumdo elevado por el periodo de enero",
              "accion" : "<input type='checkbox' data-accion='click'name='check'>"
          },
          {
              "id":"9",
              "consumidor": 9,
              "numero": "10",
              "nombre": "Maria",
              "apellidos": "Ordoñez Sandoval",
              "ci": 6524587,
              "descripcion" : "Consumidor ha reportado cortes reiterados",
              "accion" : "<input type='checkbox' data-accion='click' name='check'>"
          },
          {
              "id":"10",
              "consumidor": 10,
              "numero": "11",
              "nombre": "Oscar",
              "apellidos": "Montaño Esquinero",
              "ci": 5432198,
              "descripcion" : "Anomalias en la red",
              "accion" : "<input type='checkbox' data-accion='click' name='check'>"
          },
          {
              "id":"11",
              "consumidor": 11,
              "numero": "15",
              "nombre": "Oscar",
              "apellidos": "Montaño Esquinero",
              "ci": 5432198,
              "descripcion" : "Anomalias en la red",
              "accion" : "<input type='checkbox' data-accion='click' name='check'>"
          }
      ]

      $('#tblReclamo').toTable({
          data: data,
          onClickRow: function (dataRow, objetTrJQ){

            var btn_derivacion = $("#btnDerivation");
            var btn_pronunciamiento = $("#btnPronunciamiento");
            var btn_comunicacion = $("#btnComunication");

            $.toTableSelectRow(objetTrJQ, function(selected){
              if(selected){
                btn_derivacion.show();
                btn_pronunciamiento.show();
                btn_comunicacion.show();

                btn_derivacion.animacionBuzzOut(3000);
                btn_pronunciamiento.animacionBuzzOut(3000);
                btn_comunicacion.animacionBuzzOut(3000);
              }else{
                btn_derivacion.hide();
                btn_pronunciamiento.hide();
                btn_comunicacion.hide();
              }
            });
            
            var data_param_request = dataRow.numero+"_"+dataRow.id+"_"+dataRow.ci+"_"+dataRow.consumidor;

            btn_derivacion.attr('data-reclamo', data_param_request);
            btn_pronunciamiento.attr('data-reclamo', data_param_request);
            btn_comunicacion.attr('data-reclamo', data_param_request);
          },
          rowStyle: function (row, index) {
            return {};
          },
      });
  });
</script>
<?php $this->stop() ?>
<?php $this->layout('partials/layout', ['title' => 'User Profile']) ?>

<?php $this->start('style') ?>
<?php $this->stop() ?>

<?php $this->start('contenido') ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  	<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>PRONUNCIAMIENTO<small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#"> Reclamo</a></li>
        <li class="active">Pronunciamiento</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row" id="divPanelPronunciamiento" >
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Gestión de Pronunciamiento</h3>
              <div class="box-tools pull-right">
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- bloque derivacion-->
              <div id="divStepPronunciamiento">
                <div class="row"  >                
                  <div class="stepwizard">
                      <div class="stepwizard-row setup-panel">
                          <div class="stepwizard-step col-xs-4"> 
                              <div class="info-box bg-green " >
                                <a href="#step-1" class="info-box-icon" style="color:white"><i class="fa fa-fw fa-newspaper-o"></i></a>

                                <div class="info-box-content">
                                  <span class="info-box-text">Pronunciamiento</span>
                                </div>
                              </div>
                          </div>
                          <div class="stepwizard-step col-xs-4"> 
                              <div class="info-box bg-aqua " >
                                <a href="#step-2" class="info-box-icon" style="color:white"><i class="fa fa-fw fa-briefcase"></i></a>
                                <div class="info-box-content">
                                  <span class="info-box-text">Documentos</span>
                                  <span class="info-box-text">pdf, jpeg, jpg, png, gif</span>
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
                          <h3 class="box-title">Pronunciamiento</h3>
                        </div>

                        <div class="box-body">
                          <div class="row">
                            <div class="col-lg-12 col-md-12 col-ms-12">
                              <div class="form-group">
                                <label for="pronunciamiento[respuesta]">Respuesta</label>
                                <textarea class="form-control" name="pronunciamiento[respuesta]" placeholder="Ingresa la respuesta pronunciado de la empresa" rows="4"></textarea>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-lg-12 col-md-12 col-ms-12">
                              <div class="form-group">
                                <label for="pronunciamiento[demora]">Motivo Demora</label>
                                <input type="text" class="form-control" id="pronunciamiento[demora]" placeholder="Ingresa el motivo de la demora">
                              </div>
                            </div>
                          </div>
                          
                          <div class="row">
                            <div class=" col-lg-6 col-md-6 col-ms-12">
                              <div class="form-group">
                                <label for="pronunciamiento[pronunciamiento]">Pronuciamiento</label>
                                <select class="form-control input-lg" name="pronunciamiento[pronunciamiento]" >
                                            <option value="">--Seleccione--</option>
                                            <option value="PROCEDENTE">Procendente</option>
                                            <option value="IMPROCEDENTE">Improcedente</option>
                                  </select>
                              </div>
                            </div>

                            <div class=" col-lg-6 col-md-6 col-ms-12">
                            </div>
                          </div>
                          
                          <button class="btn btn-primary nextBtn pull-right" type="button">Siguiente</button>
                        </div>
                      </div>

                      <div class="box box-primary setup-content" data-step="step-2">
                        <div class="box-header with-border">
                          <h3 class="box-title">Documentos</h3>
                        </div>

                        <div class="box-body">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label class="control-label"></label>
                                <input id="inputPronunciamiento" name="inputPronunciamiento[]" type="file" multiple accept="image" class="form-control">
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

      $("#inputPronunciamiento").fileinput({
          theme: "explorer",
          uploadUrl: "/file-upload-batch/2",
          allowedFileExtensions: ['jpg', 'png', 'gif'],
          overwriteInitial: false,
          initialPreviewAsData: true,
      });

      $("#divStepPronunciamiento").toStepByStep();
  });

</script>
<?php $this->stop() ?>
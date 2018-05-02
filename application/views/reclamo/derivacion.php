<?php $this->layout('partials/layout', ['title' => 'User Profile']) ?>

<?php $this->start('style') ?>
<?php $this->stop() ?>

<?php $this->start('contenido') ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  	<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>DERIVACION<small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#"> Reclamo</a></li>
        <li class="active">Derivacion</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    	<div class="row" id="divPanelDerivacion" >
			<div class="col-md-12">
			    <div class="box">
			      <div class="box-header with-border">
			        <h3 class="box-title">Gestión de la Derivación</h3>
			        <div class="box-tools pull-right">
			        </div>
			      </div>
			      <!-- /.box-header -->
			      <div class="box-body">
			        <!-- bloque derivacion-->
			        <div id="divStepDerivacion">
			          <div class="row"  >                
			            <div class="stepwizard">
			              <div class="stepwizard-row setup-panel">
			                <div class="stepwizard-step col-xs-4"> 
			                    <div class="info-box bg-green " >
			                      <a href="#step-1" class="info-box-icon" style="color:white"><i class="fa fa-fw fa-newspaper-o"></i></a>

			                      <div class="info-box-content">
			                        <span class="info-box-text">Derivacion</span>
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
			                      <h3 class="box-title">Derivación</h3>
			                    </div>

			                    <div class="box-body">
			                      <div class="row">
			                        <label for="slcDerivacionSector" class="control-label  col-lg-2 col-md-2 col-sm-12" style="padding-top:10px">Sectores</label>
			                          <div class="col-lg-10 col-md-10 col-sm-12">
			                            <div class="input-group">
			                              <select class="form-control input-lg select2Default" name="slcDerivacionSector" style="width:100%; height:30px" >
			                                        <option value=""></option>
			                                        <option value="AC">Atención Al Cliente</option>
			                                        <option value="COI">Centro de Operaciones y Mantenimiento</option>
			                              </select>
			                              <span class="input-group-btn">
			                                <button class="btn btn-default" type="button" style="height: 45px;" onclick="clickAddSector(event)"><i class="glyphicon glyphicon-plus" ></i></button>
			                              </span>
			                            </div><!-- /input-group -->
			                          </div>
			                      </div>

			                      <br>
			                      <div class="row">
			                        <div class="col-md-12">
			                          <table id="tblDerivacionSectores" 
			                                 class="table table-hover"
			                                   >
			                                <thead>
			                                <tr>
			                                    <th data-field="codigo">Código</th>
			                                    <th data-field="Sector">Sector</th>
			                                    <th data-field="accion" data-align="center" data-events="actionEvents"></th>
			                                </tr>
			                                </thead>
			                                <tbody>
			                                </tbody>
			                          </table>
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
			                              <input id="inputDerivacion" name="inputDerivacion[]" type="file" multiple accept="image" class="form-control">
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

	    $("#inputDerivacion").fileinput({
	        theme: "explorer",
	        uploadUrl: "/file-upload-batch/2",
	        allowedFileExtensions: ['jpg', 'png', 'gif'],
	        overwriteInitial: false,
	        initialPreviewAsData: true,
	    });

	    $("#divStepDerivacion").toStepByStep();
	});

	function clickAddSector(event){
	  var target = event.target;
	  if(Boolean(target)){
	    var form = $(target).closest('form');
	    var sector = form.find("select[name='slcDerivacionSector'] option:selected");
	    var table = $(target).closest('form').find("#tblDerivacionSectores");
	    if(sector.length > 0 && Boolean(sector)){
	      sector = sector[0];
	      var tr = "<tr>";
	      tr += "<td>"+sector.getAttribute("value")+"</td>";
	      tr += "<td>"+sector.innerText+"</td>";
	       tr += "<td> <a href='#' onclick='$.toTableDeleteRow(event.target.closest(\"tr\") )'><i class='glyphicon glyphicon-trash'></i></a></td>";
	      tr += "</tr>";
	      table.append(tr);
	    }
	  }
	}
</script>
<?php $this->stop() ?>
/******************************************************************************/
/****   STEP BY STEP ****/
/** EJEMPLO **/
/*
<div id="divStepRecepcion">
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
                  </div>
                </div>
            </div>
        </div>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-12 col-md-12">
    <form role="form">
        <div class="panel panel-primary setup-content" data-step="step-1" >
            <div class="panel-heading">
                 <h3 class="panel-title">Reclamante</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                BODY
              </div>
              <button class="btn btn-primary nextBtn pull-right" type="button">Siguiente</button>
            </div>
        </div>
        
        <div class="panel panel-primary setup-content" data-step="step-2" >
            <div class="panel-heading">
                 <h3 class="panel-title">Notificación</h3>
            </div>

            <div class="panel-body">
              <div class="row" >
                 BODY
              </div>  

              <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
            </div>
        </div>
        
        <div class="panel panel-primary setup-content" data-step="step-3">
            <div class="panel-heading">
                 <h3 class="panel-title">Documentos</h3>
            </div>
            <div class="panel-body">
                
              <div class="row">
                BODY
              </div>
                
              <button class="btn btn-success pull-right" type="submit">Finish!</button>
            </div>
        </div>
    </form>
    </div>
  </div>
</div>

///INVOCE JS
$("#divStepRecepcion").toStepByStep();
*/

$.fn.toStepByStep = function () {

    var self = $(this);
    var navListItems = self.find('div.setup-panel div a');
    var allWells = self.find('.setup-content');
    var allNextBtn = self.find('.nextBtn');

    allWells.hide();
    navListItems.click(function (e) {
        e.preventDefault(); 
        var $target = self.find("div[data-step="+$(this).attr('href').replace("#", "")+"]" ),
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
        var curStep = $(this).closest(".setup-content");
        var curStepBtn = curStep.attr("data-step");
        var nextStepWizard = $('div.setup-panel').find('a[href="#' + curStepBtn + '"]').closest('.stepwizard-step').next().find('a');
        var curInputs = curStep.find("input[type='text'],input[type='url']");
        nextStepWizard.removeAttr('disabled').trigger('click');
    });
    self.find('div.setup-panel div div.bg-green').find('a').trigger('click');
};
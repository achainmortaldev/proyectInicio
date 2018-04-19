$(document).ready(function () {
  
    $( ".select2Default" ).select2( {
      theme: "bootstrap",
      placeholder: "--Seleccione--",
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
            nextStepWizard = $('div.setup-panel').find('a[href="#' + curStepBtn + '"]').closest('.stepwizard-step').next().find('a'),
            curInputs = curStep.find("input[type='text'],input[type='url']"),
            isValid = true;

        if (isValid) nextStepWizard.removeAttr('disabled').trigger('click');
    });
    $('div.setup-panel div div.bg-green').find('a').trigger('click');
});
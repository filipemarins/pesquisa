$(document).ready(function(){
    if($('#pes_pesonascer:checked').length){
        $('#pes_peso').attr('readonly',true).val(''); // On Load, should it be read only?
    }

    $('#pes_pesonascer').change(function(){
        if($('#pes_pesonascer:checked').length){
            $('#pes_peso').attr('readonly',true).val(''); //If checked - Read only
            $('#pes_peso').parent().css( "background-color", "#f0f0f0" ); //If checked - Read only
        }else{
            $('#pes_peso').attr('readonly',false);//Not Checked - Normal
            $('#pes_peso').parent().css( "background-color", "#fff" );
        }
    });
});

$(document).ready(function(){
    if($('#mul_partosnormais:checked').length){
         //If checked - Read only

    }

    $('#mul_partosnormais').change(function(){
        if($('#mul_partosnormais:checked').length){
            $('#partosnormais').attr('readonly',true).val(''); //If checked - Read only
            $('#partosnormais').parent().addClass("disabled");
        }else{
            $('#partosnormais').attr('readonly',false);//Not Checked - Normal
            $('#partosnormais').parent().removeClass("disabled");

        }
    });
});

$(document).ready(function(){
    if($('#mul_partoscesario:checked').length){
    }

    $('#mul_partoscesario').change(function(){
        if($('#mul_partoscesario:checked').length){
            $('#partoscesario').attr('readonly',true).val(''); //If checked - Read only
            $('#partoscesario').parent().addClass("disabled");
        }else{
            $('#partoscesario').attr('readonly',false);//Not Checked - Normal
            $('#partoscesario').parent().removeClass("disabled");

        }
    });
});



$(document).ready(function(){
    if($('#mul_partoforceps:checked').length){
    }

    $('#mul_partoforceps').change(function(){
        if($('#mul_partoforceps:checked').length){
            $('#partoforceps').attr('readonly',true).val(''); //If checked - Read only
            $('#partoforceps').parent().addClass("disabled");
        }else{
            $('#partoforceps').attr('readonly',false);//Not Checked - Normal
            $('#partoforceps').parent().removeClass("disabled");
        }
    });
});


$(document).ready(function(){
    if($('#mul_partoprematuro:checked').length){
    }

    $('#mul_partoprematuro').change(function(){
        if($('#mul_partoprematuro:checked').length){
            $('#partoprematuro').attr('readonly',true).val(''); //If checked - Read only
            $('#partoprematuro').parent().addClass("disabled");

        }else{
            $('#partoprematuro').attr('readonly',false);//Not Checked - Normal
            $('#partoprematuro').parent().removeClass("disabled");

        }
    });
});


$(document).ready(function(){
    if($('#mul_partotermo:checked').length){
    }

    $('#mul_partotermo').change(function(){
        if($('#mul_partotermo:checked').length){
            $('#partotermo').attr('readonly',true).val(''); //If checked - Read only
            $('#partotermo').parent().addClass("disabled");

        }else{
            $('#partotermo').attr('readonly',false);//Not Checked - Normal
            $('#partotermo').parent().removeClass("disabled");

        }
    });
});


$(document).ready(function(){
    if($('#mul_postermo:checked').length){
    }

    $('#mul_postermo').change(function(){
        if($('#mul_postermo:checked').length){
            $('#postermo').attr('readonly',true).val(''); //If checked - Read only
            $('#postermo').parent().addClass("disabled");

        }else{
            $('#postermo').attr('readonly',false);//Not Checked - Normal
            $('#postermo').parent().removeClass("disabled");

        }
    });
});


$(document).ready(function(){

    if($('#mul_qtdgestao:checked').length){
        $('#qtdgestao').attr('readonly',true).val(''); // On Load, should it be read only?
        $('#qtdfilhos').attr('readonly',true).val(''); // On Load, should it be read only?

    }

    $('#mul_qtdgestao').change(function(){
        if($('#mul_qtdgestao:checked').length){
            $('#qtdgestao').attr('readonly',true).val('');
            $('#mul_qtdgestao_wrap').addClass("disabled");

            $('#qtdfilhos').attr('readonly',true).val(''); // On Load, should it be read only?
            $('#mul_qtdfilhos_wrap').addClass("disabled");

            $('#partosnormais').attr('readonly',true).val(''); //If checked - Read only
            $('#mul_partosnormais_wrap').addClass("disabled");

            $('#mul_partosnormais').attr('disabled',true).val(''); //If checked - Read only
            $('#mul_partosnormais').attr('checked',true).val(''); //If checked - Read only
            $('#mul_partosnormais_wrap').addClass("disabled");
            
            $('#postermo').attr('readonly',true).val(''); //If checked - Read only
            $('#postermo_wrap').addClass("disabled");

            $('#mul_postermo').attr('disabled',true).val(''); //If checked - Read only
            $('#mul_postermo').attr('checked',true).val(''); //If checked - Read only
            $('#mul_postermo_wrap').addClass("disabled");


            $('#partotermo').attr('readonly',true).val(''); //If checked - Read only
            $('#partotermo_wrap').addClass("disabled");

            $('#mul_partotermo').attr('disabled',true).val(''); //If checked - Read only
            $('#mul_partotermo').attr('checked',true).val(''); //If checked - Read only
            $('#mul_partotermo_wrap').addClass("disabled");

            $('#partoprematuro').attr('readonly',true).val(''); //If checked - Read only
            $('#partoprematuro_wrap').addClass("disabled");
            $('#mul_partoprematuro').attr('disabled',true).val(''); //If checked - Read only
            $('#mul_partoprematuro').attr('checked',true).val(''); //If checked - Read only
            $('#mul_partoprematuro_wrap').addClass("disabled");



            $('#partoforceps').attr('readonly',true).val(''); //If checked - Read only
            $('#partoforceps_wrap').addClass("disabled");
            $('#mul_partoforceps').attr('disabled',true).val(''); //If checked - Read only
            $('#mul_partoforceps').attr('checked',true).val(''); //If checked - Read only
            $('#mul_partoforceps_wrap').addClass("disabled");



            $('#partoscesario').attr('readonly',true).val(''); //If checked - Read only
            $('#partoscesario_wrap').addClass("disabled");
            $('#mul_partoscesario').attr('disabled',true).val(''); //If checked - Read only
            $('#mul_partoscesario').attr('checked',true).val(''); //If checked - Read only
            $('#mul_partoscesario_wrap').addClass("disabled");


            
            $('.mul_probgestacional').attr('disabled',true);
            $('.mul_probgestacionalconc').attr('disabled',true);
            $('#mul_probgestacional_wrap').addClass("disabled");
            $('#mul_probgestacionalconc_wrap').addClass("disabled");

            //

        }else{
            $('#qtdgestao').attr('readonly',false);//Not Checked - Normal
            $('#mul_qtdgestao_wrap').removeClass("disabled",true);
            

            $('#qtdfilhos').attr('readonly',false);//Not Checked - Normal
            $('#mul_qtdfilhos_wrap').removeClass("disabled",true);
            

            $('#mul_partosnormais').removeAttr('disabled',true).val(''); //If checked - Read only
            $('#mul_partosnormais').removeAttr('checked',true).val(''); //If checked - Read only
            $('#mul_partosnormais_wrap').removeClass("disabled",true);

            $('#mul_postermo').removeAttr('disabled',true).val(''); //If checked - Read only
            $('#mul_postermo').removeAttr('checked',true).val(''); //If checked - Read only
            $('#mul_postermo_wrap').removeClass("disabled",true);

            $('#mul_partotermo').removeAttr('disabled',true).val(''); //If checked - Read only
            $('#mul_partotermo').removeAttr('checked',true).val(''); //If checked - Read only
            $('#mul_partotermo_wrap').removeClass("disabled",true);

            $('#mul_partoprematuro').removeAttr('disabled',true).val(''); //If checked - Read only
            $('#mul_partoprematuro').removeAttr('checked',true).val(''); //If checked - Read only
            $('#mul_partoprematuro_wrap').removeClass("disabled");

            $('#mul_partoforceps').removeAttr('disabled',true).val(''); //If checked - Read only
            $('#mul_partoforceps').removeAttr('checked',true).val(''); //If checked - Read only
            $('#mul_partoforceps_wrap').removeClass("disabled",true);

            $('#mul_partoscesario').removeAttr('disabled',true).val(''); //If checked - Read only
            $('#mul_partoscesario').removeAttr('checked',true).val(''); //If checked - Read only
            $('#mul_partoscesario_wrap').removeClass("disabled",true);

            $('.mul_probgestacional').removeAttr('disabled',true);
            $('#mul_probgestacional_wrap').removeClass("disabled");
            $('.mul_probgestacionalconc').removeAttr('disabled',true);
            $('#mul_probgestacionalconc_wrap').removeClass("disabled",true);
            

        }
    });
});


var update_select = function () {
    if ($('#pes_trabalhan').is(':checked')) {
        $('#pes_hosrassemtrab').attr('disabled', "disabled").val('');
    }
    else {
        $("#pes_hosrassemtrab").removeAttr("disabled");
    }
};
$(update_select);
$('#offer').change(update_select);


var update_select = function () {

    if ($('#pes_sexom').is(':checked')) {
        $('#mul_wrap').hide('');
    }
    else if($('#pes_sexof').is(':checked')){
        $('#mul_wrap').show('');
        
    }else{
        $('#mul_wrap').hide('');
    }
};
$(update_select);
$('#pes_sexo_wrap').change(update_select);


$(document).ready(function(){

    $('.numbers').mask('0#');
    $("#cep").mask("99.999-999");

    $(".numeros").mask('99');
     $('.hour').mask('00:00');
     $('.hours').mask('00:00');
     $('.hourss').mask('00:00');
     $('.hoursss').mask('00:00');
     $('.hourssss').mask('00:00');
     

});
$( ".hour").focusout(function() {
    if($('.hour').val().length < 2 ){
        $('.hour').val( '0' + $('.hour').val() + ':00');
    }else if($('.hour').val().length < 3 ){
        $('.hour').val($('.hour').val() + ':00');
    }else if($('.hour').val().length < 5 ){
        $('.hour').val($('.hour').val() + '0');
    }
  });
$( ".hour").focusin(function() {
   
        $('.hour').val('0');

  });

$( ".hours").focusout(function() {
    if($('.hours').val().length < 2 ){
        $('.hours').val( '0' + $('.hours').val() + ':00');
    }else if($('.hours').val().length < 3 ){
        $('.hours').val($('.hours').val() + ':00');
    }else if($('.hours').val().length < 5 ){
        $('.hours').val($('.hours').val() + '0');
    }
  });
$( ".hours").focusin(function() {
   
        $('.hours').val('0');

  });

$( ".hourss").focusout(function() {
    if($('.hourss').val().length < 2 ){
        $('.hourss').val( '0' + $('.hourss').val() + ':00');
    }else if($('.hourss').val().length < 3 ){
        $('.hourss').val($('.hourss').val() + ':00');
    }else if($('.hourss').val().length < 5 ){
        $('.hourss').val($('.hourss').val() + '0');
    }
  });
$( ".hourss").focusin(function() {
   
        $('.hourss').val('0');

  });

$( ".hoursss").focusout(function() {
    if($('.hoursss').val().length < 2 ){
        $('.hoursss').val( '0' + $('.hoursss').val() + ':00');
    }else if($('.hoursss').val().length < 3 ){
        $('.hoursss').val($('.hoursss').val() + ':00');
    }else if($('.hoursss').val().length < 5 ){
        $('.hoursss').val($('.hoursss').val() + '0');
    }
  });
$( ".hoursss").focusin(function() {
   
        $('.hoursss').val('0');

  });

$( ".hourssss").focusout(function() {
    if($('.hourssss').val().length < 2 ){
        $('.hourssss').val( '0' + $('.hourssss').val() + ':00');
    }else if($('.hourssss').val().length < 3 ){
        $('.hourssss').val($('.hourssss').val() + ':00');
    }else if($('.hourssss').val().length < 5 ){
        $('.hourssss').val($('.hourssss').val() + '0');
    }
  });
$( ".hourssss").focusin(function() {
   
        $('.hourssss').val('0');

  });


var update_select = function () {

    if ($('#pes_atividadefisican').is(':checked')) {
       
        $('.pes_quaisatividades').attr('disabled',true).val('');
        $('.pes_quaisatividadesconc').attr('disabled',true);
       
        $('#pes_quaisatividades_wrap').addClass("disabled");
        $('#pes_quaisatividadesconc_wrap').addClass("disabled");
    }
    else{
        $('#pes_quaisatividades_wrap').removeClass("disabled");
        $('#pes_quaisatividadesconc_wrap').removeClass("disabled");


        $('.pes_quaisatividades').attr('disabled',false).val('');
        $('.pes_quaisatividadesconc').attr('disabled',false);
        
        
    }
};
$(update_select);
$('#pes_atividadefisica_wrap').change(update_select);

(function ($) {
    "use strict";


    /*==================================================================
    [ Focus input ]*/
    $('.input100').each(function(){
        $(this).on('blur', function(){
            if($(this).val().trim() != "") {
                $(this).addClass('has-val');
            }
            else {
                $(this).removeClass('has-val');
            }
        })    
    })
  
  
    /*==================================================================
    [ Validate ]*/
    var input = $('.validate-input .input100');

    $('.validate-form').on('submit',function(){
        var check = true;

        for(var i=0; i<input.length; i++) {
            if(validate(input[i]) == false){
                showValidate(input[i]);
                check=false;
            }
        }

        return check;
    });


    $('.validate-form .input100').each(function(){
        $(this).focus(function(){
           hideValidate(this);
        });
    });

    function validate (input) {
        if($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
            if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                return false;
            }
        }
        else {
            if($(input).val().trim() == ''){
                return false;
            }
        }
    }

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }
    
    /*  ==================================================
    [ Show pass ]*/
    var showPass = 0;
    $('.btn-show-pass').on('click', function(){
        if(showPass == 0) {
            $(this).next('input').attr('type','text');
            $(this).find('i').removeClass('zmdi-eye');
            $(this).find('i').addClass('zmdi-eye-off');
            showPass = 1;
        }
        else {
            $(this).next('input').attr('type','password');
            $(this).find('i').addClass('zmdi-eye');
            $(this).find('i').removeClass('zmdi-eye-off');
            showPass = 0;
        }
        
    });

    $('#ingresoProduct').on('click', function(){
        $('#tablaVentas').hide('fast');
        $('#FormularioProduct').show('slow');
    });

    $('.carritoo').on('click', function()
        window.location = "ProcesoDePago";
     });

    $('.addCarrito').on('click', function(e){
        e.preventDefault();
        var carro = $('.checkout_items').text();
        var formulario = $(this).children().children().next().next().val();

        var dataString = $('#'+formulario).serialize();

        $.ajax({
                type: "POST",
                url: "views/ajax/ajaxConTabla.php",
                data: dataString,
            })
        .done(function(data){
                carro = Number(carro) + 1;
                $('.checkout_items').text(carro);
                swal({
                    title: "¡OK!",
                    text: "¡Se ha añadido al carrito exitosamente!",
                    icon: "success",
                })
                 
            })
        .fail(function(data){
                console.log(data);
            })
    });

    $('.cantidadProducto').on('change', function(){
        var cantidad = $(this).val();

        var formulario = $(this).prev().val();

        var dataStringDos = $('#'+formulario).serialize();


        $.ajax({
                type: "POST",
                url: "views/ajax/ajaxCantidadCarrito.php",
                data: dataStringDos,
            })
        .done(function(data){
                swal({
                    title: "¡OK!",
                    text: "¡"+cantidad+" Excelente!",
                    icon: "success",
                })
                .then((result) => {
                    if (result) {
                        window.location = "ProcesoDePago"
                    }else{
                        window.location = "ProcesoDePago"
                    }
                })    
            })
        .fail(function(data){
                console.log(data);
            })

    });

})(jQuery);
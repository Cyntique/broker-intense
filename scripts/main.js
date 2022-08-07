function EnviarFormulario(){
    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    var name = $('#name').val();
    var apellido = $('#apellido').val();
    var cp = $('#cp').val();
    var email = $('#email').val();
    var dni = $('#dni').val();
    var patente = $('#patente').val();
    var gnc = $('#gnc:selected').text();
    var comercial = $('#comercial:selected').text();
    var alarma = $('#alarma:selected').text();
    if(name.trim() == '' ){
		alert('Por Favor ingrese su nombre.');
        $('#name').focus();
		return false;
	}else if(email.trim() == '' ){
		alert('Por favor ingrese su email.');
        $('#email').focus();
		return false;
	}else if(email.trim() != '' && !reg.test(email)){
		alert('Por favor ingrese un email valido.');
        $('#email').focus();
		return false;
	}else if(patente.trim() == '' ){
		alert('Por favor ingrese su patente para que podamos cotizar.');
        $('#patente').focus();
		return false;
	}else{
        $.ajax({
            type:'POST',
            url:'../scripts/forms.php',
            data:'ContactoEnviar=1&name='+name+'&apellido='+apellido+'&cp='+cp+'&email='+email+'&dni='+dni+'&patente='+patente+'&gnc='+gnc+'&comercial='+comercial+'&alarma='+alarma,
            beforeSend: function () {
                $('.submitBtn').attr("disabled","disabled");
                $('.modal-body').css('opacity', '.5');
            },
            success:function(msg){
                if(msg == 'bien'){
                    $('#name').val('');
                    $('#apellido').val('');
                    $('#cp').val('');
                    $('#email').val('');
                    $('#dni').val('')
                    $('#patente').val('');
                    $('#gnc:selected').text('');
                    $('#comercial:selected').text('');
                    $('#alarma:selected').text('');
                    $('.statusMsg').html('<span style="color:green;">Gracias por contactarnos, nos pondremos en contacto con usted pronto.</p>');
                }else{
                    $('.statusMsg').html('<span style="color:red;">Ha ocurrido algún problema, por favor intente de nuevo.</span>');
                }
                $('.submitBtn').removeAttr("disabled");
                $('.modal-body').css('opacity', '');
            }
        });
    }
}
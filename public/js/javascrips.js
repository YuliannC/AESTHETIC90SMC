$(function(){

    $("#frmRegistrar").submit(function(){
        var datos = $(this).serialize(); //te obtine todos loa input con sus valors
        var url = $(this).attr("action"); //de el atributo action me obtenga lo que tiene el formulario se lo asigna a la variable url
        
        $.post(url , datos, function(e){
            swal.fire(
               e.mensaje,
               e.title,
               e.icono
             )
            $("#frmRegistrar").trigger("reset");
        },'json');
        return false;
    });
    
    $("#frmEditar").submit(function(){
         var datos = $(this).serialize(); 
         var url = $(this).attr("action"); 
        
         $.post(url , datos, function(e){
            swal.fire(
                e.mensaje,
                '',
                e.icono
            )
            
         },'json');
         return false;
    });

    $("#apellidos").keyup(function(){
        var apellidos = $(this).val();
        var url ="?controlador=cliente&accion=consultarXapellidos";
       
        $.post(url, "apellidos="+apellidos, function(e){
            if(apellidos == ''){
                $("#resultado").html('');
            }else{
                $("#resultado").html(e.mensaje);
            }
        }, 'json');
    });

    $("#matricula").keyup(function(){
        var matricula = $(this).val();
        var url ="?controlador=coche&accion=consultarXmatricula";

        $.post(url, "matricula="+matricula, function(e){
            if(matricula == ''){
                $("#resultado").html('');
            }else{
                $("#resultado").html(e.mensaje);
            }
        }, 'json');
    });

    $("#fecha").keyup(function(){
        var fecha = $(this).val();
        var url ="?controlador=revision&accion=consultarXfecha";

        $.post(url, "fecha="+fecha, function(e){
            if(fecha == ''){
                $("#resultado").html('');
            }else{
                $("#resultado").html(e.mensaje);
            }
        }, 'json');
    });

    $("#codigo").keyup(function(){
        var codigo = $(this).val();
        var url ="?controlador=tipo_revision&accion=consultarXcodigo";

        $.post(url, "codigo="+codigo, function(e){
            if(codigo == ''){
                $("#resultado").html('');
            }else{
                $("#resultado").html(e.mensaje);
            }
        }, 'json');
    });

    $(document).on('click', '.eliminar', function(e){
        var url = $(this).attr("href");
        var elemento= $(this);
        

        Swal.fire({
            title: 'Confirmar Eliminacion?',
            text: "Se eliminara de la BD",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Aceptar',
            cancelButtonText: 'Cancelar'
          }).then((result) => {
            if (result.isConfirmed) {
                $.get(url, '', function(e){
                    elemento.closest("tr").remove();
                    Swal.fire(
                        e.mensaje,
                        '',
                        e.icono
                    )
                },'json'); 
            }
          })
        return false;
    });

    $("#frmLogin").submit(function(){
        var datos = $(this).serialize(); 
        var url = $(this).attr("action"); 
       
        $.post(url , datos, function(e){
            if(e.icono == "error"){
                Swal.fire(
                    e.mensaje,
                    '',
                    e.icono
                )
            }else{
                window.location.href = e.URL;
            }
           
           
        },'json');
        return false;
   });
    
});
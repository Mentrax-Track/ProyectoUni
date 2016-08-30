$(document).ready(function()
{
        $('#destino_id').on('change',function(e){

            var cant_id = e.target.value;

            //ajax
            $.get('/distancia?cant_id=' + cant_id, function (data){
                $('#kilome').empty();
                $.each(data,function(index, subcatObj){
                    $("#kilome").val(subcatObj.kilometraje);
                    //$('#kilome').append('<option value="'+ subcatObj.id+'">'+subcatObj.kilometraje+'</option>');
                });
            });
        });


        $('#dest1').on('change',function(e){

            var dest_id = e.target.value;

            //ajax
            $.get('/kilometraje?dest_id=' + dest_id, function (data){
                $('#k1').empty();
                $.each(data,function(index, desti){
                    $("#k1").val(desti.kilometraje);
                    //$('#k1').append('<option value="'+ desti.id+'">'+desti.kilometraje+'</option>');
                });
            });
        });
 

        $('#dest2').on('change',function(e){

            var dest_id = e.target.value;

            //ajax
            $.get('/kilometraje?dest_id=' + dest_id, function (data){
                $('#k2').empty();
                $.each(data,function(index, desti){
                    $("#k2").val(desti.kilometraje);
                    //$('#k2').append('<option value="'+ desti.id+'">'+desti.kilometraje+'</option>');
                });
            });
        });

    
        $('#dest3').on('change',function(e){

            var dest_id = e.target.value;

            //ajax
            $.get('/kilometraje?dest_id=' + dest_id, function (data){
                $('#k3').empty();
                $.each(data,function(index, desti){
                    $("#k3").val(desti.kilometraje);
                    //$('#k3').append('<option value="'+ desti.id+'">'+desti.kilometraje+'</option>');
                });
            });
        });


        $('#dest4').on('change',function(e){

            var dest_id = e.target.value;

            //ajax
            $.get('/kilometraje?dest_id=' + dest_id, function (data){
                $('#k4').empty();
                $.each(data,function(index, desti){
                    $("#k4").val(desti.kilometraje);
                    //$('#k4').append('<option value="'+ desti.id+'">'+desti.kilometraje+'</option>');
                });
            });
        });

    
        $('#dest5').on('change',function(e){

            var dest_id = e.target.value;

            //ajax
            $.get('/kilometraje?dest_id=' + dest_id, function (data)
            {
                console.log(data);
                $('#k5').empty();
                $.each(data,function(index, desti){
                    $("#k5").val(desti.kilometraje);
                    //$('#k5').append('<input value="'+ desti.id+'">'+desti.kilometraje+'</option>');
                });
            });
        });

});
/**
     * Funcion que se ejecuta cada vez que se añade una letra en un cuadro de texto
     * Suma los valores de los cuadros de texto
     */
    function sumar()
    {
        var kilome=verificar("kilome");
        var k1=verificar("k1");
        var k2=verificar("k2");
        var k3=verificar("k3");
        var k4=verificar("k4");
        var k5=verificar("k5");
        var adicional=verificar("adicional");
        // realizamos la suma de los valores y los ponemos en la casilla del
        // formulario que contiene el total
        document.getElementById("total").value=parseFloat(kilome)+parseFloat(k1)+parseFloat(k2)+parseFloat(k3)+parseFloat(k4)+parseFloat(k5)+parseFloat(adicional);
    }
 
    /**
     * Funcion para verificar los valores de los cuadros de texto. Si no es un
     * valor numerico, cambia de color el borde del cuadro de texto
     */
    function verificar(id)
    {
        var obj=document.getElementById(id);
        if(obj.value=="")
            value="0";
        else
            value=obj.value;
        if(validate_importe(value,1))
        {
            // marcamos como erroneo
            obj.style.borderColor="#808080";
            return value;
        }else{
            // marcamos como erroneo
            obj.style.borderColor="#f00";
            return 0;
        }
    }
 
    /**
     * Funcion para validar el importe
     * Tiene que recibir:
     *  El valor del importe (Ej. document.formName.operator)
     *  Determina si permite o no decimales [1-si|0-no]
     * Devuelve:
     *  true-Todo correcto
     *  false-Incorrecto
     */
    function validate_importe(value,decimal)
    {
        if(decimal==undefined)
            decimal=0;
 
        if(decimal==1)
        {
            // Permite decimales tanto por . como por ,
            var patron=new RegExp("^[0-9]+((,|\.)[0-9]{1,2})?$");
        }else{
            // Numero entero normal
            var patron=new RegExp("^([0-9])*$")
        }
 
        if(value && value.search(patron)==0)
        {
            return true;
        }
        return false;
    }
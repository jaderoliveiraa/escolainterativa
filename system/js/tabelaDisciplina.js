//Funções após a leitura do documento
$(document).ready(function () {
   
    //funcções exibir e ocultar
    function mudarVariavel() {
       
    }

    function ocultar() {
        document.getElementById("oculto").style.display = "none";
        document.getElementById("oculto2").style.display = "none";
    }
    //Select para mostrar e esconder divs
    $('#tipo').on('change', function () {
        var selectValue = $(this).val();
        if (selectValue !=="4") {
            ocultar();
            
        }else{
            exibir();
        }

    });
});



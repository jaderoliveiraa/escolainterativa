//Funções após a leitura do documento
$(document).ready(function () {
    ocultar();
    //funcções exibir e ocultar
    function exibir() {
        document.getElementById("oculto").style.display = "block";
        document.getElementById("oculto2").style.display = "block";
        document.getElementById("oculto3").style.display = "block";
    }

    function ocultar() {
        document.getElementById("oculto").style.display = "none";
        document.getElementById("oculto2").style.display = "none";
        document.getElementById("oculto3").style.display = "none";
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

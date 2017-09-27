var cont = 1;

    $('#tableEsquerda img').click(function(){
        var altura = $('#sectionConteudo').css('height');
        if(cont != 10){
            $('#inputFile').after("<p><input id='inputFile' type='file' name='fileFoto"+cont+"'></p>");
            $('#sectionConteudo').css('height', '+=60');
            $('#containerEsquerda').css('height', '+=60');
            cont++;
        }else{
            alert("No máximo 10 imagens!!!");
        }
    });



$('#tableEsquerda input[name="txtCheckin"]').mask("00:00");
$('#tableEsquerda input[name="txtCheckout"]').mask("00:00");

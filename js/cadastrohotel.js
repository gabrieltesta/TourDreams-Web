var cont = 1;

    $('#tableEsquerda img').click(function(){
        var altura = $('#sectionConteudo').css('height');
        if(cont != 10){    
            $('#inputFile').after("<p><input id='inputFile' type='file' name='fileFoto'></p>");
            $('#sectionConteudo').css('height', '+=30');
            cont++;
        }else{
            alert("No máximo 10 imagens!!!");
        }
    });
    
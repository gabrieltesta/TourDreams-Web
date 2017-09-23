function abrirGeral() {
    $("#geral").show();
    $("#conta").hide();
    $("#reservas").hide();
    $("#feedback").hide();

    $('#btngeral').css("background-color", "#ccc");
    $('#btnconta').css("background-color", "#eee");
    $('#btnreservas').css("background-color", "#eee");
    $('#btnfeedback').css("background-color", "#eee");
}

function abrirConta() {
    $("#geral").hide();
    $("#conta").show();
    $("#reservas").hide();
    $("#feedback").hide();

    $('#btngeral').css("background-color", "#eee");
    $('#btnconta').css("background-color", "#ccc");
    $('#btnreservas').css("background-color", "#eee");
    $('#btnfeedback').css("background-color", "#eee");
}

function abrirReservas() {
    $("#geral").hide();
    $("#conta").hide();
    $("#reservas").show();
    $("#feedback").hide();

    $('#btngeral').css("background-color", "#eee");
    $('#btnconta').css("background-color", "#eee");
    $('#btnreservas').css("background-color", "#ccc");
    $('#btnfeedback').css("background-color", "#eee");
}

function abrirFeedback() {
    $("#geral").hide();
    $("#conta").hide();
    $("#reservas").hide();
    $("#feedback").show();

    $('#btngeral').css("background-color", "#eee");
    $('#btnconta').css("background-color", "#eee");
    $('#btnreservas').css("background-color", "#eee");
    $('#btnfeedback').css("background-color", "#ccc");
}

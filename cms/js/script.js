function abrirGeral() {
    $("#geral").show();
    $("#conta").hide();
    $("#reservas").hide();
    $("#feedback").hide()
}

function abrirConta() {
    $("#geral").hide();
    $("#conta").show();
    $("#reservas").hide();
    $("#feedback").hide()
}

function abrirReservas() {
    $("#geral").hide();
    $("#conta").hide();
    $("#reservas").show();
    $("#feedback").hide()
}

function abrirFeedback() {
    $("#geral").hide();
    $("#conta").hide();
    $("#reservas").hide();
    $("#feedback").show()
}

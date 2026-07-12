$(document).ready(function() {
    $('#btn-whatsapp').on('click', function(event) {
        event.preventDefault();

        // Insira seu número completo (Exemplo: 55 + DDD + Número)
        const numeroWhatsApp = "5515991915295"; 
        const mensagemPadrao = "Olá! Vi seu portfólio e gostaria de conversar sobre um projeto.";

        const urlDireta = `https://wa.me{numeroWhatsApp}?text=${encodeURIComponent(mensagemPadrao)}`;

        window.open(urlDireta, '_blank');
    });
});

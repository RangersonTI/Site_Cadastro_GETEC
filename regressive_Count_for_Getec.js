// Contagem regressiva para o evento

var countDownDate = new Date("October 15, 2023 15:00:00").getTime();  // Atualiza a contagem regressiva a cada 1 segundo 

var x = setInterval(function() {                // Get todays date and time 
    var now = new Date().getTime();                      
    var distance = countDownDate - now;                     // Encontra o tempo restante entre a data final e a atual 

    // Calcula o tempo restante do dia, horas minutos e segundo
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);              
    
    // Apresenta o resultando do tempo restante na tela do usuario"

    document.getElementById("dias").innerHTML = days;
    document.getElementById("horas").innerHTML = hours;
    document.getElementById("minutos").innerHTML = minutes;
    document.getElementById("segundos").innerHTML = seconds;
 
    // Se o tempo restante acabar, sera escrito "TEMPO ESGOTAGO" 
    if (distance < 0) { 
        clearInterval(x);
        document.getElementById("dias").innerHTML = 0;
        document.getElementById("horas").innerHTML = 0;
        document.getElementById("minutos").innerHTML = 0;
        document.getElementById("segundos").innerHTML = 0;
        //document.getElementById("regressive_Count").innerHTML = "TEMPO ESGOTADO";
        document.getElementById("button_local_cadastro").disabled = true;
    }
}, 1000);
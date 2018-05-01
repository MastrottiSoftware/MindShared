function checkUsername() {
    'use strict';
    var usernameValue = document.getElementById("inputUsername").value;
    var request = new XMLHttpRequest();
    request.open('GET', 'https://saw1718.herokuapp.com/validation.php?username=' + usernameValue);
    request.onload = function () {
        var obj = JSON.parse(request.responseText);
        var ris = "risultato: ";
        for (var i = 0; i < obj.length; i++) {
            if (obj[i].name == "username") {
                if (obj[i].status == "ok") {
                    document.getElementById("responseA2").innerHTML = "";
                    document.getElementById("responseA1").innerHTML = "Username disponibile";
                } else {
                    document.getElementById("responseA2").innerHTML = "Username già in uso";
                    document.getElementById("responseA1").innerHTML = "";
                }
            }
        }
    }
    request.send();
}



function checkEmail() {
    'use strict';
    var emailValue = document.getElementById("inputEmail").value;


    var request = new XMLHttpRequest();
    request.open('GET', 'https://saw1718.herokuapp.com/validation.php?email=' + emailValue);
    request.onload = function () {
        var obj = JSON.parse(request.responseText);
        var ris = "risultato: ";
        for (var i = 0; i < obj.length; i++) {
            if (obj[i].name == "email") {
                if (obj[i].status == "ok") {
                    document.getElementById("responseB2").innerHTML = "";
                    document.getElementById("responseB1").innerHTML = "Email disponibile";
                } else {
                    document.getElementById("responseB2").innerHTML = "Email già in uso";
                    document.getElementById("responseB1").innerHTML = "";
                }
            }
        }
    }
    request.send();
}

function checkCodFiscale() {
    'use strict';
    if (document.getElementById("inputcf").value == "") return;
    var cf = document.getElementById("inputcf");
    cf.value = cf.value.toUpperCase();

    var request = new XMLHttpRequest();
    request.open('GET', 'http://webdev.dibris.unige.it/~S4121569/MindShared/php/cf.php?cf=' + cf.value);
    request.onload = function () {
        var obj = JSON.parse(request.responseText);
        var ris = "risultato: ";
        if (obj.status == "ok") {
            document.getElementById("responseC2").innerHTML = "";
            document.getElementById("responseC1").innerHTML = "codice fiscale nel formato corretto";
        } else {
            document.getElementById("responseC2").innerHTML = "codice fiscale scorretto";
            document.getElementById("responseC1").innerHTML = "";
        }
    }
    request.send();
}

// http://webdev.dibris.unige.it/~S4121569/MindShared/php/login.php
// http://192.168.56.1:8080/~student/login.php
function checkLogin() {
    'use strict';
    var request = new XMLHttpRequest();
    request.open('POST', 'http://webdev.dibris.unige.it/~S4121569/MindShared/php/login.php',true);
    request.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    request.onload = function () {
        var obj = JSON.parse(request.responseText);
        var ris = "risultato: ";
        console.log(obj);
        if (obj.status == "ok") {
            
            window.alert("benvenuto "+obj.nome);
            window.location.href="php/benvenuto.php";
        }
        else {
            window.alert("Errore di autenticazione ");
        }
    }
    request.send("Username="+document.getElementById("inputUsername2").value+"&Password="+document.getElementById("inputPassword2").value);
}

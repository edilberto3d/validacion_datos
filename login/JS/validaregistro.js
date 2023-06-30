var form = document.getElementById("frmregistro").addEventListener("submit", function(evento){
    
    var pss1 = document.getElementById("password1").value;
    var pss2 = document.getElementById("password2").value;
    
    if (pss1 == pss2) {

    }
    else{
        alert("La contraseña no coinciden");
        evento.preventDefault();
    }
});
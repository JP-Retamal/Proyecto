
const correo = document.getElementById("correo").Value;
const pass = document.getElementById("pass").Value;
const form = document.getElementById("form").Value;
const parrafo = document.getElementById("warnigs").Value;

form.addEventListener("submit", e=>{
    e.preventDefault()
    parrafo.innerHTML = ""
    let warnings = ""
    let regexCorreo = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/
    if(correo.Value.length <30){
        warnings += "El Email no es valido."
        entrar = true
    }
    if(!regexCorreo.test(correo.Value)){
        warnings += "El Email no es valido."
        entrar = true
    }
    if(pass.Value.length >8){
        warnings += "La contraseña no es valido."
        entrar = true
    }
    if(entrar){
        parrafo.innerHTML = warnings
    }else{

    } parrafo.innerHTML = Enviado

})

 







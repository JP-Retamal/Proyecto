function validar(){
    var correo, pass, expresion;
    correo = document.getElementById("correo").Value;
    pass = document.getElementById("pass").Value;

    expresion = /\w+@\w+.+[a-z]/;
  
    if(correo ==="" || pass ===""){
        alert("todos los campos son obligatorios!!");
        return false;
    }
    else if(correo.length>20){
        alert("El correo es muy largo");
        return false;  
    }
    else if(pass.length>20){
        alert("Contraseña excede el máximo de caracteres")
        return false;
    }
    else if(!expresion.test(correo)){
        alert("El formato no es valido");
        return false;
    }
}






function validadCOntraseña() {
    regexp_password = /^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$/;
    contra = document.getElementById('contra').value;
    console.log(regexp_password);
    if(!regexp_password.test(contra)){
        document.getElementById('contra').style.borderColor = "red";
        alert("la contraseña debe tener 8 caracteres como minimo un numero, una mayúscula y un caractetr especial");
    }
}
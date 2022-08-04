function login(user, pass, form, login, home) {
    let username = document.getElementById(user)
    let password = document.getElementById(pass)

    if (username.value == '' || password.value == ''){
        Swal.fire(
            'Ningún campo debe estar vacío',
            'Por favor, escribe tu matricula y contraseña',
            'error'
          )
    }
    else {
        let formulario = new FormData(document.getElementById(form));
        fetch(login, {
            method: "post",
            body: formulario })
            .then((response) => response.json())
            .then(data => {
                toastr.options = {"preventDuplicates": true}
                if (data.result == 0){
                    toastr.error("Las credenciales son equivocadas.", "Falló la autenticación")
                }
                else {
                    toastr.success(`Bienvenido ${data.user}`, "Autenticación correcta")
                    setTimeout(function(){
                        location.href=home;
                     },1000);
                }
            })
    }
}

function login_UTube(){
    login("matricula", "password", "formulary", "login_controller", "home_view")
}


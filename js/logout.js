function logout(url){
    Swal.fire({
        title: '¿Cerrar sesión?',
        text: "Una vez cerrada, volverás al inicio.",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Cerrar sesión'
      }).then((result) => {
        if (result.isConfirmed) {
            fetch(url, {
                method: "post" })
                .then((response) => response.json())
                .then(data => {
                    if(data.status == "1"){
                        location.href="UTube"
                    }
                })
        }
      })
}

function logout_session(){
    logout('logout_controller')
}
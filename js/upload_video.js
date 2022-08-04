function upload_video(){
    let user_id = document.getElementById('user')
    let formulary = new FormData()
    let file = document.getElementById('video')
    formulary.append('file', file.files[0])
    formulary.append('user_id', user_id)
    if (file.files.length != 0){
        fetch('upload_video_controller', {
            method: "post",
            body: formulary})
        .then(response => response.json())
        .then(data => {
            Swal.fire(
                'Gracias!',
                `${data.respuesta}`,
                'success'
              )
            setTimeout(function(){
                location.href='edit_video';
             },1000);
        })
        .catch(error => {
            if (confirm("El archivo no se ha subido correctamente.")) {
                console.error(error)
                location.href='edit_video'
            } else {
                location.href='edit_video'
            }
        })
    }else{
        Swal.fire(
            'Sin archivo',
            'Por favor, sube un archivo para cargar',
            'warning',
          )
    }
}
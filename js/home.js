window.onload = function () {
    fetch("home_controller", {
        method: "get"})
        .then(response => response.json())
        .then(videos => {
            let template = ''
            let div = document.getElementById("videos")
            if(videos.length > 0){
                videos.forEach(video => {
                    template += `
                    <div class="col-12">
                        <div class="card shadow-sm">
                            <div class='container'>
                                <div class='ratio ratio-16x9'>
                                    <iframe src='${video.url}'></iframe>
                                </div>
                            </div>
                            <div class="card-body">
                                <h4 class="card-text">${video.name_video}</h4>
                                <p>${video.description_video}</p>
                            </div>
                        </div>
                    </div>
                    <br>
                    `})
                div.innerHTML = template
            }else{
                template = `
                <div class="d-flex justify-content-center">
                    <p> No hay videos aún. </p>
                </div>
                `
                div.innerHTML = template
            }
        })
}
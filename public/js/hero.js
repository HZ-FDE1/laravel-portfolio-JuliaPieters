
function hero(){
    let randomNumber = Math.round(Math.random() * 500);

    fetch('http://127.0.0.2/api/' + randomNumber, {
        headers: {
            Accept:
                "application/json; charset=utf-8",
            "Content-Type": "application/json; charset=utf-8",
        },
        mode: "cors"
    })
        .then(function(response) {
            // handle success
            return response.json()
        })
        .then(function (hero){
            const body = document.getElementById("hero");
            body.innerHTML = '';
            body.innerHTML+=' <button type="button" style="font-size: x-large" onClick="hero()">Get a random superhero!</button>';
            body.innerHTML+= '<h1>' + hero.name + '</h1>';
            body.innerHTML+= '<img src="' + hero.image.url + '"></img>';
        })
        .catch(function(error) {
            // handle error
            console.log(error);
    });
}

window.onload = hero;

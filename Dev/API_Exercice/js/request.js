let request = new XMLHttpRequest();

let requestURL = `https://www.prevision-meteo.ch/services/json/paris`

let target = document.querySelector('main ul')


request.onreadystatechange = function () {
    if (this.readyState == XMLHttpRequest.DONE && this.status == 200) {
        let response = JSON.parse(this.responseText);
        
        target.innerHTML += `<li>${response.city_info.name} </li>
                             <li>${response.city_info.country} </li>
                             <li>${response.current_condition.tmp}  °C</li>
                             <li><img src='${response.current_condition.icon}'></li>
                             <li>${response.current_condition.date}</li>`

    }
}

request.open("GET", requestURL)
request.send()

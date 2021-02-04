document.addEventListener("DOMContentLoaded", () => {
  let target = document.querySelector(".primary-list");

  let request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if (this.readyState == XMLHttpRequest.DONE && this.status == 200) {
      let response = JSON.parse(this.responseText);
      console.table(response);

      for (let i in response) {
        target.innerHTML += `<li> Titre : ${response[i][0]}, Auteur ${response[i][1]} </li>`;
      }
    }
  };
  request.open("GET", "traitement.php?method=getUsers");
  request.send();
});

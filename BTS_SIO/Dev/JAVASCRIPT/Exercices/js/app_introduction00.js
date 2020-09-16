document.addEventListener('DOMContentLoaded', () => {
  //sert à charger d'abord tous les éléments du DOM
  console.log("Loaded")
  //ES6
  let x = 3
  const z = 4
  let msg = "Hello"
  console.log(msg)
  let valeurInt = 140
  valeurInt -= 40
  console.log(valeurInt)
  console.log(typeof valeurInt)
  console.log(typeof msg)
  let user, nombre, version, status
  user = "Eich"
  nombre = 2019
  version = 6.5
  status = true
  console.log(typeof user)
  console.log(typeof nombre)
  console.log(typeof version)
  console.log(typeof status)
  let printOut = parseFloat(version)
  console.log(printOut + nombre)
  let one = 1,
    two = 2,
    word = "hello"
  console.log(`${one} ${word} fin du script`)
  let tab = ["html", "js", "css"]
  console.table(tab)
  let tabAdd = ["PHP", "SQL", ...tab] //spread opérateur ...
  console.table(tabAdd)
  //les fonctions 
  let calc = (n) => { //function init

    return n + n
  }
  let outPut = calc(2)
  console.log(outPut) //function appelée



})
document.addEventListener('DOMContentLoaded', () => {

    let input = document.querySelector('input[type="file"]')
    let el = document.querySelector('section')
    let submit = document.querySelector('input[type="submit"]')

    submit.addEventListener('click', (e) => {
        e.preventDefault()
        el.innerHTML += `
        <h3>Image</h3>
        <img src=${input.value} alt="test">`
        console.log(input.value)
    })


})
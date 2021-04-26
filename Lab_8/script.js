let expr1 = document.getElementById('expr1')
let expr2 = document.getElementById('expr2')

let button = document.getElementById('button')
let result = document.getElementById('result')

let button1 = document.getElementById('button1')
let result1 = document.getElementById('result1')


button.onclick = function calcW(form)
{
    console.log(expr1)
    console.log(expr2)

	let w = Math.sin(Number(expr1.value) - 2 * Number(expr2.value)) + Math.exp(Number(expr2.value)) * Math.sqrt(Number(expr1.value) + Number(expr2.value));

    console.log(w)


    result.value = w
}


button1.onclick = function calcV(form)
{
    console.log(expr1)
    console.log(expr2)

	let v = Math.pow((Number(expr2.value) - 2 * Number(expr1.value)), 2) - (Number(expr1.value) * Math.cos(Number(expr2.value)) / (3 - 4 * Number(expr1.value)));
    console.log(v)

    result1.value = v
}

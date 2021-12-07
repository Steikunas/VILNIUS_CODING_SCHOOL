let a=5;
let b=1;


function atimtis (a, b) {
    return a - b;}

function sudetis (a, b) {
    return a + b;}

function daugyba (a, b) {
    return a * b;}

    function dalyba (a, b) {
        return a * b;
}


    function manofunkcija() {
    let result = document.getElementById("rezultatai");
    for (let i=0; i < 5; i++)
    {result.innerHTML+=sudetis(i, b);
        result.innerHTML+=atimtis(i, b);
        result.innerHTML+=daugyba(i, b);
        result.innerHTML+=dalyba(i, b);}
    }


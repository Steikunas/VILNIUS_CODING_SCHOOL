let a=5;
let b=1;

function atimtis (a, b) {
    return a - b;}
function sudetis (a, b) {
    return a + b;}
function daugyba (a, b) {
    return a * b;}
    function dalyba (a, b) {
        return a / b;
}


    function manofunkcija() {
        let result = document.getElementById('rezultatai');
        for (let i = 0; i < 5; i++) {
            for (let b = 0; b < 20; b += 2) {
                result.innerHTML += 'Skaiciu [' + i + ', ' + b + '] suma: ' + sudetis(i, b) + '<br>';
                result.innerHTML += 'Skaiciu [' + i + ', ' + b + '] suma: ' + atimtis(i, b) + '<br>';
                result.innerHTML += 'Skaiciu [' + i + ', ' + b + '] suma: ' + daugyba(i, b) + '<br>';
                result.innerHTML += 'Skaiciu [' + i + ', ' + b + '] suma: ' + dalyba(i, b);
                + '<br>';
            }
        }
    }
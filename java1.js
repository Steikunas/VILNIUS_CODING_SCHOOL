let e=1;
let tekstas= 'kintamojo e reikšmė: ';

console.log(tekstas, e);

e=2;
tekstas= 'kintamojo e reikšmė: ';

console.log(tekstas, e);

let e= 'Mano vardas';
let f= 'Tomas Steikunas';

console.log(b, c);

let metai=1986;
let menuo=0o6;
let diena=15;

console.log(metai%10+diena%10+menuo%10);

r=15;
pi=3.14;
console.log(2*pi*r);
console.log(r*r*pi);

let a=3;
let b=7;
let c=5;
let d=9;
let answer;

if ((c<b) && (c>a) && (d>b)) {answer = 'Rezis' + [c,b]}
else if ((c<b) && (c<=a) && (d>b)) {answer ='Rezis' +  c,b}
else if ((c<b) && (c>a) && (d<b)) {answer = 'Rezis' +  c , d}
else if ((c<b) && (c<a) && (d<b)) {answer = 'Rezis' +  c , d}
else if (c>b) {answer = 'Null'};
console.log(answer);

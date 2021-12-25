$ (function () {
    $('aside').load('/aside.html');
    $('footer').load('/footer.html');
    $('main').load('/main.html');
    $('header').load('/header.html', function(){
$('li > a').click(function (e){
e.preventDefault();
let keliasIkiFailo = e.target.href;
$('main').load(keliasIkiFailo);
        });

    });
});


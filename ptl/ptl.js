$ (function () {
    $('aside').load('aside.html');
    $('footer').load('/ptl/footer.html');
    $('main').load('/ptl/main.html');
    $('header').load('header.html', function(){
$('li > a').click(function (e){
e.preventDefault();
let keliasIkiFailo = e.target.href;
$('main').load(keliasIkiFailo);
        });

    });
});


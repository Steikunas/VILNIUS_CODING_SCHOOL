$ (function () {
    $('aside').load('/ptl/aside.html');
    $('footer').load('/ptl/footer.html');
    $('main').load('/ptl/main.html');
    $('header').load('../ptl/header.html', function(){
$('li > a').click(function (e){
e.preventDefault();
let keliasIkiFailo = e.target.href;
$('main').load(keliasIkiFailo);
        });

    });
});


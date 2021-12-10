$ (function () {
    $('aside').load('aside.html');
    $('footer').load('/ptl/footer.html');
    $('main').load('/ptl/main.html');
    $('header').load('header.html', function(){
$('nav > a').click(function (e){
e.preventDefault();
let.kelias= $(this).attr('href');
$('main').load(kelias);
        });

    });
});


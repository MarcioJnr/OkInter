// document.addEventListener("DOMContentLoaded", function(){
// // make it as accordion for smaller screens
// if (window.innerWidth > 992) {

// 	document.querySelectorAll('.navbar .nav-item').forEach(function(everyitem){

// 		everyitem.addEventListener('mouseover', function(e){

// 			let el_link = this.querySelector('#navbarDropdown');

// 			if(el_link != null){
// 				let nextEl = el_link.nextElementSibling;
// 				el_link.classList.add('show');
// 				nextEl.classList.add('show');
// 			}

// 		});
// 		everyitem.addEventListener('mouseleave', function(e){
// 			let el_link = this.querySelector('#navbarDropdown');

// 			if(el_link != null){
// 				let nextEl = el_link.nextElementSibling;
// 				el_link.classList.remove('show');
// 				nextEl.classList.remove('show');
// 			}


// 		}) 
// 	});
// }
// // end if innerWidth
// }); 

$('#dropend-link-1').mouseover(() => {
    $('#dropend-menu-1').css('display', 'block');
}).mouseleave(() => {
    $('#dropend-menu-1').css('display', 'none');
});

$('#dropend-link-2').mouseover(() => {
    $('#dropend-menu-2').css('display', 'block');
}).mouseleave(() => {
    $('#dropend-menu-2').css('display', 'none');
});

$('#dropend-link-3').mouseover(() => {
    $('#dropend-menu-3').css('display', 'block');
}).mouseleave(() => {
    $('#dropend-menu-3').css('display', 'none');
});

$('#dropend-link-4').mouseover(() => {
    $('#dropend-menu-4').css('display', 'block');
}).mouseleave(() => {
    $('#dropend-menu-4').css('display', 'none');
});

$('#dropend-link-5').mouseover(() => {
    $('#dropend-menu-5').css('display', 'block');
}).mouseleave(() => {
    $('#dropend-menu-5').css('display', 'none');
});

//Efeito de rolagem, se quiser usar só descomentar :D

// $(window).scroll(function () { 
//     let posWin = $(window).scrollTop();
//     if (posWin != 0) {
//         $('header').css('background', '#000');
//     } else {
//         $('header').css('background', 'linear-gradient(180deg, rgba(0,0,0,1) 0%, rgba(0,0,0,0) 100%)');
//     }
// });
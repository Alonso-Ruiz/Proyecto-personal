var swiper = new Swiper(".mySwiper-1",{
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable:true,
    },
    navigation: {
        nextEl:".swiper-button-next",
        prevEl:".swiper-button-prev"
    }
});

var swiper = new Swiper(".mySwiper-2",{
    slidesPerView: 3,
    spaceBetween: 30,
    loop: true,
    navigation: {
        nextEl:".swiper-button-next",
        prevEl:".swiper-button-prev"
    },
    breakpoints: {
        0:{
            slidesPerView:1
        },
        520:{
            slidesPerView:2
        },
        950:{
            slidesPerView:3
        }
    }
});

var geocoder = new google.maps.Geocoder();

document.getElementById('formulario').addEventListener('submit', function(e) {
  e.preventDefault();
  var direccion = document.getElementById('direccion').value;
  geocoder.geocode({address: direccion}, function(results, status) {
    if (status === 'OK') {
      var latitud = results[0].geometry.location.lat();
      var longitud = results[0].geometry.location.lng();
      mostrarMapa(latitud, longitud);
    } else {
      alert('No se pudo encontrar la dirección ingresada.');
    }
  });
});


function mostrarMapa(latitud, longitud) {
    var direccion = {lat: latitud, lng: longitud};
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 15,
      center: direccion
    });
    var marker = new google.maps.Marker({
      position: direccion,
      map: map
    });
  }
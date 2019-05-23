

function validate(id, value) {
    console.log(id);
    console.log(value);
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txtHint").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET", "php/validate_delete.php?id=" + id + "&value=" + value, true);
    xmlhttp.send();
}


if ($(location).attr("href") === 'http://coenwalter.nl/art/gallery.php') {

//http://localhost/art-department-gallery/gallery.php


    setInterval(function () {


        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("gallery").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "php/request_path.php", true);
        xmlhttp.send();
        
        
        
    }, 1000);

}

  var mySwiper = new Swiper ('.swiper-container', {
    // Optional parameters
    direction: 'horizontal',
    spaceBetween: 50,
    loop: true,

    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },
      
  })




if (window.matchMedia("(max-width: 600px)").matches) {
  var button = document.getElementsByClassName("htPage");
  var limit = document.body.offsetHeight - window.innerHeight;


  window.onscroll = function() {
    if (document.body.scrollTop > (limit - 20) || document.documentElement.scrollTop > (limit - 20)) {
      button[0].style.bottom = "50px";
    } else {
      button[0].style.bottom = "10px";
    }
  };
}
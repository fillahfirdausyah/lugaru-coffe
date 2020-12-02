// scrolling navbar
window.onscroll = function() {myFunction()};

function myFunction() {
  if (document.body.scrollTop > 5 || document.documentElement.scrollTop > 5) {
     document.getElementById("navigation").style.height = "80px";
     document.getElementById("navigation").style.boxShadow = "1px 1px 5px #444444";
  } else {
     document.getElementById("navigation").style.boxShadow = "none";
     document.getElementById("navigation").style.height = "90px";
  }
}

//reload captcha
$('#reload').click(function () {
$.ajax({
type: 'GET',
url: '/reloadCaptcha',
success: function (data) {
$(".captcha span").html(data.captcha);
}
});
});

//direction
function direction(ID){
  setTimeout(function(){
    window.location.href = '#'+ ID;
  },500)
}
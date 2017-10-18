$(document).idle({
  onIdle: function(){
     window.location = "#/announcements/"
  },
  onActive: function(){

  },
  idle: 600000
});

$(document).ready(function(){
  // $('#video_intro').modal('toggle');
  // setTimeout(function(){
  //   $('#video_intro').modal('toggle');
  //   toggleMenu()
  // }, 3500);

  let width = window.screen.availWidth;
  let height = window.screen.availHeight;
  if(height != 860 || width != 1600){
  }

  // check if updates are available
  $.ajax({
    url:'spec_func.php',
    data:{
      'type':'checkUpdate'
    }
  }).done(function(res){
    if(res == 'true'){
      $('.menu-button6').css('background','rgba(255, 255, 255, 0.31)');
      $('.menu-button6 p').text('UPDATES ARE AVAILABLE');
    }
  })

  //
  setInterval(function(){
    inetCheck();
  }, 1000);

  $(".myOwnCarousel").slick({
      dots: true,
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay:true,
      autoplaySpeed:1000
  });
});

function toggleMenu(){
  $('#menu_modal').modal('toggle');
}

// Remove vertical scrollbar from modal
$('.modal').on('show.bs.modal', function(){
  $('body').css('margin-right','0px');
  $('body').removeClass('modal-open');
})


$('.menu-button').click(function(){
  if( !$('#prompt').val() == "" ){
    event.preventDefault();
    $('#prompt_modal').modal('toggle');

    if(!continueTask()){
      window.location.href = window.location.href;
    }else{
      toggleMenu();
    }
  }else{
    toggleMenu();
  }
});

function continueTask(check){
  return check;
}

// Opening external websites inside iframe
function openLink(u, f, h = null){
  var frame = $(f+' .div-frame').html('');
  var height = null;
  if(h != null){
    height = 'height:'+h+';'
  }
  (frame).append('<iframe src="'+u+'#view=fitH" style="min-height:100%;min-width:100%;'+height+'"></iframe>')
}

// for the iframes
function backLink(){
  event.preventDefault()
}

$.fn.closeModal = function(){
  alert('close this')
}

function inetCheck(){
  if(navigator.onLine){
    $('.inetCheck .fa-wifi').css('color','green');
    $('.inetCheck span').text('Internet Connection Available');
  }else{
    $('.inetCheck .fa-wifi').css('color','red');
    $('.inetCheck span').text('Internet Connection Unavailable');
  }
}

function getRandomColor() {
  var letters = '0123456789ABCDEF';
  var color = '#';
  for (var i = 0; i < 6; i++) {
    color += letters[Math.floor(Math.random() * 16)];
  }
  return color;
}

// Display profile in the organization
$(document).on('click','.org-block',function(){
  var i = 1;
  var notClick = false;
  var whole = '';
  $.each( $(this).children('span'), function(){console.log(i);i++
    var data = $(this).text().split('//');
    var image = "images/profile/"+data[1]+".jpg";
    if(check_file_exist('images/profile/'+data[1]+".jpg")){
      image = 'images/profile/blank-dp.png';
      
    }
    var appendThis = "<div class='block'>"
    appendThis += "<div class='name'>"
    appendThis += "<p>"+data[1]+"</p>"
    appendThis += "<p>"+data[0]+"</p></div>"
    appendThis += "<img class='frame' src='images/frame.png'>"
    appendThis += "<img src='"+image+"' class='pp'>"
    appendThis += "</div>"
    whole += appendThis;
    
    if(data[2] == 'true'){
      notClick = true;
    }
  });
  $('#orgProfile_modal .modal-body div').html(whole)

  if(!notClick){
    $('#orgProfile_modal').modal('toggle');
  }
});

// alert continue button
function closeAlert(){
  $('#alerts').modal('toggle');
  toggleMenu();
}

function check_file_exist(file){
	var http = new XMLHttpRequest();
	http.open('HEAD',file,false);
	http.send();
	return http.status == 404;
}

// Sending emails


// Angular controller
var app = angular.module("myApp", ['ngRoute']);

app.config(function($routeProvider){
  $routeProvider
  .when('/laboratory',{
    templateUrl : 'laboratory/index.php'
  })
  .when('/',{
    templateUrl : 'announcements.php'
  })
  .when('/announcements',{
    templateUrl : 'announcements.php'
  })
  .when('/organization',{
    templateUrl : 'organization.php'
  })
  .when('/technology',{
    templateUrl : 'technology/index.php'
  })
  .when('/about',{
    templateUrl : 'about.php'
  })
  .when('/portals',{
    templateUrl : 'portals/index.php'
  })
  .when('/feedback',{
    templateUrl : 'feedback/index.php'
  })
  .when('/update',{
    templateUrl : 'update.php'
  })
  .when('/status',{
    templateUrl : 'status/index.php'
  })
  .when('/uploads',{
    templateUrl : 'news/index.php'
  })
})

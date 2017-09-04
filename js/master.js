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
  $('#orgProfile_modal .modal-body').empty();
  var i = 1;
  var notClick = false;
  $.each( $(this).children('span'), function(){
    var data = $(this).text().split('//');
    var appendThis = "<div class='block'>"
    appendThis += "<div class='name'>"
    appendThis += "<p>"+data[1]+"</p>"
    appendThis += "<p>"+data[0]+"</p></div>"
    appendThis += "<img class='frame' src='images/frame.png'>"
    appendThis += "<img src='images/profile/"+data[1]+".jpg' class='pp'>"
    appendThis += "</div>"

    $('#orgProfile_modal .modal-body').append(appendThis)
    if(data[2] == 'true'){
      notClick = true;
    }
  });
  if(!notClick){
    $('#orgProfile_modal').modal('toggle');
  }
});

// alert continue button
function closeAlert(){
  $('#alerts').modal('toggle');
  toggleMenu();
}

// Sending emails


// Angular controller
var app = angular.module("myApp", ['ngRoute']);

app.config(function($routeProvider){
  $routeProvider
  .when('/laboratory',{
    templateUrl : 'laboratory/index.php'
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
})

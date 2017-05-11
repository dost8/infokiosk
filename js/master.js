(function(){
  // $('#video_intro').modal('toggle');
  // setTimeout(function(){
  //   $('#video_intro').modal('toggle');
  // }, 3500);
})();

function toggleMenu(){
  $('#menu_modal').modal('toggle');
}

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
function openLink(url){
  event.preventDefault();
  $('#iframe_modal iframe').attr('src',url);
  $('#iframe_modal').modal('toggle');
}

// Display profile in the organization
$(document).on('click','.org-block',function(){
  $('#orgProfile_modal .modal-body').empty();
  $.each( $(this).children('span'), function(){
    var data = $(this).text().split('//');
    var appendThis = "<div class='block'>"
    appendThis += "<img src='images/profile/"+data[2]+".jpg'>"
    appendThis += "<div class='name'>"
    appendThis += "<p>"+data[1]+"</p>"
    appendThis += "<p>"+data[0]+"</p>"
    appendThis += "</div></div>"

    $('#orgProfile_modal .modal-body').append(appendThis)
  });

  $('#orgProfile_modal').modal('toggle');
});

// Angular controller
var app = angular.module("myApp", ['ngRoute']);

app.config(function($routeProvider){
  $routeProvider
  .when('/laboratory',{
    templateUrl : 'laboratory/index.php'
  })
  .when('/organization',{
    templateUrl : 'organization/index.php'
  })
  .when('/technology',{
    templateUrl : 'technology/index.php'
  })
})

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
// Display profile in the organization
$(document).on('click','.org-block',function(){
  $('#orgProfile_modal .modal-body').empty();
  $.each( $(this).children('span'), function(){
    var data = $(this).text().split('//');
    var appendThis = "<div class='block'>"
     appendThis += "<div class='profile_name'></div>"
     appendThis += "<div class='frame'style=''><img src='images/profile/"+data[2]+".jpg'></div>"
     appendThis += "</div>"
    // var appendThis = "<div class='frame'><img src='images/profile"+data[2]+".png'></div>"
    // appendThis += "<span class='name'>"+data[1]+"</span>"
    // appendThis += "<span>"+data[0]+"</span>"

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
})

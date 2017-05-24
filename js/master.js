(function(){
  // $('#video_intro').modal('toggle');
  // setTimeout(function(){
  //   $('#video_intro').modal('toggle');
  // }, 3500);
})();

// Load cheerio

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
function openLink(u, f){
  var frame = $(f+' .div-frame').html('');

  (frame).append('<iframe src="'+u+'#view=fit" style="min-height:95%;min-width:95%;"></iframe>')
  //$(frame).append('<iframe src="viewPDF.php?file='+u+'" style="min-height:95%;min-width:95%;"></iframe>')

  // $(f+' .div-frame').dialog();
  // $(f+' iframe').attr('src',u);
}

// for the iframes
function backLink(){
  console.log( $('.iframe') );
  event.preventDefault()
}

$.fn.closeModal = function(){
  alert('close this')
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

// Portals
// Display selected link to description div
function showLink(t){
  //console.log(t)
  $.ajax({
    url:'portals/'+t+'-desc.php'
  }).done(function(r){
    $('#link-desc').html(r);
  })
}

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
  .when('/about',{
    templateUrl : 'about.php'
  })
  .when('/portals',{
    templateUrl : 'portals/index.php'
  })
})

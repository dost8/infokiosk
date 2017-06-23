(function(){
  // $('#video_intro').modal('toggle');
  // setTimeout(function(){
  //   $('#video_intro').modal('toggle');
  // }, 3500);
  // toggleMenu()

  let width = window.screen.availWidth;
  let height = window.screen.availHeight;

  if( (width < 1500 || width > 1700) || (height < 800 || height > 1000) ){
    alert('Please set  screen resolution to 1600x900')
  }
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
function openLink(u, f){
  var frame = $(f+' .div-frame').html('');

  (frame).append('<iframe src="'+u+'#view=fitH" style="min-height:95%;min-width:95%;"></iframe>')
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

$(document).on('click','.onelab-buttons > div',function(){
  $('#button-name').html( $(this).data('name') )

  // Set images back to default
  var src = 'images/clipart/'
  $('.chemical img').attr('src',src+'chemical1.png')
  $('.micro img').attr('src',src+'micro1.png')
  $('.calib img').attr('src',src+'calibration1.png')
  $('.radio img').attr('src',src+'radiological1.png')
  $('.physical img').attr('src',src+'physical1.png')

  // Change image of the selected button
  $(this).children('img').attr('src','images/clipart/'+ $(this).data('image') +'2.png')
});

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
    templateUrl : 'feedback.php'
  })
})

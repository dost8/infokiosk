(function(){
  // $('#video_intro').modal('toggle');
  // setTimeout(function(){
  //   $('#video_intro').modal('toggle');
  // }, 3500);
})();

function toggleMenu(){
  $('#menu_modal').modal('toggle');
}

function promptUser(let interrupt = false){
  if(interrupt){
    event.preventDefault();
    $('#prompt_modal').modal('toggle');

    if(!continueTask()){
      window.location.href = window.location.href;
    }else{
      toggleMenu();
    }
  }
}

function continueTask(check){
  return check;
}

// Angular controller
var app = angular.module("myApp", ['ngRoute']);

app.config(function($routeProvider){
  $routeProvider
  .when('/laboratory',{
    templateUrl : 'laboratory/index.php'
  });
})

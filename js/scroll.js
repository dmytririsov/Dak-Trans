$(document).ready(function(){
          var margintop = 0;
          $('#myDiv')
         .mousewheel( function (event, delta)
         {
            if ( delta > 0 ){
                 margintop -= 60;
                 $('#innerDiv').animate({'marginTop':margintop});
            }
            else if ( delta < 0 ){
                margintop+=60;
                         $('#innerDiv').animate({'marginTop':margintop});
                }           event.stopPropagation();
            event.preventDefault();
        });
});

$(document).keypress(												/*using JQuery disable the enter button */
  function(event){
    if (event.which == '13') {
      event.preventDefault();
    }
});

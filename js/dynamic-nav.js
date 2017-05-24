$(document).ready(function()
{
   if ($(location).attr('pathname') == '/about') {
        $('#about-link').addClass('current');
   }
   
   
   $('.checkboxes').on('change', function() {
   if($('.checkboxes:checked').length > 5) {
       this.checked = false;
   }
});
});

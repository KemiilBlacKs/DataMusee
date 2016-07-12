 $(document).ready(function() {
  $('#francemap').vectorMap({
      map: 'france_fr',
   hoverOpacity: 0.5,
   hoverColor: false,
   backgroundColor: "#ffffff",
   colors: couleurs,
   borderColor: "#ffffff",
   selectedColor: "#EC0000", 
   enableZoom: false,
   showTooltip: true,
      onRegionClick: function(element, code, region)
      {
         console.log(code);
               document.location.href="departements.php?dep="+code;
      }
  });  
 });  


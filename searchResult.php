<?php	
for($i = 0; $i < sizeof($data); $i++)
{ 
    $id = $data[$i]['id'];
    $ville = $data[$i]['VILLE'];  
    $cp = $data[$i]['CP']; 
    $musee = $data[$i]['NOM DU MUSEE'];
    $dep = $data[$i]['DEP'];
    $reg = $data[$i]['NOMREG'];
    $nomdep = $data[$i]['NOMDEP'];
    $adress = $data[$i]['ADR'];
    $web = $data[$i]['SITWEB'];
    $ouvert = $data[$i]['PERIODE OUVERTURE'];
    
    
    echo  "<div class='container col-md-6'>
  <div id='infmod'></div>
  <h2>".$musee."------".$reg."</h2>
 
  <button type='button' class='btn btn-info btn-lg' data-toggle='modal' data-target='#myModal".$id."' id='modbutt'>INFO</button>

 
  <div class='modal fade' id='myModal".$id."' role='dialog'>
    <div class='modal-dialog '>
    
      <!-- Modal content-->
      <div class='modal-content'>
        <div class='modal-header'>
          <button type='button' class='close' data-dismiss='modal'>&times;</button>
          <h4 class='modal-title'>".$musee."</h4>
        </div>
        <div class='modal-body'>
          <p>".$ville."   ".$cp."</p>
          <p>".$adress."</p>
          <p>".$ouvert."</p> 
        
          <a href='http://".$web."' target='_blank'>site web</a>
        </div>
        <div class='modal-footer'>
          <button type='button' class='btn btn-default' data-dismiss='modal'>Fermer</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>";
	      
        
     
	    
         
}
?> 
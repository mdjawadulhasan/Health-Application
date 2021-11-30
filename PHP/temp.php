<?php 

switch (POST['color']){//

    case 'red';
    
    $color_type = 'primary';
    
    break;
    
    case 'yellow':
    
    $color_type ='primary';
    
    break;
    
    case 'green';
    
    $color_type = 'secondary'; //
    
    break;
    
    case 'blue'://
    
    $color_type = 'primary';
    
    break;
    
    default:
    
    print "<p> Please select your favorite color.</p>";//
    
    $okay = false;
    
    break;//
    
    }

?>
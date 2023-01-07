<?php
function drawTable($cols = 10, $rows = 10, $color='purple'){
	    static $count=0;
	    $count++;
        echo '<table><tbody>';
	    for($r=1;$r<=$rows;$r++){
	        echo '<tr>';		    
		    for($c=1;$c<=$cols;$c++){
		        if ($r==1 or $c==1){
		            echo "<th style = \"background:$color\">",$r*$c,'</th>';
		        }
		        else{echo '<td>',$r*$c,'</td>';}
            }
            echo '</tr>';
	    }
	    echo '</tbody></table>';
	    return $count;
	}

function getMenu($menu, $vertical=true){
		if(!$vertical){
		    echo '<ul class="gorizont">';
	        
		}
		else{
		    echo '<ul class="vertical">';
	    }
	    foreach($menu as $value){
		        echo '<li>';
		            echo '<a href="', $value['href'], '">', $value['link'], '</a>'; 
			    echo '</li>';
	        }
	        echo '</ul>';
	    
	}
?>
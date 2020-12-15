<?php 
print_r($tabinfo);

foreach ($tabinfo as $row)
		{
        	echo $row->id;
        	echo $row->zone;
        	echo $row->floor;
        }
  
echo "<BR><BR> $age <BR><BR>";
?>
<?php
 if ($handle = opendir('.')) {
   while (false !== ($file = readdir($handle)))
      {
          if ($file != "." && $file != "..")
	  {
          	$thelist .= '<a href="'.$file.'">'.$file.'</a>';
          }
       }
  closedir($handle);
  }       
?>
<P>List of files:</p>
<P><?=$thelist?></p>
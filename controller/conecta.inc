<?php
  function conecta_bd()
   {
      $link=mysql_pconnect("localhost","root","");
      if ($link && mysql_select_db("pi1-aps3"))
         return($link);
      return(FALSE);
   }
?>
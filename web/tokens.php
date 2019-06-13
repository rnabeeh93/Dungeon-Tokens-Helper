<?php

  if ($dir = opendir('./DnD Icons')) {
    $tokens = array();

    /* This is the correct way to loop over the directory. */
    while (false !== ($entry = readdir($dir))) {
        $split = explode(".", $entry)[0];
        array_push($tokens, $split);
    }

    closedir($dir);
    print_r($tokens);
  }

?>

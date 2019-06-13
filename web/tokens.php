<?php

  if ($dir = opendir('./DnD Icons')) {
    $tokens = array();

    /* This is the correct way to loop over the directory. */
    while (false !== ($entry = readdir($dir))) {
        $split = explode(".", $entry)[0];
        echo($split);
        array_push($tokens, $split);
    }
    echo("\n");
    echo(count($tokens));
    closedir($dir);
    print_r($tokens);
  }

?>

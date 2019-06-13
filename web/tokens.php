<?php

  if ($dir = opendir('./DnD Icons')) {
    echo "Directory: $dir\n";
    echo "Entries:\n";

    /* This is the correct way to loop over the directory. */
    while (false !== ($entry = readdir($dir))) {
        echo "$entry\n";
    }

    closedir($dir);
  }

?>

<?php

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  $request = test_input($_GET["request"]);
  switch ($request){
    case("data"):
      if ($dir = opendir('./DnD Icons')) {
        $tokens = array();

        /* This is the correct way to loop over the directory. */
        while (false !== ($entry = readdir($dir))) {
            $split = str_replace(' ', '', explode(".", $entry)[0]);
            if($split != ""){
              array_push($tokens, $split);
            }
        }
        closedir($dir);
        echo(json_encode($tokens));
      }
      break;
    case("svg"):
      $tname = "./DnD Icons/".test_input($_GET["token"]).".svg";
      echo(file_get_contents($tname));
      break;
    default:
      echo("ERROR: Request - " + $request);
  }

  die();
?>

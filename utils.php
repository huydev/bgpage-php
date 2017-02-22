<?php
function createJson($cb, $data){
  echo $cb.'('.json_encode($data).')';
}

?>
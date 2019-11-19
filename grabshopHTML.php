<?php
  $doc = new DomDocument;
  // We need to validate our document before refering to the id
  $doc->validateOnParse = true;
  $doc->loadHtml(file_get_contents($_POST['url']));
  echo $doc->getElementById($_POST['element'])->C14N();
?>
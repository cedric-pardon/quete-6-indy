<?php

function writeSecretSentence( string $parametre1, string $parametre2)
{
  return "$parametre1 s'incline face à $parametre2";
}

echo writeSecretSentence("l\'ours", "pistolet");

?>

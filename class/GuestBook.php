<?php
class GuestBook {

    public $fichier;

    public function __construct($fichier)
    {
        $this->fichier = $fichier;
    } 

  public function addMessage($contenu)
  {
    file_put_contents($this->fichier,$contenu . PHP_EOL, FILE_APPEND);
  }

  public function getMessage($fichier)
  {
    $post = [];  
    $fichier = file_get_contents($fichier);

    $lines = explode(PHP_EOL, $fichier);
    
    foreach($lines as $line){
        $post[] = $line;
}

return $post;
  }

}
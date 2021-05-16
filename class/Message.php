<?php

class Message {

    public $username;
    public $message;
    public $date;
    public $heure;

   public function __construct(string $username, string $message, $date, $heure)
   {
       $this->username = $username;
       $this->message = $message;
       $this->date = $date;
       $this->heure = $heure;
   } 

   public function isValid() :bool
   {
       return strlen($this->username) >= 3 && strlen($this->message) >= 10;
   }

   public function getErrors()
   {
    if (strlen($this->username) < 3) {
       
    return <<<HTML
    <div class="alert alert-danger">
    Le pseudo est trop petit
    </div>
HTML;
    }

if (strlen($this->message) < 10) {
    
    return <<<HTML
        <div class="alert alert-danger">
        Le message est trop court
        </div>
HTML;
       }
}

    public function toHTML()
    {
        return <<<HTML
      <p>
      <strong>$this->username</strong> <em> le $this->date à $this->heure </em><br>
      $this->message;
      </p>  

HTML;
    }

    public function toJSON(){
        
        return [
            'username' => $this->username,
            'message' => $this->message,
            'date' => $this->date,
            'heure' => $this->heure
        ];
    }


    public function fromJSON($posts){

        foreach($posts as $post){

            $lines = (json_decode($post));

            if(empty($lines)){
                return;
            }

            $values = get_object_vars($lines);

            $this->username = $values['username'];
            $this->message = $values['message'];
            $this->date = $values['date'];
            $this->heure = $values['heure'];

            $display = $this->toHTML();

            echo $display;
        }

    }



}

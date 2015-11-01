<?php
    require_once('db.php');

    class Madlib
    {
      private $noun;
      private $verb;
      private $adjective;
      private $adverb;
      private $story;
      

      public function setNoun($noun)
      {
        $this->noun = $noun;
      }

      public function getNoun()
      {
        return $this->noun;
      }

      public function setVerb($verb)
      {
        $this->verb = $verb;
      }

      public function getVerb()
      {
        return $this->verb;
      }

      public function setAdjective($adjective)
      {
        $this->adjective = $adjective;
      }

      public function getAdjective()
      {
        return $this->adjective;
      }

      public function setAdverb($adverb)
      {
        $this->adverb = $adverb;
      }

      public function getAdverb()
      {
        return $this->adverb;
      }

      public function getStory()
      {
        return $this->story;
      }
      
      public function createStory()
      {
         $this->story = "you $this->verb your $this->adjective $this->noun $this->adverb? That's hilarious!";
         return $this->story;
      }

      public function save($db)
      {
          $noun = $db->real_escape_string(trim($this->noun));
          $verb = $db->real_escape_string(trim($this->verb));
          $adjective = $db->real_escape_string(trim($this->adjective));
          $adverb = $db->real_escape_string(trim($this->adverb));
          $story = $db->real_escape_string(trim($this->story));

          $query = "INSERT INTO Madlibs (Story, Noun, Verb, Adjective, Adverb) 
            VALUES ('$story', '$noun', '$verb', '$adjective', '$adverb');";
          $result = $db->query($query);
          if (!$result) {
            echo '</br>' . $query . '</br>';
            exit("Database query error: ". $db->mysqli_error);
          }
          else
          {
            return true;
          }
      }



      function __construct($noun, $verb, $adjective, $adverb)
      {
          $this->noun = $noun;
          $this->verb = $verb;
          $this->adjective = $adjective;
          $this->adverb = $adverb;
      }

    }

?>

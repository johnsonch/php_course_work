<?php

    $show_errors = false;

    function validatePost($post, $keys)
    {
        $data = [];
        $errors = [];
        foreach($keys as $key)
        {
          if(isset($post[$key]) && !empty($post[$key]))
          {
              $data[$key] = $post[$key];    
          }
          else
          {
              array_push($errors, $key);
          } 
        } 

        return ['data' => $data, 'errors' => $errors];
    }

    function returnErrorText($error)
    {
      return "Please fill out the '$error' field";
    }

    if (isset($_POST['submit'])) 
    {
        $keys = ['noun','verb','adjective','adverb'];
        $validate_data = validatePost($_POST, $keys);

        if(sizeof($validate_data['data']) == sizeof($keys))
        {
            $data = $validate_data['data'];
            $madlib = new Madlib($data['noun'], $data['verb'], $data['adjective'], $data['adverb']);
            $madlib->createStory();
            $madlib->save($db);
        }
        else
        {
          $show_errors = true;
          $errors = $validate_data['errors']; 
        }
    }

    function getAllStories($db)
    {
        $query = "SELECT id, Story from Madlibs ORDER BY id DESC;";
        $stories = $db->query($query);
        if (!$stories) {
          echo $query;
          exit("Database query error: ". $db->error);
        }
        else
        {
          return $stories;
        }
    }
?>

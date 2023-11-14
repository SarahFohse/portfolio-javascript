<?php

  $validated = 0;

  $firstName = "";
  $lastName = "";
  $contactMail = "";
  $subjectInfo = "";
  $textMessage = "";

  function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
  }

  if (isset($_POST['submit'])) {
      $firstName = test_input($_POST['firstname']);
      $lastName = test_input($_POST['lastname']);
      $contactMail = test_input($_POST['email']);
      $subjectInfo = test_input($_POST['subject']);
      $textMessage = test_input($_POST['message']);

      if ($firstName == "") {
          echo "<style>#firstname{border: 2px solid red}</style>";
      } else {
          $validated++;
      }
      if ($lastName == "") {
        echo "<style>#lastname{border: 2px solid red}</style>";
      } else {
        $validated++;
      }
      if ($contactMail == "" || !preg_match('/^(\w|-|\.)+@([\w-]+\.)+[\w-]{2,4}$/', $contactMail)) {
          echo "<style>#email{border: 2px solid red}</style>";
      } else {
          $validated++;
      }
  }
?>
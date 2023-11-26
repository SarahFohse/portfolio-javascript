<?php




if (isset($_POST['submit'])) {
  $firstName = test_input($_POST['firstname']);
  $lastName = test_input($_POST['lastname']);
  $contactMail = test_input($_POST['email']);
  $subjectInfo = test_input($_POST['subject']);
  $textMessage = test_input($_POST['message']);
  $redirUrl = $_SERVER['REQUEST_URI'] . "?submitted" . "#contact-form";

    if ($validated == 3) {
      // $dbhost = getenv("DB_HOST");
      // $dbuser = getenv("DB_USERNAME");
      // $dbpass = getenv("DB_PASSWORD");
      // $db = getenv("DB");
      $dbhost = $_ENV['DB_HOST'];
      $dbuser = $_ENV['DB_USERNAME'];
      $dbpass = $_ENV['DB_PASSWORD'];
      $db = $_ENV['DB'];
  
      // echo $dbhost;
      // echo $dbuser;
      // echo $dbpass;
      // echo $db;

      $conn = new mysqli($dbhost,$dbuser,$dbpass,$db);
  
  
  
      if (mysqli_connect_errno()) {
        die("Connection error: " . mysqli_connect_error());
      }  
  
  
      
  
  
      $sql = "INSERT INTO portfolio_contact (firstName,lastName,contactMail,subjectInfo,textMessage) 
            VALUES (?, ?, ?, ?, ?)";
  
      $stmt = mysqli_stmt_init($conn);
  
      if ( ! mysqli_stmt_prepare($stmt, $sql)) {
      
          die(mysqli_error($conn));
      }
  
      mysqli_stmt_bind_param($stmt, "sssss",
                            $firstName,
                            $lastName,
                            $contactMail,
                            $subjectInfo,
                            $textMessage);
  
      mysqli_stmt_execute($stmt);

      header( "Location: {$redirUrl}", true, 303);
      exit();
    } else {
      echo "<script>window.addEventListener('load', () => {document.getElementById('contact-form').scrollIntoView();})</script>";
    }
  }
?>
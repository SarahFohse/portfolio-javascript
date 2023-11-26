<?php ob_start();


require_once realpath(__DIR__ . "/vendor/autoload.php");
// use Dotenv\Dotenv;
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="css/application.css">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
  </head>
  <body>
  <?php include("inc/validate.php"); ?>
  <div class="menu-alt">
    <button class="button"><span class="icon-menu"></span></button>
  </div>
  <section id="side-menu-section" class="hidden">
    <div class="side-menu">
      <div class="initials">
        <a href="index.php">SF</a>
      </div>
      <div>
        <ul class="page-links">
          <li><a href="pages/about.html">About Me</a></li>
          <li><a href="index.php#project">My Portfolio</a></li>
          <li><a href="pages/examples.html">Coding Examples</a></li>
          <li><a href="pages/scs.html">SCS Scheme</a></li>
          <li><a href="index.php#contact-form" class="contact-me">Contact Me</a></li>
        </ul>
      </div>
      <div class="socials">
        <a href="https://github.com/SarahFohse" target="_blank"><span class="icon-github"></span></a>
        <a href="#" class="hidden-social"><span class="icon-linkedin2"></span></a>
      </div>
    </div>
  </section>
    <div class="outer-container">
      
      <section class="main-img">
        <div class="img-content">
          <div class="animation-content">
            <svg viewBox="0 0 1418 116" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <g stroke="none" fill="none" fill-rule="evenodd" fill-opacity="0">
                <text id="myname" stroke="#fff" fill="#645F5A" font-weight="normal" font-family="PermanentMarker-Regular, Permanent Marker" font-size="144">
                  <tspan x="300" y="109"><!--
                    --><tspan>S</tspan><!--
                    --><tspan>a</tspan><!--
                    --><tspan>r</tspan><!--
                    --><tspan>a</tspan><!--
                    --><tspan>h</tspan><!--
                    --><tspan> </tspan><!--
                    --><tspan>F</tspan><!--
                    --><tspan>o</tspan><!--
                    --><tspan>h</tspan><!--
                    --><tspan>s</tspan><!--
                    --><tspan>e</tspan><!--
                  --></tspan>
                </text>
              </g>
            </svg>
          </div>
          <p id="job-title">
            <span>W</span>
            <span>e</span>
            <span>b</span>
            <span>&nbsp;</span>
            <span>D</span>
            <span>e</span>
            <span>v</span>
            <span>e</span>
            <span>l</span> 
            <span>o</span>
            <span>p</span>
            <span>e</span>
            <span>r</span>
          </p>
          <div class="scroll-down">
            <a href="index.php#project"><p>Scroll Down<br><span class="icon-circle-down"></span></p></a>
          </div>
        </div>
      </section>
      <section id="project" class="container">
        <div class="hidden-mobile">
          <a href="pages/portfolio.html" class="desktop-view-more">View More Projects <span class="icon-arrow-right2"></span></a>
        </div>
        <div class="project-content">
          <div class="proj-1">
            <a href="https://netmatters.sarah-fohse.netmatters-scs.co.uk/" target="_blank">View
            </a>
            <img src="img/netmatter-still.jpg" alt="netmatters homepage">
            <h3>Netmatters Homepage [HTML | CSS/Sass | JavaScript]</h3>
            <div class="info-text">
              <p>This project is a rebuild of the Netmatters Homepage. It was set as an assessment for the SCS Scheme.</p>
            </div>
          </div>
          <div class="proj-2">
            <a href="http://js-array.sarah-fohse.netmatters-scs.co.uk/" target="_blank">View</a>
            <img src="img/js-array.png" alt="JavaScript Array Project">
            <h3>JavaScript Array [HTML | CSS/Sass | JavaScript]</h3>
            <div class="info-text">
              <p>This project is using JavaScript to generate images and elements dynamically on the page. The images are being displayed as a carousel and the users are put into an array upon entering their email.</p>
            </div>
          </div>
          <div class="proj-3">
            <a href="https://netmatters.sarah-fohse.netmatters-scs.co.uk/contact.php" target="_blank">View</a>
            <img src="img/contact-still.jpg" alt="Netmatters Contact Page">
            <h3>Netmatters Contact Page [HTML | CSS/Sass | JavaScript | PHP]</h3>
            <div class="info-text">
              <p>This project focused on rebuilding the Netmatters Contact Page and server-side validation with PHP with successful entries being placed in a database.</p>
            </div>
            
          </div>
         
        </div>
        <div class="hidden-desktop">
          <a href="pages/portfolio.html" class="mobile-view-more">View More Projects <span class="icon-arrow-right2"></span></a>
        </div>
      </section>
      <section class="container" id="contact-form">
        <div class="info-content">
          <h4>Get In Touch</h4>
          <p>For professional enquiries beyond the scope of the form, please don't hesitate to contact me via email.</p>
          <p><a href="mailto:sarahfohse@gmail.com?subject=Enquiry">sarahfohse@gmail.com</a></p>
          <p>Please understand that depending on your enquiry I will  get back to you within two working days (Mo-Fr).</p>
        </div>
        <div class="form">
          <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="form-content" id= "form">
            <div class="input-control">
              <input type="text" name="firstname" id="firstname" placeholder="First Name*">
              <div class="error"></div>
            </div>
            <div class="input-control">
              <input type="text" name="lastname" id="lastname" placeholder="Last Name*">
              <div class="error"></div>
            </div>
            <div class="input-control" id="email-container">
              <input type="email" name="email" id="email" placeholder="Email Address*">
              <div class="error"></div>
            </div>
            <div class="input-control" id="subject-container">
              <input type="text" id="subject" name="subject" placeholder="Subject">
              <div class="error"></div>
            </div>
            <div class="input-control" id="message-container">
              <textarea name="message" id="message" placeholder="Message"></textarea>
              <div class="error"></div>
            </div>
            <div class="input-control">
              <input type="submit" id="submit" name="submit">
              <div class="error"></div>
            </div>
          </form>
          <p id="form-success" class="success-message success-hide">The form has been successfully submitted.</p>
        </div>
      </section>
      <div class="back-top">
        <a href="#"><span class="icon-circle-up"></span><br>Back To Top</a>
      </div>
    </div>
    <?php include("inc/connection.php"); ?>
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/form-validation.js"></script>

    <script src="js/main.js"></script>
    
    
  </body>
</html>
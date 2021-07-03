<!DOCTYPE html lang="en">

<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="Kewn Records is a record label based in Malta with the purpose of distributing music on high quality media."
    />
    <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="vendors/css/grid.css" />
    <link rel="stylesheet" type="text/css" href="resources/css/styles.css" />
    <link rel="stylesheet" type="text/css" href="resources/css/queries.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,300&display=swap"
      rel="stylesheet"
    />
    <link rel="shortcut icon" type="image/jpg" href="resources/img/KEWNrecords_emblem_Inverted.png"/>
    <!--This title will apear in the browser tab.-->
    <title>KEWN Records</title>
  </head>
  <body onload="startTimer()">
    <header class="no-select">
      <nav>
        <div class="row">
          <a href="index.php"
            ><img
              src="resources/img/KEWNrecords_emblem_Inverted.png"
              alt="KEWN Records logo"
              class="logo"
          /></a>
          <ul class="main-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="releases.html">Releases</a></li>
            <li><a href="artists.html">Artists</a></li>
            <li><a href="updates.html">Updates</a></li>
            <li><a href="about.html">About</a></li>
            <li><a class="selected" href="contact.php">Contact</a></li>
          </ul>
          <a class="mobile-nav-icon js--nav-icon">
            <ion-icon name="menu-outline" class="menu-icon"></ion-icon>
            <ion-icon name="close-outline" class="close-icon"></ion-icon>
          </a>
        </div>
      </nav>
      <div class="row page-title" id="form">
        <h1>Contact</h1>
      </div>

      <div class="row">
        <form method="post" action="resources/php/mailer-new-contact.php" class="contact-form">
            <div class="row">
              <?php
              if($_GET['success'] == 1) {
                echo "<div class=\"form-messages success\">Thank you! Your message has been sent.</div>";
              }

              if($_GET['success'] == -1) {
                echo "<div class=\"form-messages error\">Oops! Something went wrong. Please try again!</div>";
              }
              ?>
            </div>
            <div class="row">
                <div class="col span-1-of-3">
                    <!--The for property links the label to the input with id of "name".-->
                    <label for="name" style="color: #fff">Name</label>
                </div>
                <!--This colum will take the space of two columns.-->
                <div class="col span-2-of-3">
                    <!--The input element allows user input. The type specifies what kind of input. The name allows us to save the field.
                        The placeholder shows text until the user fills in the field. The required property makes it so that the form
                        cannot be submitted if this field is blank.-->
                    <input type="text" name="name" id="name" placeholder="Your name here" required>
                </div>
            </div>
            <div class="row">
                <div class="col span-1-of-3">
                    <label for="email" style="color: #fff">Email</label>
                </div>
                <div class="col span-2-of-3">
                    <input type="email" name="email" id="email" placeholder="Your email here" required>
                </div>
            </div>
            
            <div class="row">
                <div class="col span-1-of-3">
                    <label for="message" style="color: #fff">Message</label>
                </div>
                <div class="col span-2-of-3">
                    <textarea name="message" id="message" placeholder="Your message here"></textarea>
                </div>
            </div>
            <div class="row contact-submit-row">
                <div class="col span-1-of-3">
                    <label>&nbsp;</label>
                </div>
                <div class="col span-2-of-3 submit-btn-query">
                    <!--This will be a button for the user to submit the form.-->
                    <input type="submit" value="Submit">
                </div>
            </div>
        </form>
    </div>
    </header>

    <footer>
        <div class="row">
            <div class="col span-1-of-6 to-top">
              <a href=#top><svg class="social-logo" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" width="48"
              height="48" viewBox="0 0 250 250"><path class="social-path" d="M125,0A125,125,0,1,0,250,125,125,125,0,0,0,125,0Zm54.47,128H146v57.87a6.12,6.12,0,0,1-6.13,6.13H111.13a6.12,6.12,0,0,1-6.13-6.13V128H70.53a5.79,5.79,0,0,1-4.21-9.76l54.47-57.79a5.79,5.79,0,0,1,8.42,0l54.47,57.79A5.79,5.79,0,0,1,179.47,128Z"/></svg>
                <span>Back to top</span></a>
            </div>
            <div class="col span-5-of-6 social">
                <ul class="social-links">
                    <li><a href="https://www.facebook.com/kewnrecords" target="_blank">
                      <svg
                        class="social-logo"
                        xmlns="http://www.w3.org/2000/svg"
                        width="48"
                        height="48"
                      >
                        <path
                          class="social-path"
                          d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z"
                        />
                      </svg>
                    </a>
                    </li>
                    <li><a href="https://www.instagram.com/kewnrecords/" target="_blank">
                      <svg
                        class="social-logo"
                        xmlns="http://www.w3.org/2000/svg"
                        width="48"
                        height="48"
                      >
                        <path
                          class="social-path"
                          d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"
                        />
                      </svg>
                    </a>
                    </li>
                    <li><a href="https://kewnrecords.bandcamp.com/" target="_blank">
                      <svg
                        class="social-logo"
                        version="1.1"
                        id="Capa_1"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        x="0px"
                        y="0px"
                        width="48px"
                        height="48px"
                        viewBox="0 0 210 210"
                        style="enable-background: new 0 0 97.75 97.75"
                        xml:space="preserve"
                      >
                        <g>
                          <path
                            class="social-path"
                            d="M48.875,0C21.882,0,0,21.882,0,48.875S21.882,97.75,48.875,97.75S97.75,75.868,97.75,48.875S75.868,0,48.875,0z
                    M64.835,70.857H12.593l20.32-43.965h52.244L64.835,70.857z"
                          />
                        </g>
                      </svg>
                    </a>
                    </li>
                    <li><a href="https://www.youtube.com/channel/UCnEgZoFY8z5IwDB0EWnha2w" target="_blank">
                      <svg class="social-logo" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" width="48px"
                      height="48px" viewBox="0 0 260 260"><path class="social-path" d="M180.32,53.36A22.12,22.12,0,0,0,164.76,37.7C151,34,96,34,96,34s-55,0-68.76,3.7A22.12,22.12,0,0,0,11.68,53.36C8,67.18,8,96,8,96s0,28.82,3.68,42.64A22.12,22.12,0,0,0,27.24,154.3C41,158,96,158,96,158s55,0,68.76-3.7a22.12,22.12,0,0,0,15.56-15.66C184,124.82,184,96,184,96S184,67.18,180.32,53.36ZM78,122.17V69.83L124,96Z" transform="translate(-8 -34)"/></svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <!--&copy; is the copyright symbol.-->
            <p>Copyright &copy; 2021 by Kewn Records. All rights reserved. Logo by White Noise. Website by Benjamin Gatt.</p>
        </div>
    </footer>
  </body>
</html>

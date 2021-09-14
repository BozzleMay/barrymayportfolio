<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="flexBoxP/styles.css">
    <link href="flexBoxP/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="flexBoxP/assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="flexBoxP/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="flexBoxP/assets/css/style.css" rel="stylesheet">
    <title>My Website</title>
</head>
<body>
    <section id='header'>
        <header class="header">
            <div class="header-container">
                <div class="nav-bar">
                    <div class="brand">
                        <a href="#hero"><h1><span>B</span>arry<span>M</span>ay</h1></a>
                    </div>
                    <div class="nav-list">
                        <div class="hamburger"><div class="bar"></div></div>
                        <ul>
                            <li><a href="#hero" data-after="Home">Home</a></li>
                            <li><a href="#about" data-after="About">About</a></li>
                            <li><a href="#projects" data-after="Projects">Projects</a></li>
                             
                            <li><a href="#contact" data-after="Contact">Contact</a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </header>
    </section>
    <section id='hero'>
        <div class="hero container">
            <div>
                <h1>Hi, <span></span> </h1>
                <h1>My Name Is<span></span></h1>
                <h1>Barry<span></span></h1>
                <a href='#projects' type='button' class='cta'>Portfolio</a>
            </div>

        </div>
    </section>
    <section id="about">
        <div class="about-header">
        <h1  class="section-title">About <span>me</span></h1>
    </div>
        <div class="about container">
            
          <div class="col-left">
            <div class="about-img">
                <img src="screenshots/myself2.jpg"/>
            </div>
          </div>
          <div class="col-right">
            
            <h2>Full Stack Developer</h2>
            <p>I am web developer with a passion for problem solving. My expertise include HTML, CSS, Javascript (jQuery, AJAX, JSON), PHP & MySQL as well as specialising in "Mobile First Design" and "Single Page Apps" (SPA).
            </br></br>
                I am passionate, dedicated and driven in everything I set my mind to, and love to work alongside like minded people. 
                </p>
            <a href="./flexBoxP/screenshots/barryMayResume.docx" class="cta">Download Resume</a>
          </div>
        </div>
      </section>
   
    <section id='projects'>
        <div class="projects container">
            <div class="projects-header">
            <h1 class='section-title'>Recent <span>Projects</span></h1>
        </div>
        
        <div class='all-projects'>
            <div class="project-item">
                <div class="project-info">
                    <h1>Project Info</h1>
                    <h2>Coding is Love</h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis similique magnam saepe nihil mollitia necessitatibus expedita voluptates, perferendis ratione suscipit quam. Consectetur delectus illum iste aspernatur a deserunt quibusdam cumque!</p>

                </div>
                <div class="project-img">
                    <img src="https://th.bing.com/th/id/R6fc1450d28ffcafc3af92647abb13c81?rik=TruX9ZVs%2bYJl4A&riu=http%3a%2f%2fwww.ikozmik.com%2fContent%2fImages%2fuploaded%2fits-free-featured.jpg&ehk=Eu0XDSEaB5AVzzD1j0%2bzWqxNRETvh9hNtLBAkQ1ivAU%3d&risl=&pid=ImgRaw"/>
                </div>
            </div>
        
        <div class="project-item">
            <div class="project-info">
                <h1>Project 1</h1>
                <h2>Coding is Love</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis similique magnam saepe nihil mollitia necessitatibus expedita voluptates, perferendis ratione suscipit quam. Consectetur delectus illum iste aspernatur a deserunt quibusdam cumque!</p>

            </div>
            <div class="project-img">
                <img src="https://th.bing.com/th/id/R6fc1450d28ffcafc3af92647abb13c81?rik=TruX9ZVs%2bYJl4A&riu=http%3a%2f%2fwww.ikozmik.com%2fContent%2fImages%2fuploaded%2fits-free-featured.jpg&ehk=Eu0XDSEaB5AVzzD1j0%2bzWqxNRETvh9hNtLBAkQ1ivAU%3d&risl=&pid=ImgRaw"/>
            </div>
        </div>
    
    <div class="project-item">
        <div class="project-info">
            <a href="https://clone-3cf5c.web.app/" target="_blank"><h1>Amazon Clone</h1></a>
            <h2>HTML/CSS/React</h2>
            <p>Built an Amazon Clone with React, full E-Commerce solution including authentication and payment. I used Firebase for authentication, database, functions and hosting.  </p>

        </div>
        <div class="project-img">
            <img src="./flexBoxP/screenshots/amazonClone.png"/>
        </div>
    </div>

<div class="project-item">
    <div class="project-info">
        <a href="https://hulu-clone-f0eb7.web.app/" target="_blank"><h1>Hulu Clone</h1></a>
        <h2>HTML/CSS/React</h2>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis similique magnam saepe nihil mollitia necessitatibus expedita voluptates, perferendis ratione suscipit quam. Consectetur delectus illum iste aspernatur a deserunt quibusdam cumque!</p>

    </div>
    <div class="project-img">
        <img src="./flexBoxP/screenshots/huluClone.png"/>
    </div>
</div>

<div class="project-item">
    <div class="project-info">
        <h1>Project 4</h1>
        <h2>Coding is Love</h2>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis similique magnam saepe nihil mollitia necessitatibus expedita voluptates, perferendis ratione suscipit quam. Consectetur delectus illum iste aspernatur a deserunt quibusdam cumque!</p>

    </div>
    <div class="project-img">
        <img src="https://th.bing.com/th/id/R6fc1450d28ffcafc3af92647abb13c81?rik=TruX9ZVs%2bYJl4A&riu=http%3a%2f%2fwww.ikozmik.com%2fContent%2fImages%2fuploaded%2fits-free-featured.jpg&ehk=Eu0XDSEaB5AVzzD1j0%2bzWqxNRETvh9hNtLBAkQ1ivAU%3d&risl=&pid=ImgRaw"/>
    </div>
</div>

<div class="project-item">
    <div class="project-info">
        <h1>Project 5</h1>
        <h2>Coding is Love</h2>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis similique magnam saepe nihil mollitia necessitatibus expedita voluptates, perferendis ratione suscipit quam. Consectetur delectus illum iste aspernatur a deserunt quibusdam cumque!</p>

    </div>
    <div class="project-img">
        <img src="https://th.bing.com/th/id/R6fc1450d28ffcafc3af92647abb13c81?rik=TruX9ZVs%2bYJl4A&riu=http%3a%2f%2fwww.ikozmik.com%2fContent%2fImages%2fuploaded%2fits-free-featured.jpg&ehk=Eu0XDSEaB5AVzzD1j0%2bzWqxNRETvh9hNtLBAkQ1ivAU%3d&risl=&pid=ImgRaw"/>
    </div>
</div>
</div>

    </section>
    
    <section id='contact'>
        <div class="contact container">
            <div>
                <h1 class='section-title'>Get In <span>Touch</span></h1>
                
         
    <div id="contact" class="paddsection">
        <div class="container">
          <div class="contact-block1">
            <div class="row">
  
            
  
              <div class="col-lg-12">
                <form action="./flexBoxP/forms/contact.php" method="post" role="form" class="php-email-form">
                  <div class="row">
  
                    <div class="col-lg-6">
                      <div class="form-group contact-block1">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                        <div class="validate"></div>
                      </div>
                    </div>
  
                    <div class="col-lg-6">
                      <div class="form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                        <div class="validate"></div>
                      </div>
                    </div>
  
                    <div class="col-lg-12">
                      <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                        <div class="validate"></div>
                      </div>
                    </div>
  
                    <div class="col-lg-12">
                      <div class="form-group">
                        <textarea class="form-control" name="message" id='message' rows="12" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                        <div class="validate"></div>
                      </div>
                    </div>
  
                    <div class="col-lg-12 mb-3">
                      <div class="loading">Loading</div>
                      <div class="error-message"></div>
                      <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
  
                    <div class="col-lg-12">
                      <input type="submit" class="btn btn-defeault btn-send" value="Send message">
                    </div>
  
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
            

</div>
</section>
    <section id='footer'>
        <div class="footer container">
            <div class="brand"><h1><span>B</span>arry <span>M</span>ay</h1></div>
            <h2>Full Stack Developer</h2>
            <div class="social-icon">
                <div class="social-item">
                    <a href="#"><img src="https://img.icons8.com/ios-glyphs/30/000000/github.png"/></a>
                </div>
            </div>
            <p>Copyright 2021 Barry May. All rights reserved</p>
        </div>
    </section>
    <script src="flexBoxP/assets/vendor/jquery/jquery.min.js"></script>
    <script src="flexBoxP/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="flexBoxP/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="flexBoxP/assets/vendor/php-email-form/validate.js"></script>
    <script src="flexBoxP/assets/vendor/typed/typed.js"></script>
    <script src="flexBoxP/assets/vendor/jquery-sticky/jquery.sticky.js"></script>
    <script src="flexBoxP/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="flexBoxP/assets/vendor/venobox/venobox.min.js"></script>
    <script src="flexBoxP/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  
    <!-- Template Main JS File -->
    <script src="flexBoxP/assets/js/main.js"></script>
    <script src='./flexBoxP/app.js'></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/jpg" href="/images/favi.png"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css"
    rel="stylesheet"
  />
    <title>Contact Us</title>
</head>
<body>

    <!-- Navbar -->
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-dark text-white fixed-top">
            <a class="mx-auto d-block" href="index.html">
                <img src="/images/150.png" alt="">
              </a>
            <div class="container-fluid justify-content-center">

              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="bi bi-list text-white"></span>
              </button>
              <div class="collapse navbar-collapse right" id="navbarNavDropdown">
                <ul class="navbar-nav text-center ms-auto">
                  <li class="nav-item">
                    <a class="nav-link text-white" aria-current="page" href="index.html">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="portfolio.html">Portfolio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="contact.php">Contact Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="jobs.php">Job Opportunities</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="digitalart.html">Digital Architecture</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="motion.html">Motion Design</a>
                  </li>

                </ul>
              </div>
            </div>
          </nav>
    </header>


<!-- 1st about paragraph section -->
<section class="infosection p-3 paddingtop">
    <div class="container">
        <div class="row text-center g-4">

            <!-- about one -->

            <div class="col-md">
                <div class="text-dark">
                    <div class="card-body text-center">
                        <h1 class="h1bottom">We???re here to help!</h1>
                        <h4 class="card-title mb-3">
                            Fill out our form with as much information as possible to ensure our team can help you in the best way possible.

                        </h4>
                        <p class="card-text">
                            <a href="privacy.html">See our privacy policy for how we use your data. </a>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    
</section>
<!-- end -->


<div class="container mt-5 text-center mb-5">
    <h1>Contact Us</h1>
    <form class="row g-3" action="contactform.php" method="post">



  <div class="elem-group col-md-6">
    <label class="form-label" for="name">Your Name</label>
    <input class="form-control" type="text" id="name" name="visitor_name" placeholder="John Doe" pattern=[A-Z\sa-z]{3,20} required>
  </div>



  <div class="elem-group col-md-6">
    <label class="form-label" for="email">Your E-mail</label>
    <input class="form-control" type="email" id="email" name="visitor_email" placeholder="john.doe@email.com" required>
  </div>



  <div class="elem-group">
    <label class="form-label" for="department-selection">Choose Concerned Department</label>
    <select class="form-control" id="department-selection" name="concerned_department" required>
        <option value="">Select a Department</option>
        <option value="billing">Download</option>
        <option value="billing">Billing</option>
        <option value="marketing">Marketing</option>
        <option value="technical support">Technical Support</option>
    </select>
  </div>



  <div class="elem-group">
    <label class="form-label" for="title">Reason For Contacting Us</label>
    <input class="form-control" type="text" id="title" name="visitor_message" required placeholder="A question about my order">
  </div>



  <div class="elem-group col-md-12">
    <label class="form-label" for="message">Write your message</label>
    <textarea class="form-control" rows="3" id="message" name="visitor_message" placeholder="Say whatever you want." required></textarea>
  </div>



  <button class="btn btn-dark" type="submit">Send Message</button>
  <hr class="mb-4">
</form>
</div>





<!-- footer -->
<footer class="bg-light text-dark pt-5 footerborder">
            <div class="text-center text-md-left">
<div class="row text-center text-md-left">
    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3 paddingp">
        <h5 class="text-uppercase mb-4 font-weight-bold">
            About Us
        </h5>
        <hr class="mb-4">
        <p>Nunya Digital is a design-oriented firm located in Wickford focused on high-end residential and commercial rendering projects. We use cutting-edge 3D rendering technologies to deliver realistic visualisations to our clients who approach us with their product drawings and sketches.</p>
        <hr class="mb-4">
    </div>

    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3 paddingp">
        <h5 class="text-uppercase mb-4 font-weight-bold">
            Shortcuts
        </h5>
        <hr class="mb-4">
        <p>
            <a href="index.html" class="text-dark" style="text-decoration: none">Home</a>
        </p>
        <p>
            <a href="portfolio.html" class="text-dark" style="text-decoration: none">Portfolio</a>
        </p>
        <p>
            <a href="contact.php" class="text-dark" style="text-decoration: none">Contact Us</a>
        </p>
        <p>
            <a href="download.html" class="text-dark" style="text-decoration: none">Download Content</a>
        </p>
        <p>
            <a href="digitalart.html" class="text-dark" style="text-decoration: none">Digital Architecture</a>
        </p>
        <p>
            <a href="motion.html" class="text-dark" style="text-decoration: none">Motion Design</a>
        </p>
        <br>
        <p>
            <a href="copyright.html" class="text-dark" style="text-decoration: none">Copyright Policy</a>
        </p>
        <p>
            <a href="privacy.html" class="text-dark" style="text-decoration: none">Privacy Policy</a>
        </p>
        <p>
            <a href="termsofuse.html" class="text-dark" style="text-decoration: none">Terms Of Use</a>
        </p>
        <hr class="mb-4">
    </div>

    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3 paddingp">
        <h5 class="text-uppercase mb-4 font-weight-bold">EARN REVENUE</h5>
        <hr class="mb-4">
        <p>
            <a href="contact.php" class="text-dark" style="text-decoration: none">Sell Products on Our Website</a>
        </p>
        <p>
            <a href="contact.php" class="text-dark" style="text-decoration: none">Advertise Your Products</a>
        </p>
        <p>
            <a href="contact.php" class="text-dark" style="text-decoration: none">Become An Affiliate</a>
        </p>
        <hr class="mb-4">
    </div>

    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3 paddingp">
        <h5 class="text-uppercase mb-4 font-weight-bold">COMPANY SERVICES</h5>
        <hr class="mb-4">
        <p>
            Architectural visualisation
        </p>
        <p>
            Interior Rendering
        </p>
        <p>
            3D Modeling
        </p>
        <p>
            3D Animation | Walkthrough
        </p>
        <p>
            Architect | Design | CAD
        </p>
        <p>
            Virtual Reality Solutions for
        </p>
        <p>
            Architects
        </p>
        <p>
            Site Plan Rendering
        </p>
        <p>
            3D Floor Plan
        </p>
        <hr class="mb-4">
    </div>

    <div class="row d-flex justify-content-center">
        <div>
            <p>
                Copyright 2021 Nunya Group
            </p>
        </div>
    </div>

    <div class="row d-flex-justify-content-center">
        <div class="text-center">
            <ul class="list-unstyled list-inline">
                <li class="list-inline-item">
                    <a href="#" class="text-dark">
                        <i class="bi-facebook"></i>
                    </a>
                </li>

                <li class="list-inline-item">
                    <a href="#" class="text-dark">
                        <i class="bi-twitter"></i>
                    </a>
                </li>

                <li class="list-inline-item">
                    <a href="https://www.instagram.com/nunyadigital/" class="text-dark">
                        <i class="bi-instagram"></i>
                    </a>
                </li>

                <li class="list-inline-item">
                    <a href="#" class="text-dark">
                        <i class="bi-linkedin"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>



</div>
    </div>

</footer>









<!-- scripts -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"
></script>
<script type="text/javascript">
document.addEventListener("contextmenu",function(NunyaDigital)
{
    NunyaDigital.preventDefault();
});
</script>
<script data-ad-client="ca-pub-1506924428061176" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
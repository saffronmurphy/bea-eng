
<?php

if($_POST["message"]) {

mail("info@bea-eng.co.uk", "Here is the subject line",

$_POST["insert your message here"]. "From: an@email.address");

}

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;700;900&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</head>
</head>

<body>


  <section class="header white-section">

    <!-- Nav Bar -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand logo" href=""><img class="logo" src="images/logo.jpg" alt="Bea Engineering Design Logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarToggler">
        <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="#intro">Info</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#experience">Experience</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
        </ul>

      </div>
    </nav>
  </section>

  <section class="white-section" id="intro">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6">
          <h1>
            <p>

              We are a structural design consultancy based in Devon with experience in both Historic buildings
              and innovative new-build design.
            </p>
            <p>
              Toby is a Chartered Structural Engineer and is an Accredited Conservation Engineer through CARE.
          </h1><br />
          </p>
          <div class="contact-button-container">
            <a href="#contact" class="contact-button btn" type="button" name="button">Contact Us</a><br />
          </div>

        </div>

        <div id="buildings-carousel" class="carousel slide col-lg-6" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/cleve-abbey.jpg" class="carousel-image" alt="...">
            </div>
            <div class="carousel-item">
              <img src="images/modern-shelter.jpg" class="carousel-image" alt="...">
            </div>
            <div class="carousel-item">
              <img src="images/balcony.jpg" class="carousel-image" alt="...">
            </div>
            <div class="carousel-item">
              <img src="images/hotel-du-vin.jpg" class="carousel-image" alt="...">
            </div>
            <div class="carousel-item">
              <img src="images/barn.jpg" class="carousel-image" alt="...">
            </div>
            <div class="carousel-item">
              <img src="images/N140006.jpg" class="carousel-image" alt="...">
            </div>
          </div>
        </div>



        <!-- <div class=" carousel col-lg-6">
          <img class=" carousel-image" src="images/N140006.jpg" alt="">
        </div> -->

        <!-- <div class="row">

          <div class="col-3">
          </div>
          <div class="col-6 testimonial">
            <p>
              'Whilst fulfilling the role of Senior Project Manager at English Heritage undertaking major projects across the country
              I have worked with Toby as Senior Structural Engineer for nearly 10 years. We undertook many conservation projects on
              some of the country’s most valued historic buildings and structures.
              I have found him to be consistently reliable, knowledgeable and valued as a member of the design team. Toby conducts himself
              in a very professional way but is also very personable; an excellent team player. I would not hesitate in working with Toby
              on future projects.'
            </p>
            David Brown (Project Manager)
          </div>
          <div class="col-3">

          </div>
        </div> -->
      </div>
    </div>
  </section>

  <section class="green-section" id="about">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6">
          <div class="toby-title">
            <img class="toby" src="images/toby-circle.png" alt="Toby Murphy Conservation Engineer"><br />
            <h2>Toby Murphy</h2><br />
            <h3>
              MEng(Hons) CEng MIStructE<br />
              Conservation Accredited Engineer (CARE)
            </h3>
          </div>
        </div>
        <div class="col-lg-6">
          <p>
            I am a chartered structural engineer (CEng) and a Member of the Institution of Structural Engineers (MIStructE). I am a
            Conservation Accredited Register of Engineers (CARE). I have a Masters Degree in Civil and Architectural Engineering
            (MEng Hons) from the University of Bath.
            I have worked on large educational projects to small self-build projects while working in private practice. During my
            time at Historic England I have worked on numerous buildings within the National Heritage Collection, some of the most
            important historic structures in England.
          </p>
          <p>
            My experience comes through a true understanding of the materials used in construction, past and present, whether this
            is modern CLT timber or historic cast iron and masonry. During my career I have worked on multi-million pound new build
            schools and commercial refurbishments, unique Heritage At Risk projects, and bespoke residential projects.
          </p>

          <p>
            I believe the best structural solutions often come from an understanding of the end use and user, and the capacity of
            the materials to deliver the building needs.
          </p>

          <p>
            For the last two years, I have lectured on the civil and architectural engineering course at the University of Bath to
            the final year students, on the ‘conservation of structural metal work’ and run a one-day workshop on conservation engineering.
          </p>

        </div>

      </div>



    </div>
  </section>

  <section class="white-section" id="experience">
    <div class="container-fluid">

      <div class="row">

        <div class=" speciality col-xl-4">
          <div class="card">
            <div class="card-body">
              <h2 class="card-title">Historic Buildings</h2>
              <img class="buildings card-image" src="images/constables-tower.jpg" alt="Constable's Tower">
              <div class="card-text">
                <p>
                  I am a Conservation Accredited Engineer (CARE) based in Devon. I have worked for Historic England
                  for over 7 years.
                  During this time I provided a design service to the English Heritage Trust which looks after over
                  400 properties in
                  the national heritage collection.
                </p>
                <p>
                  These projects included Audley End House, Dover Castle, Pendennis Castle, and
                  Harmondsworth Great Barn. I have also been involved in the assessment and review
                  of the Shrewsbury Flaxmill.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="speciality col-xl-4">
          <div class="card">
            <div class="card-body">
              <h2 class="card-title">New Build</h2>
              <img class="buildings card-image" src="images/belle-vue-extension.jpg" alt="Belle Vue Extension">
              <div class="card-text">
                <p>
                  Prior to working for Historic England I worked for Integral Engineering Design as a project engineer.
                </p>
                <p>
                  Projects included
                  St Peters Primary School in Gloucester – constructed of a timber stud and CLT frame, The Hereford College of Art Hub –
                  an exposed CLT and Glulam frame, A number of Steel and Concrete framed buildings, and the refurbishment of Hotel Du Vin,
                  Exeter. I also oversaw the new shelter at Cleeve Abbey while at Historic England.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="speciality col-xl-4">
          <div class="card">
            <div class="card-body">
              <h2 class="card-title">Consultancy</h2>
              <img class="buildings card-image" src="images/chains.jpg" alt="Chains">
              <div class="card-text">
                <p>
                  My work at Historic England included providing support and advice to Historic England
                  Inspectors and Local Authority
                  Conservation Officers in reviewing structural aspects of listed building consent.
                </p>
                <p>
                  This also included assessing and
                  outlining structural repairs to buildings ‘At Risk’ for inclusion on the HAR register.
                </p>
                <p>
                  I have also provided client side advice to the English Heritage Trust on projects such as
                  the Iron Bridge.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="green-section" id="contact">
    <div class="container-fluid contact-info">

      <div class="row">
        <div class="contact-section col-lg-6">
          If you would like to contact us about a new project, please send us a message
          containing as much information as possible, including photos if you have any.<br /><br /><br />

          <div class="contact-details">
            <a class="email-link" href="mailto: info@bea-eng.co.uk">info@bea-eng.co.uk</a><br /><br />
            ​
            Bea Engineering Design Ltd<br />
            Belle Vue, Beaford<br />
            EX19 8LN Devon<br /><br />
            ​
            01805 621 096
          </div>
        </div>
        <!-- <div class="contact-section col-lg-6">
          <form method="post" name="contact-form" action="contact.php">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Name:</label>
              <input type="text" name="name" class="form-control" id="user-name">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Email address:</label>
              <input type="email" name="email" class="form-control" id="user-email" placeholder="name@example.com">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Phone Number:</label>
              <input type="text" name="phone" class="form-control" id="user-phone-number">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea" class="form-label">Your message:</label>
              <textarea name="message" class="form-control" id="user-message" rows="3"></textarea>
            </div>
            <div class="mb-3">
              <label for="formFileMultiple" class="form-label">Multiple files input example</label>
              <input class="form-control" type="file" id="formFileMultiple" multiple>
            </div>

            <input type="submit" class=" email-button btn btn-light" value="Submit" name="button"><br />
          </form>
        </div> -->
      </div>
    </div>
  </section>

  <section>
    <div class="footer">
      <div class="footer-text">


        Bea Engineering Design Ltd is a company registered in England and Wales.<br />

        Registered Number 12077071<br />

        Registered Office: Belle Vue, Beaford, EX19 8LN
      </div>
    </div>
  </section>

</body>

</html>

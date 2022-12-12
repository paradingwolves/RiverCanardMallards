<?php
require_once("../layouts/header.php");
?>
        <!-- 
        -----------------------------           
            
        IMAGE CAROUSEL 
        
        -----------------------------
        -->
      <div id="photoCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <ol class="carousel-indicators">
          <li data-bs-target="#photoCarousel" data-bs-slide-to="0" class="active"></li>
          <li data-bs-target="#photoCarousel" data-bs-slide-to="1"></li>
          <li data-bs-target="#photoCarousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active" style="background-image: url(imgs/saucy.webp);">
            <div class="container">
              <h1>Mallards</h1>
              <p>Root for the Mallards!</p>
              <a href="schedule.html" class="btn btn-lg btn-primary">
                Schedule
              </a>
            </div>
          </div>
          <div class="carousel-item" style="background-image: url(imgs/joeDirt.webp);">
            <div class="container">
              <h1>Support the Green and Orange</h1>
              <p>Sign up for our Annual Bean Bag Tournament!</p>
              <a href="fundraising.html" class="btn btn-lg btn-primary">
                Fundraising
              </a>
            </div>
          </div>
          <div class="carousel-item" style="background-image: url(imgs/scratchAndSniff.webp);">
            <div class="container">
              <h1>Mallards Gear</h1>
              <p>Get some rad Mallards Gear</p>
              <a href="https://river-canard-mallards.square.site/" target="_blank" class="btn btn-lg btn-primary">
                Mallards Gear
              </a>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#photoCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#photoCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
        </button>
      </div>
     
      <div class="row">
        <div class="col-lg-5"></div>
        <div class="col-lg-4"><h2 id="goMallards">Go Mallards!</h2></div>
        <div class="col-lg-3"></div>
      </div>
      <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
          <img id="steezus" src="imgs/bigBootySteeze.webp" alt="steeze and kurt"/>
        </div>
        <div class="col-lg-1"></div>
      </div>
      <div class="row">
        <div class="col-lg-5"></div>
        <div class="col-lg-3"><h3 id="getToKnow">Get To Know The Mallards</h3></div>
        <div class="col-lg-4"></div>
      </div>
      <div class="row">
        <div class="col-lg-5"></div>
        <div class="col-lg-2">
        <form id="rosterButtonForm" action="roster.php">
          <input class="bg-success" id="rosterButton"type="submit" value="Our Roster">
        </form>
        <div class="col-lg-5"></div>
      </div>
    </div>
    <!-- 
    -----------------------------           
        
      PLAYER REGISTRATION FORM 
    
    -----------------------------
    -->
    <div class="container-md">
        <div class="row">
            <div class="col-md-4"></div>
            <h3 class="col-md-4">Interested in Becoming a Mallard?</h3>
            <div class="col-md-4"></div>
        </div>
        <!-- start of row -->
        <div id="formMarginTop" class="row">
          <!-- Margin for desktop -->
          <div class="col-md-4"></div>
          <!-- form -->
          <form class="col-md-4 bg-dark needs-validation" id="playerForm" novalidate>
            <fieldset>
              <div class="form-group">
              <!--   <label for="fullName" class="form-label mt-4">Full Name</label> -->
                <input type="text" class="form-control mt-4" id="fullName" aria-describedby="enterFullName" placeholder="Your Name" required>
              </div>
              <div class="form-group">
                <!-- <label for="email1" class="form-label mt-4">Email address</label> -->
                <input type="email" class="form-control mt-4" id="email1" aria-describedby="emailHelp" placeholder="Your Email" required>
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                <!-- <label for="phoneNumber" class="form-label mt-4">Phone Number</label> -->
                <input type="tel" class="form-control" id="phoneNumber" aria-describedby="enterphoneNumber" placeholder="Phone Number" required>
              </div>
              <div class="form-group">
                <!-- <label for="lastTeam" class="form-label mt-4">Last Team Played For</label> -->
                <input type="text" class="form-control mt-4" id="lastTeam" aria-describedby="enterlastName" placeholder="Last Team Played For" required>
              </div>
              <div class="form-group">
                <!-- <label for="city" class="form-label mt-4">City</label> -->
                <input type="text" class="form-control mt-4" id="city" aria-describedby="enterCity" placeholder="City" required>
              </div>
              <legend class="mt-4">Position(s)</legend>
              <input type="text" class="form-control mt-4 positions" id="position" aria-describedby="enterPosition" placeholder="Position" required>
            </fieldset>
            <button type="submit" id="Submit" class="btn btn-success">Submit</button>
            <div style="margin-top:3%;" class="alert alert-dismissible alert-danger">
              <button type="button" class="btn-close"></button>
              <strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again.
            </div>
          </form>
          <div class="col-md-4"></div>
        </div>
      </div>
      <div class="container-md contactUs">
        <div class="row">
          <div class="col-lg-3"></div>
          <div class="col-lg-6">
            <section>
              <h2>Contact Us</h2>
              <h5>River Canard Mallards</h5>
              <p>Vollmer Complex, 2121 laurier, LaSalle, Ontario</p>
              <a href="mailto:rivercanardmallards@gmail.com">RiverCanardMallards@gmail.com</a>
            </section>
          </div>
        </div>
      </div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11818.509039755394!2d-83.052992!3d42.2224105!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdfbd76ee9154b1ad!2sVollmer%20Culture%20and%20Recreation%20Complex!5e0!3m2!1sen!2sca!4v1670535696856!5m2!1sen!2sca" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      <!-- The Modal -->
      <div class="row">
          <div class="col-md-4"></div>
          <div id="myModal" class="modal col-md-4">
            <!-- Modal content -->
            <div class="modal-content">
              <div class="modal-header">
                <span class="close">&times;</span>
                <h2>Successfully Registered!</h2>
              </div>
              <div class="modal-body">
                <p>Your player registration form was successfully submitted!</p>
                <p>You will be contacted by email for spring tryouts!</p>
              </div>
              <div class="modal-footer">
                <h3>River Canard Mallards Baseball</h3>
              </div>
            </div>
          </div>
        <div class="col-md-4"></div>
      </div> 
    <?php
      require_once("../layouts/footer.php");
    ?>
<?php require(APPPATH . 'views/header.php'); ?>

<section class="contact-us-form">
  <div class="con-wrapper">
    <div class="container-fluid">
      <div class="row text-start">
        <!-- Left Column -->
        <div class="col-md-5 bg-sky-blue-4 d-flex  justify-content-center position-relative    contact-us-left">

          <div>
            <h2>Our offices</h2>
            <p>Eninrac Consulting Private Limited,<br> 2nd Floor B-130, B-Block<br> Sector 65, Noida - 201301, Uttar Pradesh</p>
            <p>
              <a href="tel:(+91) 9319048963,">(+91) 9319048963</a><br>
              <a href="mailto:connect@eninrac.com">connect@eninrac.com</a>
            </p>
            <div class="py-1">
              <h2>Press Enquiries</h2>
              <p>
                <a href="mailto:press@rhomotion.com">connect@eninrac.com</a>
              </p>
            </div>
            <div class="py-1">
              <h2>Want to work with us?</h2>
              <p style="  max-width: 300px;">We're always looking for new talent and would love to hear from you.</p>
              <p>
                <a href="mailto:careers@rhomotion.com">careers@rhomotion.com</a>
              </p>
            </div>

            <a href="https://www.google.com/" class="btn border border-dark btn-md rounded-md px-3 py-2 font-medium" style="background-color: #bad0f6; border:1px solid black !important;">See open positions</a>
          </div>
        </div>
        <!-- Right Column -->
        <div class="col-md-7  bg-primary-200 contact-us-right">
          <div class="container">
            <h2>Get in touch</h2>
            <p>Contact us to discuss our products and how they can support you.</p>
            <form enctype="multipart/form-data" method="post" name="contact-us-form" id="contact-us-form" onsubmit=" return validateForm()">
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="firstName" class="form-label">First Name <span class="text-danger">*</span></label>
                  <input type="text" id="firstName" name="firstName" class="form-control" placeholder="Name" required>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="lastName" class="form-label">Last Name <span class="text-danger">*</span></label>
                  <input type="text" id="lastName" name="lastName" class="form-control" placeholder="Last name" required>
                </div>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email address <span class="text-danger">*</span></label>
                <input type="email" id="email" name="email" class="form-control" placeholder="email@youremailaddress.com" required>
              </div>
              <div class="mb-3">
                <label for="phone" class="form-label">Phone number <span class="text-danger">*</span></label>
                <div class="input-group">
                  <span class="input-group-text">+91</span>
                  <input type="tel" id="phone" name="phone" class="form-control" placeholder="xxxxxxxxxx" required>
                </div>
              </div>

              <button type="submit" class="btn text-white bg-primary-700  px-2 py-2">Register interest</button>
              <p class="py-4 fs-14">By submitting this form, you agree to Eninrac&#39;s <u>privacy policy</u>.</p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>




<script>
  function footerQuery() {
    {
      var input = document.getElementById("footer-query-input");
      var data = {
        email: input.value
      };
      if (checkEmail(data.email)) {
        sendData(data);
        input.value = "";

      } else {
        document.getElementById("footer-query-input-error").style.display = "block";
        input.style.border = "1px solid red";


      }

    }
  }



  function sendData(data) {
    console.log(data);


  }

  function validateForm() {
    var form = document.getElementById("contact-us-form");
    form.addEventListener("submit", (e) => {
      e.preventDefault();
    })

    var firstName = document.forms["contact-us-form"]["firstName"].value;
    var lastName = document.forms["contact-us-form"]["lastName"].value;
    var email = document.forms["contact-us-form"]["email"].value;
    var phone = document.forms["contact-us-form"]["phone"].value;

    if (firstName == "" || lastName == "" || email == "" || phone == "") {
      alert("All fields must be filled out");
      return false;
    }

    var atposition = email.indexOf("@");
    var dotposition = email.lastIndexOf(".");

    if (atposition < 1 || dotposition < atposition + 2 || dotposition + 2 >= email.length) {
      alert("Please enter a valid email address");
      return false;
    }

    var phonePattern = /^\d{10}$/;

    if (!phonePattern.test(phone)) {
      alert("Wrong Phone Number");
      return false;

    }
    let data = {
      firstName: firstName,
      lastName: lastName,
      email: email,
      phone: phone
    }
    sendData(data, );
    return true;

  }



  function checkEmail(email) {

    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (!filter.test(email)) {
      email.focus;
      return false;
    }
    return true;
  }
</script>

<?php require(APPPATH . 'views/footer.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Contact Me</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <style>
.contact {
    background: #2c2a2b;
    background-size: cover;
    background-position: center;
}

.contact__form-container {
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    background: white;
    padding: 2rem; /* Adjust the padding to make it smaller */
    margin-top: 3rem; /* Adjust the margin-top to control the spacing */
    max-width: 40rem; /* Adjust the maximum width to make it smaller */
    text-align: right;
    width: 95%;
    border-radius: 5px;
    margin: 2rem auto 0 auto; /* Remove the duplicate margin property */
}

@media only screen and (max-width: 37.5em) {
    .contact__form-container {
        padding: 1.5rem; /* Adjust the padding for smaller screens */
    }
}

.contact__form-field {
    margin-bottom: 2rem; /* Adjust the margin for spacing between fields */
}

@media only screen and (max-width: 37.5em) {
    .contact__form-field {
        margin-bottom: 1.5rem; /* Adjust the margin for smaller screens */
    }
}

.contact__form-label {
    color: #666;
    font-size: 1.4rem;
    letter-spacing: 1px;
    font-weight: 700;
    margin-bottom: 1rem;
    display: block;
    text-align: left;
}

.contact__form-input {
    color: #333;
    padding: 1.5rem; /* Adjust the padding for smaller input fields */
    width: 100%;
    border: 1px solid #ebebeb;
    font-size: 1.6rem;
    letter-spacing: 0px;
    background: #f0f0f0;
    border-radius: 5px;
    font-weight: 600;
}

.contact__form-input::placeholder {
    color: #999;
    font-weight: 600;
    font-size: 1.6rem;
}

.contact__btn {
    width: 30%;
    padding: 1.5rem 2rem; /* Adjust the padding for smaller button */
    font-size: 1.6rem;
    background-color:#de2277;
    border-radius: 20px;
}

@media only screen and (max-width: 37.5em) {
    .contact__btn {
        width: 100%;
    }
}

  </style>
</head>
<body>
      <nav id="main-menu">
        <ul class="nav-bar">
            <li class="nav-button-about"><a href="home.html">About</a></li>
            <li class="nav-button-projects"><a href="#">My Work</a></li>
            <li class="nav-button-blog"><a href="#">Blog</a></li>
            <li class="nav-button-contact"><a href="#">Contact</a></li>
        </ul>
    </nav>
     
    <h1 class="contact" style="color:#de2277;" >Contact Me</h1>
    <br>
   <section id="contact" class="contact sec-pad dynamicBg">
      <div class="main-container">
        <h2 style="color:white ; font-weight:200" class="heading heading-sec heading-sec__mb-med">
          <span class="heading-sec__sub heading-sec__sub--lt">
          Wish to get in touch? Send me a message below!
          </span>
        </h2>

        <div class="contact__form-container">
            
          <form action="#" class="contact__form">
            <div class="contact__form-field">

              <label class="contact__form-label" for="name">Name</label>
              <input style="width:100%;padding-right:0px
    "
                required
                placeholder="Enter Your Name"
                type="text"
                class="contact__form-input"
                name="name"
                id="name"
              />

            </div>
            <div class="contact__form-field">
              <label class="contact__form-label" for="email">Email</label>
              <input style="width:100%;padding-right:0px
    "
                required
                placeholder="Enter Your Email"
                type="text"
                class="contact__form-input"
                name="email"
                id="email"
              />
            </div>
            <div class="contact__form-field">
              <label class="contact__form-label" for="message">Message</label>
              <textarea
              style="width:100%;padding-right:0px
    "
                required
                cols="20"
                rows="10"
                class="contact__form-input"
                placeholder="Enter Your Message"
                name="message"
                id="message"
              ></textarea>
              
            </div>
            <button type="submit" class="btn btn--theme contact__btn">
              Submit
            </button>
          </form>
        </div>
      </div>
    </section>
     
</body>
</html>

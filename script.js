// Define an object to store company details
const companyDetails = {
  'Brace Media': '(April 14th 2023 - July 14 th 2023)It is a digital marketing based startup.I worked on the frontend of websites of clients using html,css,javascript,bootstrap. Also used PHP and some APIs. Also got some idea about SEO and Google Analytics.',
  'OSOC': '(July 2023 - August 2023) It is a open source program by upes university which helps beginners in Open Source to get started . I contributed to Swayam Bazaar- particularly to the backend of the site using nodejs and mongodb. Worked on the database model , api routes, authentication of users,etc '
};

// Get the company buttons and company info element
const companyButtons = document.querySelectorAll('.company-button');

// just selecting that div with the id of company-info and storing it in a variable
const companyInfo = document.getElementById('company-info');

// Function to update the company info when a button is clicked
function updateCompanyInfo(event) {
  // Remove the 'active' class from all buttons
  companyButtons.forEach(button => button.classList.remove('active'));

  // Add the 'active' class to the clicked button
  event.target.classList.add('active');

  // Get the company name from the button's data attribute
    const companyName = event.target.getAttribute('data-company');

  // Retrieve the details for the selected company from the object
    const details = companyDetails[companyName];

   

  // Update the company info element
  companyInfo.textContent = details;
}

// Add click event listeners to the company buttons
companyButtons.forEach(button => {
  button.addEventListener('click', updateCompanyInfo);
});



// Initial info
companyInfo.textContent = 'Select a company to see details.';

//projects section

let slideIndex = 1;
const slides = document.getElementsByClassName("slide");
const dots = document.getElementsByClassName("dot");

// Function to show a specific slide
function showSlides(n) {
  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }

  // Hide all slides
  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  // Remove the "active" class from all dots
  for (let i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }

  // Display the current slide and mark its corresponding dot as active
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " active";
}

// Function to advance to the next slide
function plusSlides(n) {
  showSlides((slideIndex += n));
}

// Function to navigate to a specific slide
function currentSlide(n) {
  showSlides((slideIndex = n));
}

// Automatically advance to the next slide every 3 seconds (3000 milliseconds)
setInterval(function () {
  plusSlides(1);
}, 5000);

// Initialize the slider
showSlides(slideIndex);

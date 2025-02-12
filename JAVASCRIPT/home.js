const mainImg = document.querySelector('.right img');
const images = [
  "IMAGES/people taking off on plane edited.jpg",
  "IMAGES/fiji vacation3.jpg",
  "IMAGES/fiji vacation1.jpg",
  "IMAGES/fiji vacation2.jpg",
  "IMAGES/Group 15.png",

];

let currentIndex = 0;

setInterval(() => {
  mainImg.src = images[currentIndex];
  currentIndex = (currentIndex + 1) % images.length; 
}, 5000);

// Function to check if an element is in the viewport
function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
        rect.top <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.bottom >= 0
    );
}

// Select article three element img
const artThreeImg = document.querySelectorAll('.art-three-right-img');

// Function to add the slide-in class when elements are in viewport
function slideInElements() {
    // Handle h2 elements
    artThreeImg.forEach(function(cont) {
        if (isInViewport(cont)) {
            cont.classList.add('slideInForArtThreeImg');
        }
    });
    
}
// Check for scrolling and initial page load
window.addEventListener('scroll', slideInElements);
window.addEventListener('DOMContentLoaded', slideInElements);

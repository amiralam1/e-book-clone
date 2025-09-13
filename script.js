/* =========================================================================================== */

                                    /* NAVBAR SECTION JS*/

/* =========================================================================================== */


  const navbar = document.querySelector('.navbar');
  window.onscroll = function() {
      if (window.scrollY > 0) {
          navbar.classList.add('scrolled');
      } else {
          navbar.classList.remove('scrolled');
      }
  };

  const hamburger = document.querySelector('.hamburger');
  const rightNav = document.querySelector('.right-nav');
  const expandArrow = document.getElementById('expand-arrow');
  
  hamburger.addEventListener('click', () => {
    rightNav.classList.toggle('show');
    hamburger.classList.toggle('filter-invert')
    expandArrow.classList.toggle('filter-invert')
    expandArrow.classList.toggle('rotate-right');
  });
  
  const dropdownItems = document.querySelectorAll('.toggle');
  
  dropdownItems.forEach(item => {
    const arrowIcon = item.querySelector('.arrow-icon');
  
    item.addEventListener('click', function (event) {
      const clickedInsideDropdown = event.target.closest('.dropdown-1');
  
      if (clickedInsideDropdown) {
        return;
      }
  
      const isActive = item.classList.contains('active');
  
      if (isActive) {
        item.classList.remove('active');
        arrowIcon.classList.remove('rotate');
      } else {
        item.classList.add('active');
        arrowIcon.classList.add('rotate');
      }
    });
  });
  document.querySelector('.logo').addEventListener('click', function() {
    window.location.href = 'home.php';
});

/* =========================================================================================== */

                                    /* COUNTER SECTION JS*/

/* =========================================================================================== */


document.addEventListener("DOMContentLoaded", () => {
    const counters = document.querySelectorAll(".num");
    const speed = 100; // Speed of the counter animation

    const animateCounter = (counter) => {
        const target = +counter.getAttribute("data-val"); // Target value
        const increment = Math.ceil(target / speed); // Increment value
        let count = 0;

        const updateCount = () => {
            if (count < target) {
                count += increment;
                let displayNumber = Math.min(count, target); // Ensure we don't go over target

                counter.innerHTML = `<span>${displayNumber}+</span>`;
                // Vertical scroll effect using transform
                const span = counter.querySelector('span');
                span.style.transform = `translateY(${-(displayNumber)}%)`;

                requestAnimationFrame(updateCount); // Continue animation
            } else {
                counter.innerHTML = `<span>${target}+</span>`;
            }
        };

        updateCount();
    };

    // Use IntersectionObserver to trigger counter when visible
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    const counter = entry.target;
                    animateCounter(counter);
                    observer.unobserve(counter); // Stop observing after animation completes
                }
            });
        },
        {
            threshold: 0.5, // Counter will start when 50% visible
        }
    );

    counters.forEach((counter) => {
        observer.observe(counter); // Start observing each counter
    });
});

function addRedirectListener(selector, url) {
  const elements = document.querySelectorAll(selector); // Selects all elements with the selector
  if (elements.length) { // Check if there are any matching elements
      elements.forEach(element => {
          element.addEventListener('click', function() {
              window.location.href = url; // Redirects to the specified URL on click
          });
      });
  } else {
      console.log(`No elements found for selector "${selector}"`);
  }
}

// Usage example with classes and IDs
document.addEventListener('DOMContentLoaded', function() {
  addRedirectListener('#harpercollins', 'https://www.harpercollins.com/');
  addRedirectListener('#penguin', 'https://www.penguinrandomhouse.com/');
  addRedirectListener('#hachette', 'https://www.hachettebookgroup.com/');
  addRedirectListener('#simonschuster', 'https://www.simonandschuster.com/');
  addRedirectListener('#macmillan', 'https://us.macmillan.com/');
  addRedirectListener('.team-button', 'ourTeam.php'); // This will apply to all elements with class 'team-button'
  addRedirectListener('.ghostwriting-btn', 'ghostwritingServices.php');
  addRedirectListener('.book-editing-btn', 'bookEditingServices.php');
  addRedirectListener('.book-coaching-btn', 'bookCoachingServices.php');
  addRedirectListener('.book-proposal-btn', 'bookProposals.php');
  addRedirectListener('.member-description', 'ourTeam.php'); // Applies to all elements with 'member-description' class
  addRedirectListener('.autobiography', 'autobiographyBooks.php'); // Applies to all elements with 'member-description' class
  addRedirectListener('.selfhelp', 'health&self-helpBooks.php'); // Applies to all elements with 'member-description' class
  addRedirectListener('.business', 'business&LeadershipBooks.php'); // Applies to all elements with 'member-description' class
  addRedirectListener('.fiction', 'fiction.php'); // Applies to all elements with 'member-description' class
  addRedirectListener('.nonfiction', 'generalNonfiction.php'); // Applies to all elements with 'member-description' class
  addRedirectListener('.childrens-books', 'children\'sBooks.php'); // Applies to all elements with 'member-description' class
  addRedirectListener('#team-btn', 'ourTeam.php');

});











    




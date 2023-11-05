// Function to add 'active' class when an element is in the viewport
function handleAnimation(entries, observer) {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add('active');
      observer.unobserve(entry.target);
      console.log(
        `Element with class "${entry.target.classList}" is now in viewport.`
      );

    }
  });
}

// Create an Intersection Observer
const observer = new IntersectionObserver(handleAnimation, {
  root: null,
  rootMargin: '0px',
  threshold: 1, 
});

// Select all elements with the 'animate-fade' class
const animatedElements = document.querySelectorAll('.animate-fade');

// Observe each animated element
animatedElements.forEach((element) => {
  observer.observe(element);
});

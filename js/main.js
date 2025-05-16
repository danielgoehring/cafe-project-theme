// main.js
document.addEventListener("DOMContentLoaded", function () {
  const toggle = document.querySelector(".menu-toggle");
  const nav = document.querySelector(".site-nav");

  toggle.addEventListener("click", () => {
    nav.classList.toggle("active");
  });
});

// Select elements on the homepage, menu page, and about page
const productGroups = document.querySelectorAll(".home-page-product-group"); // Homepage product group
const menuProducts = document.querySelectorAll(".menu-product"); // Menu page product items
const aboutContainers = document.querySelectorAll(".about-container"); // About page containers

// Create an Intersection Observer to detect when the elements come into view
const observer = new IntersectionObserver(
  (entries, observer) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("visible"); // Add 'visible' class to trigger animation
        observer.unobserve(entry.target); // Stop observing once it's in view
      }
    });
  },
  { threshold: 0.5 }
); // Trigger when 50% of the element is visible

// Observe all the elements: product group, menu products, and about containers
productGroups.forEach((group) => {
  observer.observe(group); // Observe the product group
});

menuProducts.forEach((product) => {
  observer.observe(product); // Observe each individual menu product
});

aboutContainers.forEach((container) => {
  observer.observe(container); // Observe each about container
});

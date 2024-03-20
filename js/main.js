document.addEventListener("DOMContentLoaded", function() {
    const sidebar = document.querySelector('#sidebar');
    const toggleButton = document.querySelector('#toggle-btn');

    // Initially expand the sidebar when the page loads
    sidebar.classList.add('expand');

    // Add click event listener to toggle button
    toggleButton.addEventListener("click", function() {
        // Toggle the expand class on the sidebar
        sidebar.classList.toggle("expand");
    });
});




const dropdowns = document.querySelectorAll(".dropdown");

dropdowns.forEach(dropdown => {
    const select = dropdown.querySelector(".select");
    const caret = dropdown.querySelector(".caret");
    const menu = dropdown.querySelector(".menu");
    const options = dropdown.querySelectorAll(".menu li"); // Corrected this line
    const selected = dropdown.querySelector(".selected");

    // Add a click event listener to the select element
    select.addEventListener('click', () => {
        // Toggle classes for the select, caret, and menu elements
        select.classList.toggle("select-clicked");
        caret.classList.toggle('caret-rotate');
        menu.classList.toggle('menu-open');
    });

    // Loop through all option elements
    options.forEach(option => {
        // Add a click event listener to each option element
        option.addEventListener('click', () => {
            // Change the inner text of the selected element to the clicked option's inner text
            selected.innerHTML = option.innerHTML;
            // Remove select-clicked class from select element
            select.classList.remove('select-clicked');
            // Remove caret-rotate class from caret element
            caret.classList.remove('caret-rotate');
            // Remove menu-open class from menu element
            menu.classList.remove('menu-open');

            // Remove active class from all options
            options.forEach(opt => {
                opt.classList.remove('active');
            });

            // Add active class to the clicked option
            option.classList.add('active');
        });
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const filterButton = document.querySelector('.products .button button');
    const dropdownMenu = document.querySelector('.filters');

    // Hide the dropdown menu initially
    dropdownMenu.style.display = 'none';

    // Add click event listener to the filter button
    filterButton.addEventListener("click", function() {
        // Toggle the display of the dropdown menu
        if (dropdownMenu.style.display === 'none') {
            dropdownMenu.style.display = 'flex';
        } else {
            dropdownMenu.style.display = 'none';
        }
    }); 
});
















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

const dropdowns = document.querySelectorAll('.dropdowns');

dropdowns.forEach(dropdown => {
    const select = dropdown.querySelector('.selects');
    const caret = dropdown.querySelector('.caret');
    const menu = dropdown.querySelector('.menus');
    const options = dropdown.querySelectorAll('.menus li');
    const selected = dropdown.querySelector('.selecteds');

    select.addEventListener('click', () => {
        select.classList.toggle('selects-clicked');
        caret.classList.toggle('caret-rotate');
        menu.classList.toggle('menus-open');
    });

    options.forEach(option => {
        option.addEventListener('click', () => {
            selected.innerText = option.innerText;
            select.classList.remove('selects-clicked');
            caret.classList.remove('caret-rotate');
            menu.classList.remove('menus-open');

            options.forEach(opt => {
                opt.classList.remove('actives');
            });
            option.classList.add('actives');
        });
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const submitButton = document.querySelector('.submit');
    const cancelButton = document.querySelector('.cancel');

    // Add click event listener to submit button
    submitButton.addEventListener("click", function() {
        // Navigate back to index.html when submit button is clicked
        window.location.href = "index.html";
    });

    // Add click event listener to cancel button
    cancelButton.addEventListener("click", function() {
        // Navigate back to index.html when cancel button is clicked
        window.location.href = "index.html";
    });
});

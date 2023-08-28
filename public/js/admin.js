document.addEventListener('click', function(event) {
    var sidebar = document.getElementById('nav-toggle');
    var targetElement = event.target;
  
    // Check if the clicked element is not the sidebar or a child of the sidebar
    if (sidebar.checked && targetElement !== sidebar && !sidebar.contains(targetElement)) {
      // Check if the screen size is smaller than 901 pixels
      if (window.innerWidth < 901) {
        sidebar.checked = false; // Close the sidebar
      }
    }
  });

  document.addEventListener('DOMContentLoaded', function() {
    var sidebarLinks = document.querySelectorAll('.sidebar-menu li a');
    var headerTitle = document.getElementById('headerTitle');
    var mySpan = document.getElementById('mySpan');
  
    sidebarLinks.forEach(function(link) {
      link.addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the default link behavior
  
        // Get the span text of the clicked link
        var spanText = this.querySelector('span:last-child').textContent;
  
        // Get the href attribute value
        var href = this.getAttribute('href');
  
        // Update the mySpan text
        mySpan.textContent = spanText;
  
        // Scroll to the target section
        var targetSection = document.querySelector(href);
        targetSection.scrollIntoView({ behavior: 'smooth' });
      });
    });
  
    var biButton = document.getElementById('bi');
    biButton.addEventListener('click', function(event) {
      event.preventDefault(); // Prevent the default button behavior
  
      // Update the mySpan text to match the SellingDishes section
      mySpan.textContent = 'Selling Dishes';
  
      // Scroll to the SellingDishes section
      var targetSection = document.getElementById('SellingDishes');
      targetSection.scrollIntoView({ behavior: 'smooth' });
    });


    var biButton = document.getElementById('bu1');
    biButton.addEventListener('click', function(event) {
      event.preventDefault(); // Prevent the default button behavior
  
      // Update the mySpan text to match the SellingDishes section
      mySpan.textContent = 'Dashboard';
  
      // Scroll to the SellingDishes section
      var targetSection = document.getElementById('Dashboard');
      targetSection.scrollIntoView({ behavior: 'smooth' });
    });
});
  





document.addEventListener('DOMContentLoaded', function() {
  'use strict';

  var body = document.body;
  var inputs = document.querySelectorAll('input');

  function goToNextInput(e) {
    var key = e.key;
    var t = e.target;
    var sib = t.nextElementSibling;
    var prev = t.previousElementSibling;

    if (!isLowerCaseAlphabetKey(key) && key !== 'Backspace') {
      e.preventDefault();
      return false;
    }

    if (key === 'Tab') {
      return true;
    }

    if (key === 'Backspace') {
      if (t.value === '' && prev) {
        while (prev) {
          prev.value = '';
          prev = prev.previousElementSibling;
        }
      } else {
        t.value = '';
      }
      t.select();
      t.focus();

      // Check if all inputs are cleared
      if (Array.from(inputs).every(input => input.value === '')) {
        inputs[0].select();
        inputs[0].focus();
      }
      return true;
    }

    if (!sib && t.value !== '') {
      sib = inputs[0]; // Set sib to the first input when reaching the last input
      if (Array.from(inputs).every(input => input.value !== '')) {
        sib.select();
        sib.focus();
      }
      return true;
    }

    if (sib && t.value !== '') {
      sib.select();
      sib.focus();
    }
  }

  function onKeyDown(e) {
    var key = e.key;

    if (key === 'Tab' || isLowerCaseAlphabetKey(key) || key === 'Backspace') {
      return true;
    }

    e.preventDefault();
    return false;
  }

  function onFocus(e) {
    e.target.select();
  }

  function onBlur(e) {
    var t = e.target;
    if (t.value === '') {
      t.select();
    }
  }

  function isLowerCaseAlphabetKey(key) {
    return /^[a-z]$/.test(key);
  }

  inputs.forEach(function(input) {
    input.addEventListener('keyup', function(event) {
      goToNextInput(event);
    });

    input.addEventListener('keydown', function(event) {
      onKeyDown(event);
    });

    input.addEventListener('click', function(event) {
      onFocus(event);
    });

    input.addEventListener('blur', function(event) {
      onBlur(event);
    });
  });
});

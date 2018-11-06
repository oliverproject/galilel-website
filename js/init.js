/* initialize required functions. */
$(document).ready(
  function() {
    $('.parallax').parallax();
    $('.sidenav').sidenav();
    $('.collapsible').collapsible();
    $('.dropdown-trigger').dropdown({
      hover: true,
      coverTrigger: false
    });
  }
);

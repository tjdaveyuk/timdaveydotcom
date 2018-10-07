//test for touch events support and if not supported, attach .no-touch class to the HTML tag.

if (!("ontouchstart" in document.documentElement)) {
document.documentElement.className += " no-touch";
}

$('.burger, .items').on('click', function() {
  $('.burger-bg, .items, .burger').toggleClass('fs');
  $('.burger').text() == "☰" ? $('.burger').text('✕') : $('.burger').text('☰');
});

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-54084308-1', 'auto');
  ga('send', 'pageview');

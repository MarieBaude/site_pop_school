document.addEventListener('DOMContentLoaded', function() {
  particleground(document.getElementById('particles'), {
    dotColor: '#22285d',
    lineColor: '#22285d'
  });
  var intro = document.getElementById('intro');
  intro.style.marginTop = -intro.offsetHeight / 2 + 'px';
}, false);

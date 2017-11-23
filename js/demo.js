document.addEventListener('DOMContentLoaded', function() {
  particleground(document.getElementById('particles'), {
    dotColor: '#bbbbbb',
    lineColor: '#dddddd'
  });
  var intro = document.getElementById('intro');
  intro.style.marginTop = -intro.offsetHeight / 2 + 'px';
}, false);

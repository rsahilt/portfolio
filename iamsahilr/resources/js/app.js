import './bootstrap';

var TxtType = function(el, toRotate, period) {
    this.toRotate = toRotate;
    this.el = el;
    this.loopNum = 0;
    this.period = parseInt(period, 10) || 2000;
    this.txt = '';
    this.tick();
    this.isDeleting = false;
};

TxtType.prototype.tick = function() {
    var i = this.loopNum % this.toRotate.length;
    var fullTxt = this.toRotate[i];

    if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

    var that = this;
    var delta = 200 - Math.random() * 100;

    if (this.isDeleting) { delta /= 2; }

    if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
    } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
    }

    setTimeout(function() {
    that.tick();
    }, delta);
};

window.onload = function() {
    var elements = document.getElementsByClassName('typewrite');
    for (var i=0; i<elements.length; i++) {
        var toRotate = elements[i].getAttribute('data-type');
        var period = elements[i].getAttribute('data-period');
        if (toRotate) {
          new TxtType(elements[i], JSON.parse(toRotate), period);
        }
    }
    // INJECT CSS
    var css = document.createElement("style");
    css.type = "text/css";
    css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
    document.body.appendChild(css);
};


document.addEventListener('DOMContentLoaded', function() {
  const skillPercentages = document.querySelectorAll('.skill-percentage');
  
  const observerOptions = {
      root: null,
      rootMargin: '0px',
      threshold: 0.1
  };
  
  const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
          if (entry.isIntersecting) {
              const skill = entry.target;
              const percentage = skill.getAttribute('data-percentage');
              skill.style.width = percentage + '%';
              observer.unobserve(skill);  // Stop observing once the animation is triggered
          }
      });
  }, observerOptions);
  
  skillPercentages.forEach(skill => {
      observer.observe(skill);
  });
});


document.addEventListener('DOMContentLoaded', function() {
    const thumbnails = document.querySelectorAll('.work-thumbnail');

    thumbnails.forEach(thumbnail => {
        const video = thumbnail.querySelector('video');

        thumbnail.addEventListener('mouseover', () => {
            video.play();
        });

        thumbnail.addEventListener('mouseout', () => {
            video.pause();
            video.currentTime = 0;
        });
    });
});
var acc = document.getElementsByClassName("accordion");
var i;
var len = acc.length;
for (i = 0; i < len; i++) {
  acc[i].addEventListener("click", function () {
    var panel = this.nextElementSibling;
    this.classList.toggle("active_r");
    panel.classList.toggle('glow');
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
document.addEventListener('click', event => {
  const isClickInside = this.contains(event.target) || panel.contains(event.target);

  if (!isClickInside) {
    this.classList.remove("active_r");
    panel.classList.remove('glow')
    panel.style.maxHeight = null;
  }
})
  });
}


const scrollBtn = document.createElement('button');
scrollBtn.innerText = "↑ Top";
scrollBtn.id = "scrollTop";
scrollBtn.style.position = "fixed";
scrollBtn.style.bottom = "20px";
scrollBtn.style.right = "20px";
scrollBtn.style.padding = "10px 15px";
scrollBtn.style.border = "none";
scrollBtn.style.backgroundColor = "#ff4b5c";
scrollBtn.style.color = "#fff";
scrollBtn.style.borderRadius = "5px";
scrollBtn.style.display = "none";
scrollBtn.style.cursor = "pointer";
document.body.appendChild(scrollBtn);

window.addEventListener("scroll", () => {
  if (window.scrollY > 300) {
    scrollBtn.style.display = "block";
  } else {
    scrollBtn.style.display = "none";
  }
});

scrollBtn.addEventListener("click", () => {
  window.scrollTo({ top: 0, behavior: "smooth" });
});

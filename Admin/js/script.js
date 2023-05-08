var menu1 = document.getElementById("add");
var menu2 = document.getElementById("view");
var menu3 = document.getElementById("manage");
var content1 = document.getElementById("content1");
var content2 = document.getElementById("content2");
var content3 = document.getElementById("content3");

menu1.addEventListener("click", function () {
  content1.style.display = "block";
  content2.style.display = "none";
  content3.style.display = "none";
});

menu2.addEventListener("click", function () {
  content1.style.display = "none";
  content2.style.display = "block";
  content3.style.display = "none";
});

menu3.addEventListener("click", function () {
  content1.style.display = "none";
  content2.style.display = "none";
  content3.style.display = "block";
});

function myFunction(buttonName,footerId) {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById(footerId);
	var btnText = document.getElementById(buttonName);

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "קרא עוד"; 
    moreText.children["more"].style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "קרא פחות"; 
    moreText.children["more"].style.display = "inline";
  }
}


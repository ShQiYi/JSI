function show_Hide(obj) {
  obj.classList.toggle('phone-hide');
}
var oMax = document.getElementById("max-nav-img");
var  oMed = document.getElementsByClassName("head-nav-div")[0];

oMax.onclick=function () {
  show_Hide(oMed);
  return false;
}








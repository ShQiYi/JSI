window.onload = function () {
  mv.app.toTip();
  tt();
} ;
var mv = {};
mv.ui = {};
mv.ui.textChange = function (obj,str) {
  if(obj.value == str){
    obj.value = '';
  }
  else {
    obj.value = str;
  }
};
mv.app = {};
mv.app.toTip = function () {
  var oText = document.getElementById('top');

  oText.onfocus = function () {
    mv.ui.textChange(oText,'Search...');
  };
  oText.onblur = function () {
    mv.ui.textChange(oText,'Search...');
  };
};

/*底部轮播图*/
function tt() {
  var odiv1=document.getElementsByClassName("header-logo-right")[0];
  var odiv2=document.getElementsByClassName("head-nav-right")[0];
  var time=null;
  odiv1.onmouseover=function () {
    odiv2.style.display="block";
    clearTimeout(time);
  };
  odiv1.onmouseout=function () {
    clearTimeout(time);
    time=setTimeout(function () {
      odiv2.style.display="none";
    },500);
  };
  odiv2.onmouseover=function () {
    clearTimeout(time);
  };
  odiv2.onmouseout=function () {
    clearTimeout(time);
    time=setTimeout(function () {
      odiv2.style.display="none";
    },500);
  };
}
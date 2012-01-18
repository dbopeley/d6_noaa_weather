Mi = 150;
Lat = 21.1328;
xyperpixel = 0.00771340110085229;
xllcorner = 23.2533282817494;
yllcorner = -159.493162286932;

 var theProduct;
 <!--
 // determine browser data object model (DOM) and build object string based on DOM
 var onoroff = "OFF";
 var isNav,isIE,isDOM;
 var coll = "";
 var styleObj = "";
 //test for DHTML capable browser
 if (document.getElementById || document.all || document.layers) {
  // test for NN/Gecko Layer API browser
  if(document.layers) { 
    isNav=true;       //set object string variables - use defaults
  } else {
    if(document.all) {        //test for IE DOM browser, set object string variables
    isIE=true;
    coll="all.";
    styleObj=".style";
    } else {              // assume W3C DOM browser, set object string variables
    isDOM=true;
    coll="getElementById('";
    styleObj="').style";
    }
  }
 }
 function show(imgobj) {  imgobj.visibility = "visible";  }
 function hide(imgobj) {  imgobj.visibility = "hidden"; }
 function changeVisibility(Obj,num) {
   var imgstr = "document." + coll + "image" + num + styleObj;
   var imgobj = eval(imgstr);
   if ((Obj.checked == "1") || (Obj.checked == "true")) show(imgobj); else hide(imgobj);
 }
 function setVisibility() {
   var i;
   var objs= new Array("checkbox0","checkbox1","checkbox2","checkbox3","checkbox4","checkbox5","checkbox6","checkbox7");
   var theObj
 var values = new Array(
'ON','ON','ON','OFF','ON','ON','ON','ON');
  for(i=0; i<objs.length; i++) {
  if (values[i] == "ON") {
    theObj = eval("document.checkform1." + objs[i]);
      theObj.checked = true;
    } else {
    theObj = eval("document.checkform1." + objs[i]);
    theObj.checked = false;
  }
  changeVisibility(theObj,i);
}
  theProduct = "N0R";
  var dt = "datetime2";
  getnewimg(theProduct,'HMO',0,dt);
}
  function go(loop) { window.location.href = loop; }
  function newpage(radarid,product,loop) {
    var cbox;
    var isloop = (loop==1 ? "yes" : "no");
    var thelink = "radar"  + ".php";
    var arg1 = "?rid=" + radarid;
    var arg4 = "&loop=" + isloop;
    var arg2 = "&product=" + product;
    var arg3 = "&overlay=";
    for (i=0; i<8; i++) {
      cbox = eval("document.checkform1.checkbox"+i);
      arg3+= (cbox.checked ? "1" : "0");
    }
    window.location = thelink + arg1 + arg2 + arg3 + arg4; 
  }
 function newpage_lite(radarid,loop) {
  var cbox;
  var isloop = (loop==1 ? "yes" : "no");
  var thelink = "radar_lite" + ".php";
  var arg3 = "&rid=" + radarid;
  var arg1 = "?product=" + theProduct;
  var arg4 = "&loop=" + isloop;
  window.location = thelink + arg1 + arg3 + arg4; 
 }

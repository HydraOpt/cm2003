/* block of comment */

<script>

var x = 1;
x++;
x--;
var y = 2;
var z = x + y;
var cat = "LaMi";
var time = new Date().getHours();

var cars = ["BMW", "Volvo", "Saab"];
var text = "";

var i;
for(i=0; i<cars.length; i++){
  text += cars[i] + "<br>";
}
i =0;

while(i<10){
  i++;
}

// no return type
var x = myFunction(4, 3);
function myFunction(a, b){
  return a*b;
}

// convenience function to print to browser console
function print(arg){
  console.log(arg); // comment iline
}

var j = document.getElementsByTagName("h1");
var k = document.getElementsByClassName('aClassName');

// in case of nested element in the DOM
var z = document.getElementById('main');
var k = z.getElementsByTagName('p');
// now k include all the p element in the element with id "main"

/* directly print in the HTML stream
<script>
document.write(Date());
</script> */

/*
<script>
document.getElementById('id').innerHTML = "Some new Content";
or
var element = document.getElementById('id');
element.innerHTML = "New Content";
</script>*/

/* Change Attributes
// Tag (img) - Attribute(src) - value (smiley.gif)
<img id="myImage" src="smiley.gif">
<script>
  document.getElementById("logo").src = "grumpy.jpg";
</script> */

/* Change Style
<script>
  document.getElementById("someTextId").style.color = "blue";
</script>
// or
<button type ="button" onclick="document.getElementById("someTextId").style.color = 'blue'"> Click </button>

*/

/* Events
// onclick
<h1 onclick="this.innerHTML='Something Different'">starting text</h1>
//or
<script>
  document.getElementById("aButton").onclick = function(){
  displayDate();
};
function displayDate(){
  document.getElementById("changingText").innerHTML = Date();
}
</script>

//onload and onunload
<body onload="checkCookies()">
<script>
  function checkCookies(){
  var text ="";
  if(navigator.cookieEnabled == true){
    text ="Cookies Enabled";
  }else {
  text = "Cookies not Enabled";
}
document.getElementById("id").innerHTML = text;
}
</script>

//onchange, when something changes usually input form when user types
<input type="text" id="fname" onchange="upperCase()">
//or
<script>
  function myFunction(){
  var x = document.getElementById("fname");
  x.value = x.value.toUpperCase();
}
</script>

<input type="text" id="fname" onchange="myFunction()">

*/

/* Mouse Events
//onmouseover onmouseout
// THOSE ARE METHOD CALL INSIDE A DIV so THIS REFERS TO THE DIV
<div onmouseover="mOver(this)" onmouseout"mOut(this)" style="background-color:pink"> Mouse over me</div>
<script>
  funciot mOver(obj){
  obj.innerHTML = "Thanks";
}

function mOut(obj){
  obj.innerHTML = "Mouse Over Me";
}
</script>

// onmousedown onmouseup
<div onmousedown="mDown(this)" onmouseup"mUp(this)" style="background-color:pink"> Vlivk</div>
<script>
  funciot mDown(obj){
  obj.innerHTML = "Pressing";
}

function mUp(obj){
  obj.innerHTML = "Pressing ends";
}
</script>

// VARIABLE CALL, YHIS REFERS TO THE OBJECT
var person = {
  firstname = "aName";
  showName=function(){
  console.log(this.firstname);
}

this.document // REFERS TO THE BROWSER, OR WINDOWS APPLICATION
}
*/

/* VARIABLE OUTSIDE OF FUNCTION ARE GLOBAL, SO ALL THE .JS FILE WILL ACCESS IT

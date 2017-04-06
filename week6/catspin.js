/**
 * Created by john on 10/03/2016.
 */

/* perfect old version
var cat = document.querySelector("img");
var angle = 0, lastTime = null;
function animate(time) {
    if (lastTime != null)
        angle += (time - lastTime) * 0.001;
    lastTime = time;
    cat.style.top = (Math.sin(angle) * 20) + "px";
    cat.style.left = (Math.cos(angle) * 200) + "px";
    requestAnimationFrame(animate);
}
requestAnimationFrame(animate); */

var cat = document.querySelector("img");
var height = screen.height;
var width = screen.width;
var orizDirection = 1;
var vertDirection = 1;
var catTop = height/2;
var catLeft = width/2;
function animate(time) {
    catTop += (20 * vertDirection);
    catLeft += (20 * orizDirection);
    if (catTop < 0 || catTop > height) {
      vertDirection *= -1;
    }
    if (catLeft < 0 || catLeft > width){
      orizDirection *= -1;
    }
    cat.style.top = (catTop) + "px";
    cat.style.left = (catLeft) + "px";
    requestAnimationFrame(animate);
}
requestAnimationFrame(animate);

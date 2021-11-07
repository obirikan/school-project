var imgs=[
    'imgs/2.jpg',
    'imgs/3.jpg',
    'imgs/4.png',
    'imgs/5.jpg',
    'imgs/6.jpeg',
];

var num=0;
function next(){
var slider=document.getElementById("slider");
num++;
if(num>=imgs.length){
    num=0;
}
 slider.src=imgs[num];

}
setInterval(next,2000);
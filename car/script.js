var map =document.getElementById('map');
var car = document.getElementById('car');
console.log(car);
console.log(map);
var carLeft =1730;
var carTop =700;
var degree = 0;
var rotation = 0;

$(document).ready(function() {
    var rotation = 0;
    $(document).on('keydown', function(e) {
        var keyCode = e.keyCode;
        var car = $("#car");

        e.preventDefault();


        if (keyCode === 32) {
            rotation -= 90;
            if (rotation < -360)
                rotation = 0;

            car.css('transform','rotate('+rotation+'deg)');
        }
    });
});


function movee(e) {

    if(e.keyCode == 39){

        carLeft += 5;

        car.style.left = carLeft + 'px';

        if(carLeft >= 1730){
            carLeft -=5;
        }
    }

    if(e.keyCode == 37){

        carLeft -= 5;

        car.style.left = carLeft + 'px';
        if(carLeft <= 0){
            carLeft +=5;
        }
    }
    if(e.keyCode == 40){

        carTop += 5;

        car.style.top = carTop + 'px';
        if(carTop >= 720){
            carTop -=5;
        }

    }
    if(e.keyCode == 38){

        carTop -= 5;

        car.style.top = carTop + 'px';
        if(carTop <= 5){
            carTop +=5;
        }

    }
}

document.onkeydown = movee;
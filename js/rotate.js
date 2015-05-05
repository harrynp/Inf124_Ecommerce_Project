prefix="images/product";

var imageArray = new Array(6);
for (i=0; i<imageArray.length; i++)
    imageArray[i] = prefix + (i+1) + ".jpg";

//Rotate the images in the array
var imageCounter = 0;
function rotate()
{
    var imageObject = document.getElementById('rotation');
    imageObject.src = imageArray[imageCounter];
    ++imageCounter;
    if (imageCounter == 6) imageCounter = 0;
}

function startRotation()
{
    document.getElementById('rotation').src=imageArray[5];
    setInterval('rotate()', 2000);
}

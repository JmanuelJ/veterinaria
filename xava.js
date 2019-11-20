var mario=0;
carousel();

function carousel();
{
    var i;
    var x = document.getElementsByClassName("selfie");
    for(i=0;i < x.length; i++)
    {
        x[i].style.display = "none";
    }
    mario++;
    if(mario > x.length) {mario = 1}
    x[mario-1].style.display="block";
    setTimeout(carousel, 3000);
}
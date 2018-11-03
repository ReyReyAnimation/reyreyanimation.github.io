function caravanMove()
{
  //Initialise caravan
  var elem = document.getElementById("caravanAnimation");
  elem.style.top = '150px';
  elem.style.left = '75px';
  elem.style.opacity = 1.0;
  //var elemPos = 150;   

  //Initialse background
  var bkgd = document.getElementById("caravanBackground");
  var bkgdPos = -340;
  bkgd.style.backgroundPosition = bkgdPos + "px center";

  var id = setInterval(caravanFrame, 200);
  function caravanFrame()
  {
    //Scroll background
    if (bkgdPos == 0)
    {
      bkgdPos = -340;
    }
    else
    {
      bkgdPos++;
      bkgd.style.backgroundPosition = bkgdPos + "px center";
    }

    //Move caravan across background
    //if (elemPos == 0)
    //{
    //  elemPos = 150;
    //}
    //else
    //{
    //  elemPos--;
    //  elem.style.left = elemPos +'px';
    //}
  }
}

	function setSrc(location)
    {
        setSrcForElement("myImage", location);    
    }
    
    function setSrcForElement(elementId, location)
    {
          var target = 0;
          if (document.images[elementId])
            target=document.images[elementId];
            
          if (document.all && document.getElementById(elementId))
            target = document.getElementById(elementId);
      
          // make sure target is valid.  It might not be valid
          //   if the page has not finished loading
          if (target)
          {           
            target.src = location;         
          }
    }
    
    function increaseCurrent()
	{
      curImage ++;
      if (curImage >= numImages)
        curImage = 0;
	}
	
	function decreaseCurrent()
    {
      curImage --;
      if (curImage < 0)
        curImage = numImages - 1;
    }        	
    
	function prev()
    { 
      decreaseCurrent();    
      showImage(curImage);
    }

    function next()
    {       
      increaseCurrent();
      showImage(curImage);
    }
    
    function showImage(i)
    {
      curImage = i;
      setSrc(dimages[curImage].src);
    }
	
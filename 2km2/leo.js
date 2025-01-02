
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
	  document.getElementById("image_" + curImage).style.borderBottom = '0px';
      decreaseCurrent();    
      showImage(curImage);
    }

    function next()
    {       
      document.getElementById("image_" + curImage).style.borderBottom = '0px'	
      increaseCurrent();
      showImage(curImage);
    }
    
    function showImage(i)
    {
    	document.getElementById("image_" + curImage).style.borderBottom = '2px solid grey';
    	curImage = i;
    	document.getElementById("image_" + curImage).style.borderBottom = "2px solid black"
        document.getElementById("mainImage").style.display = 'block';        
        document.getElementById("mainText").style.display = 'none';        
        setSrc(dimages[curImage].src);
    }
	
  function contentResize(height, width) {
   //alert('Parent: contentResize('+height+', '+width+')');
   document.getElementById('content').height = height;
   document.getElementById('content').width = width;
  }

  function newIFrameContent(site, height, width) {
   //alert('Parent: newIFrameContent('+site+', '+height+', '+width+')');
   document.getElementById('content').src = site;
   contentResize(height, width);
  } 

  function newWebPage(site) {
   //alert('Parent: newWebPage('+site+')');
   var win = window.open(site, '_blank');
   win.focus();
  }

  function contentResize(height, width) {
   //alert('Parent: contentResize('+height+', '+width+')');
   document.getElementById('content').height = height;
   document.getElementById('content').width = width;
   window.scrollTo(0,0);
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

  function getUrlVars()
  {
    var vars = {};
    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
      vars[key] = value;
    });
    return vars;
  }

  function getUrlParam(parameter, defaultvalue)
  {
    var urlparameter = defaultvalue;
    if (window.location.href.indexOf(parameter) > -1)
    {
      urlparameter = getUrlVars()[parameter];
      urlparameter += '.html';
    }
    return urlparameter;
  }

  function switchSubject()
  {
    alert('switchSubject()')
    var page = getUrlParam('subject', 'PictureMenu.html');
    newIFrameContent(page,'2000','1100');
  }

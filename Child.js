  var idealWidth = 1000;
  var idealHeight = 2000;

  function contentLoaded() {
   //alert('Child: contentLoaded()');
   idealHeight = document.getElementById('contentId').offsetHeight;
   idealWidth = document.getElementById('contentId').offsetWidth;
   parent.contentResize(idealHeight, idealWidth);
  }

  function newContent(content) {
   //alert('Child: newContent('+content+')')
   this.location.replace(content);
  } 

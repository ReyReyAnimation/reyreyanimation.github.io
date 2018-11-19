  var idealWidth = 1000;
  var idealHeight = 2000;

  function contentLoaded() {
   //alert('Child: contentLoaded()');
   idealHeight = document.getElementById('contentId').offsetHeight + 10;
   idealWidth = document.getElementById('contentId').offsetWidth + 10;
   parent.contentResize(idealHeight, idealWidth);
  }

  function newContent(content) {
   //alert('Child: newContent('+content+')')
   this.location.replace(content);
  } 

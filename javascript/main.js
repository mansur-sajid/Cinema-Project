function up(){
    var y= window.scrollY;
    if(y>=300){
      scrollTo(0,0);
    }
  }
  function button(){
    var y= window.scrollY;
    var div = document.getElementById("button");
    if(window.scrollY >= 300 ){
      div.style.visibility = "visible";
      div.style.animation = "fadeInUp 0.5s forwards";
    }
    else {
      div.style.animation = "fadeOutUp 0.5s forwards";
      setTimeout(function () {
        y=window.scrollY;
      }, 3000);
      if(y>=300){
        div.style.visibility = "hidden";
      }
    }
  }
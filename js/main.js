//JavaScript

window.addEventListener("load", run, false);

function run() {
  let btn = document.getElementById("navbar-toggle");
  let navbar = document.getElementById("navbar");
  
  btn.addEventListener("click", toggleClass, false);
  btn.addEventListener("click", changeSign, false);
  navbar.addEventListener("active", collapse, false);
}

function collapse(evt){
  let elem = evt.currentTarget;  
    
  let arr = elem.className.split(" ");
  let ind = arr.indexOf("active");
  
  let max, min;
  let inc = 10;
  
  if (ind >= 0) {
    min = 0;
    max = elem.offsetHeight;
    
    let collapsing = setInterval(function(){
      elem.style.height = min + "px";
      min = min + inc;
          
      if (elem.offsetHeight >= max) {      
          elem.style.height = max + "px";          
          clearInterval(collapsing);
        }
      }, 10);
  }
  else {
    elem.style.display = "block";
    max = elem.offsetHeight;
        
    let collapsing = setInterval(function(){
      elem.style.height = max + "px";
      max = max - inc;
          
      if (elem.offsetHeight <= inc) {      
          elem.style.height = 0 + "px";
          elem.style.height = "";
          elem.style.display = "";          
          clearInterval(collapsing);
        }
      }, 10);
  }
  
}

function changeSign(evt) {
  let elem = evt.currentTarget.children[0];
  if (elem.innerText !== "-") {
    elem.innerText = "-";
  }
  else {
    elem.innerText = "+";
  }
}

function toggleClass(evt) {
  let elem = evt.currentTarget;
  let myClass = elem.getAttribute("data-toggle");
  
  if (elem.getAttribute("data-target")) {
    let elems = [];
    elems = document.querySelectorAll(elem.getAttribute("data-target"));
    
    if (elems.length > 0) {
      for (let i = 0; i < elems.length; i++) {
        if (elems[i].classList) {
          elems[i].classList.toggle(myClass);
          let evt = createNewEvent("active");
          elems[i].dispatchEvent(evt);
        }
        else {
          let arr = elems[i].className.split(" ");
          let ind = arr.indexOf(myClass);
          
          if (ind >= 0) {
            arr.splice(ind, 1);
          }
          else {
            arr.push(myClass);
            elems[i].className = arr.join(" ");
            let evt = createNewEvent("active");
            elems[i].dispatchEvent(evt);
          }
        }
      }
    }
    
    return;
  }
  
  else if (elem.classList) {
    elem.classList.toggle(myClass);
  }
  
  else {
    let arr = elem.className.split(" ");
    let i = arr.indexOf(myClass);
    
    if (i >= 0) {
      arr.splice(i, 1);
    }
    else {
      arr.push(myClass);
      elem.className = arr.join(" ");
    }
  }
}

function createNewEvent(evtName) {
  let evt;
  if (typeof Event === "function") {
    evt = new Event(evtName);
  }
  else {
    evt = document.createEvent("Event");
    evt.initEvent(evtName, true, true);
  }
  
  return evt;
}

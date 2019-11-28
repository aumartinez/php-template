//JavaScript

window.addEventListener("load", run, false);

function run() {
  let btn = document.getElementById("navbar-toggle");
  
  btn.addEventListener("click", toggleClass, false);
  btn.addEventListener("click", changeSign, false);
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
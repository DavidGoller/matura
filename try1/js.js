
function wrapper() {
    const wrapper = document.getElementById("wrapper1");
    let className = ' ' + wrapper.className + ' ';

    wrapper.className = ~className.indexOf(' good ') ?
                         className.replace(' good ', ' ') :
                         className + ' good';
const fa = document.getElementById("wrapper1").children[0];

let className1 = ' ' + fa.className + ' ';
fa.className = ~className1.indexOf(' fa-plus ') ?
                     className1.replace(' fa-plus ', ' fa-minus ') :
                     className1.replace(' fa-minus ', ' fa-plus ');                         
};

function wrapper(wrapperInt) {
    /*const wrapper = document.getElementById("wrapper1");
    let className = ' ' + wrapper.className + ' ';

    wrapper.className = ~className.indexOf(' good ') ?
                         className.replace(' good ', ' ') :
                         className + ' good';*/
    const fa = document.getElementById("wrapper" + wrapperInt).children[0];

    let className1 = ' ' + fa.className + ' ';
    fa.className = ~className1.indexOf(' fa-plus ') ?
        className1.replace(' fa-plus ', ' fa-minus ') :
        className1.replace(' fa-minus ', ' fa-plus ');
    const dropdown = document.getElementById("wrapper" + wrapperInt).parentNode.children[1];
    const list = document.getElementById("wrapper" + wrapperInt).parentNode.children[1].children;
        
        let dc = ' ' + dropdown.className + ' ';
        dropdown.className = ~dc.indexOf('sized') ?
            dc.replace(' sized ', ' ') :
            dc + 'sized ';

    for (let index = 0; index < list.length; index++) {
    setTimeout(() => {
     
        const element = list[index].children[0];
        let ec = ' ' + element.className + ' ';
            element.className = ~ec.indexOf('visible') ?
                ec.replace(' visible ', ' ') :
                ec + 'visible ';

      
            


    }, 10); 
}
};
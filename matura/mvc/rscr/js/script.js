
function wrapper(wrapperInt) {
    const dropdown = document.getElementById("wrapper" + wrapperInt).parentNode.children[1]
    const fa = document.getElementById("wrapper" + wrapperInt).children[0];
    reset(fa);



    
    let className1 = ' ' + fa.className + ' ';
    fa.className = ~className1.indexOf(' fa-plus ') ?
        className1.replace(' fa-plus ', ' fa-minus ') :
        className1.replace(' fa-minus ', ' fa-plus ');
    ;
    const list = dropdown.children;

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
function hoverDropdown(dropdownint) {
    setTimeout(() => {
        const dp = document.getElementById("dropdown" + dropdownint).children[1];

        let dpn = '' + dp.className + '';

        if (dpn.indexOf(' visible') < 0) {
            dp.className = dpn + ' visible';
        
        for (let index = 0; index < dp.children.length; index++) {
            
            setTimeout(() => {

                const element = dp.children[index];
                let ec = '' + element.className + '';
                if (ec.indexOf(' visible') < 0){
                element.className = ec + ' visible';
                }




            }, 100);
        }
    }

    }, 10);

}
function hoverOutDropdown(dropdownint) {
    setTimeout(() => {
        const dp = document.getElementById("dropdown" + dropdownint).children[1];

        let dpn = '' + dp.className + '';
        for (let index = 0; index < dp.children.length; index++) {

                const element = dp.children[index];

                let ec = '' + element.className + '';
                element.className = ec.replace(' visible', '');

        }
    

        dp.className = dpn.replace(' visible', '');
    }, 10);

}

function reset(fa){
    const listW = document.getElementsByClassName("navbar-nav")[0].children;
    for (const element of listW) {
        
        if(element.className.indexOf('dropdown')>0){

            const child =element.children[0].children[0];
            if (child.className.indexOf('fa-minus')>0 && (child!=fa||(element.children[1].classList.contains('show')&& element.children[1].children[0].children[0].classList.contains('visible')))) {
                let childN =child.className;
                child.className = childN.replace('fa-minus','fa-plus');

                let elementN = element.children[1].className;
                
                element.children[1].className = elementN.replace('sized','');
                
                const bullets = element.children[1].children;
                for (const b of bullets) {
                    const ba = b.children[0];
                    ba.className = ba.className.replace('visible','');
                }
            }
        };


    }
}
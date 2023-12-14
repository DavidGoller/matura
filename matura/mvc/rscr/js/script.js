
function wrapper(wrapperInt) {
    /* When "show" do 1 else do 0*/

   const listW = document.getElementsByClassName("navbar-nav")[0].children;  
   let wrappers;
   i=0;
    for (const element of listW) {
 
        if(element.indexOf(dropdown)>0){

            wrapper[i]=element;
            i++;
        };


    }
    console.log(wrapper);



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


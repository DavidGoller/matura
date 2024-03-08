
if(document.cookie.indexOf('language=')===-1 ){
    setTimeout(() => {
        location.reload;
    }, 500);
}
const lang = navigator.language;
document.cookie = "language=" + lang;



let x = 0;

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
                    if (ec.indexOf(' visible') < 0) {
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

function reset(fa) {
    const listW = document.getElementsByClassName("navbar-nav")[0].children;
    for (const element of listW) {

        if (element.className.indexOf('dropdown') > 0) {

            const child = element.children[0].children[0];
            if (child.className.indexOf('fa-minus') > 0 && (child != fa || (element.children[1].classList.contains('show') && element.children[1].children[0].children[0].classList.contains('visible')))) {
                let childN = child.className;
                child.className = childN.replace('fa-minus', 'fa-plus');

                let elementN = element.children[1].className;

                element.children[1].className = elementN.replace('sized', '');

                const bullets = element.children[1].children;
                for (const b of bullets) {
                    const ba = b.children[0];
                    ba.className = ba.className.replace('visible', '');
                }
            }
        };


    }
}
function createNewAddress() {
    const div = document.getElementById("addressForm").children[0];
    const newAddress = document.createElement("div");
    const createButton = document.getElementById("createButton");

    newAddress.setAttribute('id', 'newAddress' + x);
    newAddress.classList.add("my-4");
    newAddress.innerHTML = '' +
        '<div class="row my-2 mx-5">' +
        '<div class=" col-lg-2 col-0"></div>' +
        '<div class="col-lg-4 col-12 ">' +
        '    <label class="form-label h3 " for="country">Country</label><br>' +
        '    <input class="form-control h3" type="type" name="country[]" required>' +
        '  </div>' +
        '  <div class="col-lg-1 col-0"></div>' +
        '  <div class="col-lg-4 col-12">' +
        '    <label class="form-label h3 " for="province">Province</label><br>' +
        '    <input class="form-control h3" type="type" name="province[]"  required>' +
        '  </div>' +
        '</div>' +
        '<div class="row my-2 mx-5">' +
        '  <div class="col-lg-2"></div>' +
        '  <div class="col-lg-4 col-12 ">' +
        '    <label class="form-label h3 " for="city">City</label><br>' +
        '    <input class="form-control h3" type="type" name="city[]"required>' +
        '  </div>' +
        '  <div class="col-lg-1 col-0"></div>' +
        '  <div class="col-lg-4 col ">' +
        '    <label class="form-label h3 " for="postcode">Postcode</label><br>' +
        '    <input class="form-control h3" type="type" name="postcode[]"  required>' +
        '  </div>' +
        '</div>' +
        '<div class="row my-2 mx-5">' +
        '  <div class="col-lg-2 col-0"></div>' +
        '  <div class="col-lg-4 col-12">' +
        '    <label class="form-label h3 " for="address">Address</label><br>' +
        '    <input class="form-control h3 col-6" type="type" name="address[]"  required>' +
        '</div>' +
        '  <div class="col-lg-1 col-0"></div>' +
        //'  <input class="btn btn-danger btn-lg col-2 my-3 mx-3"  type="button" value="delete" onclick="deleteChild('+x+')"/>'+
        '<div class="col-2 my-3 mx-3">' +
        '<i id="delete" class="fa-solid fa-trash-can fa-3x" onclick="deleteChild(' + "'newAddress" + x + "'" + ')"></i>' +
        '</div>' +
        '</div>';
    div.append(newAddress);
    div.insertBefore(newAddress, createButton);
    x++;
}

function deleteChild(txt) {
    toDelete = document.getElementById(txt);
    console.log(txt);
    const form = toDelete.parentElement;
    form.removeChild(toDelete);
}

function createFamily() {
    const submitButton = document.getElementById("buttonSubmit");
    submitButton.setAttribute("value", "Submit");
    const div = document.getElementById("addressForm").children[0];
    const outline = document.createElement("div");
    outline.setAttribute("id", "outline" + x)
    const ButtonOpes = document.getElementById("buttonOpes");

    const headerDiv = document.createElement("div");
    headerDiv.classList.add("row", "my-2", "mx-5");

    const headerDivRow = document.createElement("div");
    headerDivRow.classList.add("col-lg-2", "col-0");
    const headerLabel = document.createElement("label");
    headerLabel.classList.add("form-label", "h3", "col")
    headerLabel.innerHTML = "Family Member";

    headerDiv.append(headerDivRow);
    headerDiv.append(headerLabel);
    outline.append(headerDiv);

    const headerDiv2 = document.createElement("div");
    headerDiv2.classList.add("row", "my-2", "mx-5");
    const headerDiv2Row1 = document.createElement("div");
    headerDiv2Row1.classList.add("col-lg-2", "col-0");

    const headerDiv2Row2 = document.createElement("div");
    headerDiv2Row2.classList.add("col-lg-4", "col-12");
    const label1 = document.createElement("label");
    label1.classList.add("form-label", "h3");
    label1.innerHTML = "Firstname";
    const input1 = document.createElement("input");
    input1.classList.add("form-control", "h3");
    input1.setAttribute('type', 'type');
    input1.setAttribute('name', 'firstname[]');
    input1.setAttribute('required', 'required');

    const headerDiv2Row3 = document.createElement("div");
    headerDiv2Row3.classList.add("col-lg-1", "col-0");

    const headerDiv2Row4 = document.createElement("div");
    headerDiv2Row4.classList.add("col-lg-4", "col-12");
    const label2 = document.createElement("label");
    label2.classList.add("form-label", "h3");
    label2.innerHTML = "Lastname";
    const input2 = document.createElement("input");
    input2.classList.add("form-control", "h3");
    input2.setAttribute('type', 'type');
    input2.setAttribute('name', 'lastname[]');
    input2.setAttribute('required', 'required');

    const headerDiv3 = document.createElement("div");
    headerDiv3.classList.add("row", "my-2", "mx-5");
    const headerDiv3Row1 = document.createElement("div");
    headerDiv3Row1.classList.add("col-lg-2", "col-0");

    const headerDiv3Row2 = document.createElement("div");
    headerDiv3Row2.classList.add("col-lg-1", "col-4");
    const label3 = document.createElement("label");
    label3.classList.add("form-label", "h3");
    label3.innerHTML = "Prefix";
    label3.setAttribute('for', 'prefix')
    const input3 = document.createElement("input");
    input3.classList.add("form-control", "h3");
    input3.setAttribute('list', 'prefixList');
    input3.setAttribute('id', 'prefix');
    input3.setAttribute('name', 'prefix[]');
    input3.setAttribute('required', 'required');
    const datalist = document.createElement("datalist");
    datalist.setAttribute('id', 'prefixList');
    let prefixoptions = [];
    for (let index = 0; index < 4; index++) {
        prefixoptions[index] = document.createElement("option");
    }
    prefixoptions[0].setAttribute("value", "+39");
    prefixoptions[1].setAttribute("value", "+49");
    prefixoptions[2].setAttribute("value", "+43");
    prefixoptions[3].setAttribute("value", "+41");
    datalist.append(prefixoptions[0]);
    datalist.append(prefixoptions[1]);
    datalist.append(prefixoptions[2]);
    datalist.append(prefixoptions[3]);


    headerDiv3Row2.append(label3);
    headerDiv3Row2.append(input3);
    headerDiv3Row2.append(datalist);

    const headerDiv3Row3 = document.createElement("div");
    headerDiv3Row3.classList.add("col-lg-3", "col");
    const label4 = document.createElement("label");
    label4.classList.add("form-label", "h3");
    label4.innerHTML = "Phone";
    const input4 = document.createElement("input");
    input4.classList.add("form-control", "h3");
    input4.setAttribute('type', 'type');
    input4.setAttribute('id', 'phone');
    input4.setAttribute('name', 'phone[]');
    input4.setAttribute('required', 'required');

    headerDiv3Row3.append(label4);
    headerDiv3Row3.append(input4);

    const headerDiv3Row4 = document.createElement("div");
    headerDiv3Row4.classList.add("col-lg-1", "col-4");


    const headerDiv3Row5 = document.createElement("div");
    headerDiv3Row5.classList.add("col-2", "my-3", "mx-3");
    const deleteIcon = document.createElement("i");
    //'<i id="delete" class="fa-solid fa-trash-can fa-3x" onclick="deleteChild(newAddress'+x+')"></i>'+
    deleteIcon.setAttribute("id", "delete");
    deleteIcon.classList.add("fa-solid", "fa-trash-can", "fa-3x");
    let y = x;
    deleteIcon.onclick = function () {
        deleteChild("outline" + y);
        submitOrSkip();
    };


    headerDiv3Row5.append(deleteIcon);

    headerDiv2Row2.append(label1);
    headerDiv2Row2.append(input1);
    headerDiv2Row4.append(label2);
    headerDiv2Row4.append(input2);
    headerDiv2.append(headerDiv2Row1);
    headerDiv2.append(headerDiv2Row2);
    headerDiv2.append(headerDiv2Row3);
    headerDiv2.append(headerDiv2Row4);

    headerDiv3.append(headerDiv3Row1);
    headerDiv3.append(headerDiv3Row2);
    headerDiv3.append(headerDiv3Row3);
    headerDiv3.append(headerDiv3Row4);
    headerDiv3.append(headerDiv3Row5);

    outline.append(headerDiv2);
    outline.append(headerDiv3);
    div.append(outline);
    div.insertBefore(outline, ButtonOpes);
    x++;
}

function createOPES() {
    const submitButton = document.getElementById("buttonSubmit");
    submitButton.setAttribute("value", "Submit");
    const div = document.getElementById("addressForm").children[0];
    const outline = document.createElement("div");
    outline.setAttribute("id", "outline" + x)
    const ButtonSubmit = document.getElementById("submit");

    const headerDiv = document.createElement("div");
    headerDiv.classList.add("row", "my-2", "mx-5");

    const headerDivRow = document.createElement("div");
    headerDivRow.classList.add("col-lg-2", "col-0");
    const headerLabel = document.createElement("label");
    headerLabel.classList.add("form-label", "h3", "col")
    headerLabel.innerHTML = "OPES Credentials";

    const headerDiv2 = document.createElement("div");
    headerDiv2.classList.add("row", "my-2", "mx-5");
    const headerDiv2Row1 = document.createElement("div");
    headerDiv2Row1.classList.add("col-lg-2", "col-0");

    const headerDiv2Row2 = document.createElement("div");
    headerDiv2Row2.classList.add("col-lg-4", "col-12");
    const label1 = document.createElement("label");
    label1.classList.add("form-label", "h3");
    label1.innerHTML = "OPES Card Number";
    const input1 = document.createElement("input");
    input1.classList.add("form-control", "h3");
    input1.setAttribute('type', 'type');
    input1.setAttribute('name', 'opes');
    input1.setAttribute('required', 'required');

    const headerDiv2Row3 = document.createElement("div");
    headerDiv2Row3.classList.add("col-lg-1", "col-4");


    const headerDiv2Row4 = document.createElement("div");
    headerDiv2Row4.classList.add("col-2", "my-4", "mx-3");
    const deleteIcon = document.createElement("i");
    //'<i id="delete" class="fa-solid fa-trash-can fa-3x" onclick="deleteChild(newAddress'+x+')"></i>'+
    deleteIcon.setAttribute("id", "delete");
    deleteIcon.classList.add("fa-solid", "fa-trash-can", "fa-3x");
    let y = x;
    deleteIcon.onclick = function () {
        deleteChild("outline" + y);
        document.getElementById("buttonOpesbutton").removeAttribute("disabled");
        submitOrSkip();
    };



    headerDiv2Row4.append(deleteIcon);
    headerDiv2Row2.append(label1);
    headerDiv2Row2.append(input1);

    headerDiv2.append(headerDiv2Row1);
    headerDiv2.append(headerDiv2Row2);
    headerDiv2.append(headerDiv2Row3);
    headerDiv2.append(headerDiv2Row4);

    headerDiv.append(headerDivRow);
    headerDiv.append(headerLabel);
    outline.append(headerDiv);

    outline.append(headerDiv2);
    div.append(outline);
    div.insertBefore(outline, ButtonSubmit);
    x++;
    document.getElementById("buttonOpesbutton").setAttribute("disabled", "true");
}

function submitOrSkip() {
    const div = document.getElementById("addressForm").children[0];
    if (div.children.length <= 3) {
        const submitButton = document.getElementById("buttonSubmit");
        submitButton.setAttribute("value", "Skip");
    }
}
function toLogin() {
    setTimeout(() => {
        document.myform.submit();
    }, 3000);
}

let x = 0;
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
function createNewAddress(){
    const div = document.getElementById("addressForm").children[0];
    const newAddress = document.createElement("div");
    const createButton = document.getElementById("createButton");
    
    newAddress.setAttribute('id','newAddress'+x);
    newAddress.classList.add("bg-primary", "my-4");
    newAddress.innerHTML = ''+
    '<div class="row my-2 mx-5">'+
    '<div class=" col-lg-2 col-0"></div>'+
    '<div class="col-lg-4 col-12 ">'+
  '    <label class="form-label h3 text-white" for="country">Country</label><br>'+
  '    <input class="form-control h3" type="type" name="country" placeholder="country" required>'+
  '  </div>'+
  '  <div class="col-lg-1 col-0"></div>'+
  '  <div class="col-lg-4 col-12">'+
  '    <label class="form-label h3 text-white" for="province">Province</label><br>'+
  '    <input class="form-control h3" type="type" name="province" placeholder="province" required>'+
  '  </div>'+
  '</div>'+
  '<div class="row my-2 mx-5">'+
  '  <div class="col-lg-2"></div>'+
  '  <div class="col-lg-4 col-12 ">'+
  '    <label class="form-label h3 text-white" for="city">City</label><br>'+
  '    <input class="form-control h3" type="type" name="city" placeholder="city" required>'+
  '  </div>'+
  '  <div class="col-lg-1 col-0"></div>'+
  '  <div class="col-lg-4 col ">'+
  '    <label class="form-label h3 text-white" for="postcode">Postcode</label><br>'+
  '    <input class="form-control h3" type="type" name="postcode" placeholder="00000" required>'+
  '  </div>'+
  '</div>'+
  '<div class="row my-2 mx-5">'+
  '  <div class="col-lg-2 col-0"></div>'+
  '  <div class="col-lg-4 col-12">'+
  '    <label class="form-label h3 text-white" for="address">Address</label><br>'+
  '    <input class="form-control h3 col-6" type="type" name="address" placeholder="address" required>'+
  '</div>'+
  '  <div class="col-lg-1 col-0"></div>'+
  //'  <input class="btn btn-danger btn-lg col-2 my-3 mx-3"  type="button" value="delete" onclick="deleteChild('+x+')"/>'+
  '<div class="col-2 my-3 mx-3">'+
  '<i id="delete" class="fa-solid fa-trash-can fa-3x" onclick="deleteChild('+x+')"></i>'+
  '</div>'+
  '</div>';
    div.append(newAddress);
    div.insertBefore(newAddress, createButton);
    x++;
}

function deleteChild(id){
    const toDelete = document.getElementById('newAddress'+id);
    
    const form = toDelete.parentElement;
    form.removeChild(toDelete);
}

function createFamily(){
    const div = document.getElementById("addressForm").children[0];
    const outline = document.createElement("div");
    const ButtonOpes = document.getElementById("buttonOpes");
    
    const headerDiv = document.createElement("div");
    headerDiv.classList.add("row", "my-2", "mx-5");
    const headerDivRow = document.createElement("div");
    headerDivRow.classList.add("col-lg-2", "col-0");
    const headerLabel = document.createElement("label");
    headerLabel.classList.add("form-label", "h3", "col")
    headerLabel.innerHTML="Family Member";
    
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
    label1.innerHTML="Firstname";
    const input1 = document.createElement("input");
    input1.classList.add("form-control", "h3");
    input1.setAttribute('type','type');
    input1.setAttribute('name','firstname');
    input1.setAttribute('placeholder','firstname');
    input1.setAttribute('required', 'required');

    const headerDiv2Row3 = document.createElement("div");
    headerDiv2Row3.classList.add("col-lg-1", "col-0");

    const headerDiv2Row4 = document.createElement("div");
    headerDiv2Row4.classList.add("col-lg-4", "col-12");
    const label2 = document.createElement("label");
    label2.classList.add("form-label", "h3");
    label2.innerHTML="Lastname";
    const input2 = document.createElement("input");
    input2.classList.add("form-control", "h3");
    input2.setAttribute('type','type');
    input2.setAttribute('name','lastname');
    input2.setAttribute('placeholder','lastname');
    input2.setAttribute('required', 'required');

    const headerDiv3 = document.createElement("div");
    headerDiv3.classList.add("row", "my-2", "mx-5");
    const headerDiv3Row1 = document.createElement("div");
    headerDiv3Row1.classList.add("col-lg-2", "col-0");
    //TODO Insert Phone
    

    const headerDiv3Row2 = document.createElement("div");
    headerDiv3Row2.classList.add("col-lg-1", "col-4");
    const label3 = document.createElement("label");
    label3.classList.add("form-label", "h3");
    label3.innerHTML="Prefix";
    label3.setAttribute('for','prefix')
    const input3 = document.createElement("input");
    input3.classList.add("form-control", "h3");
    input3.setAttribute('list','prefixList');
    input3.setAttribute('id','prefix');
    input3.setAttribute('placeholder','+');
    input3.setAttribute('required', 'required');
    const datalist = document.createElement("datalist");
    datalist.setAttribute('id', 'prefixlist');
    datalist.append(document.createElement("option").setAttribute("value","+39"));
    datalist.append(document.createElement("option").setAttribute("value","+49"));
    datalist.append(document.createElement("option").setAttribute("value","+43"));
    datalist.append(document.createElement("option").setAttribute("value","+41"));


    headerDiv3Row2.append(label3);
    headerDiv3Row2.append(input3);
    headerDiv3Row2.append(datalist);

    const headerDiv3Row3 = document.createElement("div");
    headerDiv3Row3.classList.add("col-lg-3", "col");
    const label4 = document.createElement("label");
    label4.classList.add("form-label", "h3");
    label4.innerHTML="Phone";
    const input4 = document.createElement("input");
    input4.classList.add("form-control", "h3");
    input4.setAttribute('type','type');
    input3.setAttribute('id','phone');
    input4.setAttribute('name','phone');
    input4.setAttribute('placeholder','1234567891');
    input4.setAttribute('required', 'required');

    headerDiv3Row3.append(label4);
    headerDiv3Row3.append(input4);


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

    
    outline.append(headerDiv2);
    outline.append(headerDiv3);
    div.append(outline); 
    div.insertBefore(outline, ButtonOpes);
}



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
  '    <input class="form-control h3 col-6" type="type" name="address" placeholder="addresse" required>'+
  '</div>'+
  '  <input class="btn btn-danger btn-lg" type="button" value="delete" onclick="deleteChild(0)"/>'+

  '</div>';
    div.append(newAddress);
    div.insertBefore(newAddress, div.children[3]);
    console.log(newAddress);
}
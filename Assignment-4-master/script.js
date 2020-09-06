let base_url = "http://localhost:8888/controller.php";

$("document").ready(function(){
    getRestaurantMenuList();
    document.querySelector("#dropdownmenu").addEventListener("change",getMenuItemList);
});
        
function getRestaurantMenuList() {
    let url = base_url + "?req=menu_name_list";
    $.get(url,function(data,success){
        for (const key in data) {
        let opt = document.createElement("option");
        opt.textContent = data[key].id;
        opt.value = data[key].id;
        document.querySelector('#dropdownmenu').appendChild(opt);
    }
    });
}
            
function getMenuItemList(e)
    {
                
        let id=e.target.value;
        console.log(id);
        let url=base_url + "?req=menuName&id="+id;
        $.get(url,function(data,success){
                if(data != null){
                console.log(data);
                let x = data;
                let pricesmall = x.price_small;
                        
                if(pricesmall == null){
                    pricesmall = "Not available";
                }
                let descrp = x.description;
                if(descrp == "" ||descrp ==null){
                    descrp = "Description is not available";
                }
                let spn = x.small_portion_name;
                if(spn == null){
                    spn = "Not available";
                }
                let lpn = x.large_portion_name;
                if(lpn == null){
                    lpn = "Not available";
                }
                        
                document.querySelector("#Name").textContent = x.name;
                document.querySelector("#id").textContent = x.id;
                document.querySelector("#shortName").textContent = x.short_name;
                document.querySelector("#description").textContent = descrp;
                document.querySelector("#priceSmall").textContent = pricesmall;
                document.querySelector("#priceLarge").textContent = x.price_large;
                document.querySelector("#smallPortionN").textContent = spn;
                document.querySelector("#largePortionN").textContent = lpn;
            }
                    //document.getElementById("tabl").style.display = "block";
        });
                
    }



function resetting(){
    console.log("Please select an item!");
    document.querySelector("#shortName").textContent="NONE";
    document.querySelector("#Name").textContent="NONE";
    document.querySelector("#description").textContent="NONE";
    document.querySelector("#priceSmall").textContent="NONE";
    document.querySelector("#priceLarge").textContent="NONE";
    document.querySelector("#smallPortionN").textContent="NONE";
    document.querySelector("#largePortionN").textContent="NONE";
}



  //Divisions in the webisite
  function home(){
    document.getElementById("Home").style.display = "inline-block";
    document.getElementById("Menu").style.display = "none";
  }
  function menu(){
    document.getElementById("Home").style.display = "none";
    document.getElementById("Menu").style.display = "inline-block";
  }
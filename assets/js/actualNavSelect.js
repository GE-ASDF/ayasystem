
let sidebarMenu = Array.from(document.querySelectorAll("#sidebar-menu .nav-item a"))
const url = document.location.pathname.split("/").filter((uri)=> uri != '');
        
if(sidebarMenu){

        let ariaCurrentAttributes = sidebarMenu.map((i, index)=>{
            return i.getAttribute("aria-current")
        }, {})

        if(!ariaCurrentAttributes.includes(url[2])){
            sidebarMenu[0].classList.add("active");
        }else{
            const actualNavItem = sidebarMenu[ariaCurrentAttributes.indexOf(url[2])]
            if(ariaCurrentAttributes.includes(url[2])){
                actualNavItem.classList.add("active")
            }
        }

}
function openSearch() {
    var x = document.getElementById("icon-search-mobile");
    var c = document.getElementById("mobile-search-input");
    
    if (x.className === "icon-search-mobile") {
        x.className += " open";
        c.style.display = "block";
    } else {
        x.className = "icon-search-mobile";
        c.style.display = "none";
    }
}

function navNxt(){
    var x = document.getElementById("orderbook");
    var y = document.getelementById("tradebook");
    if(x.style.display = "none"){
    x.style.display = "inline";
    y.style.display = "none";
    }
    else{
        x.style.display = "none";
        y.style.display = "inline";
    }
    document.getElementById("navNxt").innerHTML = "---";
}

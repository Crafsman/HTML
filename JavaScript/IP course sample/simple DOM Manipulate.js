function showPic(whichpic) {
    var sourc = whichpic.getAttribute("id");


    switch (source) {
        case "fireworks":
            placeholder.src ="images/smll_firwork.jpg";
            break;
        case "coffee":
            placeholder.src ="images/smll_coffee.jpg";
            break;
        case "rose":
            placeholder.src ="images/smll_rose.jpg";
            break;
        case "clock":
            placeholder.src ="images/smll_clock.jpg";
            break;
    
        default:
            break;
    }
    var text = whichpic.getAttribute("title");
    var description = document.getElementById("description");
    description.firstChild.nodeValue = text;
    
}
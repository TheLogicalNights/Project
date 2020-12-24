var tabButtons = document.querySelectorAll(".tabContainer .buttonContainer button");
var tabPanels = document.querySelectorAll(".tabContainer  .tabPanel");
var tabimg = document.querySelectorAll(".box  .imageContainer img");

function showPanel(panelIndex, imageindex) {
    tabButtons.forEach(function (node) {
        node.style.backgroundColor = "";
        node.style.color = "";
    });
    tabButtons[panelIndex].style.color = "white";
    tabButtons[panelIndex].style.backgroundColor = "#4a18a0";
    tabPanels.forEach(function (node) {
        node.style.display = "none";
    });
    tabimg.forEach(function (node) {
        node.style.display = "none";
    });
    tabPanels[panelIndex].style.display = "block";
    tabPanels[panelIndex].style.color = "black";
    tabPanels[panelIndex].style.backgroundColor = "#eee";
    tabimg[imageindex].style.display = "block";
}
showPanel(0, 0);
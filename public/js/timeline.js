(function () {
    "use strict";

    // var
    var items = document.querySelectorAll(".history li");

    function isVariable(el) {
        var hisItem = el.getBoundingClientRect();
        return (
            hisItem.top <=
            (window.innerHeight || document.documentElement.clientHeight ) &&
            hisItem.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    function callbackFunc() {
        for (var i = 0; i < items.length; i++) {
            if (isVariable(items[i])) {
                items[i].classList.add("timelineCor");
            }
        }
    }

    // listen for events
    window.addEventListener("load", callbackFunc);
    window.addEventListener("resize", callbackFunc);
    window.addEventListener("scroll", callbackFunc);
})();


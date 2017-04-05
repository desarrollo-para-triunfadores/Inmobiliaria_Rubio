$("#side-inmueble").addClass("active");
$("#side-inmueble-ul").addClass("menu-open");
$("#side-ele-inmuebles").addClass("active");


var handleBootstrapWizards = function () {
    "use strict";
    $("#wizard").bwizard();
};

var FormWizard = function () {
    "use strict";
    return{init: function () {
            handleBootstrapWizards()
        }}
}
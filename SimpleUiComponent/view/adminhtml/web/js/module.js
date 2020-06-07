define(["uiComponent"], (Component) => {
    "use strict";

    return Component.extend({
        defaults: {
            simple: "Hello World.",
            description : "My first UiComponent"
        },
        initialize: function () {
            this._super();
            console.log("Hello World.");
        }
    })
});

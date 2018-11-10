
var simple = (function ($) {
    var pub = {
        id: 'simple',
        hello: function (message) {
            say(message);
        }
    };
    var say = function (message) {
        alert(message);
    };
    return pub;
})(jQuery);
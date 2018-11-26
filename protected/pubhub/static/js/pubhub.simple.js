

pubhub.module('simple', function (module, require, $) {
    var log = require('log') || console;
    var hello = function(){
        log.warn('module Simple is loaded')
    };
    module.export({
        hello: hello,
    });
});

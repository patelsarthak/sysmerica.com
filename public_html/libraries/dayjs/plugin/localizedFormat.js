!function(e,t){"object"==typeof exports&&"undefined"!=typeof module?module.exports=t():"function"==typeof define&&define.amd?define(t):e.dayjs_plugin_localizedFormat=t()}(this,function(){"use strict";return function(e,t,o){var n=t.prototype,r=n.format,M={LTS:"h:mm:ss A",LT:"h:mm A",L:"MM/DD/YYYY",LL:"MMMM D, YYYY",LLL:"MMMM D, YYYY h:mm A",LLLL:"dddd, MMMM D, YYYY h:mm A"};o.en.formats=M;n.format=function(e){void 0===e&&(e="YYYY-MM-DDTHH:mm:ssZ");var t=this.$locale().formats,o=void 0===t?{}:t,n=e.replace(/(\[[^\]]+])|(LTS?|l{1,4}|L{1,4})/g,function(e,t,n){var r=n&&n.toUpperCase();return t||o[n]||M[n]||o[r].replace(/(\[[^\]]+])|(MMMM|MM|DD|dddd)/g,function(e,t,o){return t||o.slice(1)})});return r.call(this,n)}}});
require([
	"//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"
	, "helper/util"
], function(
	$
	,util
) {

	"use strict";
	
	
    //This function is called when scripts/helper/util.js is loaded.
    //If util.js calls define(), then this function is not fired until
    //util's dependencies have loaded, and the util argument will hold
    //the module value for "helper/util".

	var	TreeBuilder = function(){};
	TreeBuilder.prototype = {
		
	};
	
	return new TreeBuilder;
});
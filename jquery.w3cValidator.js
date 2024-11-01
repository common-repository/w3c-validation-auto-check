
 $j=jQuery.noConflict();
 
// Use jQuery via $j(...)

  

	$j.fn.w3cValidator = function(options) {
		var opts = $j.extend({}, $j.fn.w3cValidator.defaults, options);
		function str_replace(search, replace, subject) {
		return subject.split(search).join(replace);
		}
		return this.each(function() {
			currentURL = ""+encodeURIComponent(window.location);
			var $this = $j(this);
			$j.ajax({
				type: "POST",
				url: opts["parserLocation"],
				data: "url="+currentURL,
				success: function(isValid){
					if(isValid == "true") {
						$this.append(opts["URL_isValid"]);
					} else {
						$this.append(opts["URL_isInvalid"]);
					}
				}
			});
		});
	};
	
	// plugin defaults
	$j.fn.w3cValidator.defaults = {
		URL_isValid: '<a href="http://validator.w3.org/check?uri=referer">valid HTML</a>',
		URL_isInvalid: '<a href="http://validator.w3.org/check?uri=referer">invalid HTML</a>'
	};
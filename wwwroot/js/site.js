console.log("Script.js");

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.modal');
	var options = {dismissible: false, inDuration: 500}
    var instances = M.Modal.init(elems, options);
  });

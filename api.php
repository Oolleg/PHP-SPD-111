 <h1>API and backend</h1>
 
 <div class="card-panel teal">
	 <button class="btn" onClick="getClick()">CREATE</button>
	 <button class="btn indigo" onClick="postClick()">POST</button>
	 <div id="api-result">
	 </div>
	 
	  
 </div>
 <h2>Work with Data Base</h2>
 <script>
 function getClick(){
	 fetch("/test")
	 .then(r => r.text())
	 .then(t => {
		 document.getElementById("api-result").innerText = t;
	 });
 }
 function postClick(){
	 fetch("/test", {
		 method: 'POST'
	 })
	 .then(r => r.text())
	 .then(t => {
		 document.getElementById("api-result").innerText = t;
	 });
 }
 </script>
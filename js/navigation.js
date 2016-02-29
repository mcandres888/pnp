$( document ).ready(function() {
      $.ajax({
  			url: "index.php/main/getCount",
			}).done(function( html ) {
      	$("#mesagebadge").text(html);
			});
 
		setInterval(function () {
      $.ajax({
  			url: "index.php/main/getCount",
			}).done(function( html ) {
      	$("#mesagebadge").text(html);
			});
   	}, 3000);

});

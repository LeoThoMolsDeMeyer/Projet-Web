<footer class="footer">
		<p> <?php date_default_timezone_set('Europe/Brussels'); ?> </p>
		<p align="center">Développé par le groupe 104 - <?php echo date('j/m/Y'); ?> - <?php echo date('H:i:s'); ?></p>
		
	</footer>
	<!-- Bootstrap Scripts -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	



<!--affiche l'heure en direct, mais ce n'est pas nécessaire. En plus, c'est du javascript et on ne peut pas en faire :( -->
<div id="horloge"> </div>

<script type="text/javascript">
function horloge(){
 var div = document.getElementById("horloge");
 var heure = new Date();
 div.firstChild.nodeValue = heure.getHours()+":"+heure.getMinutes()+":"+heure.getSeconds();
 window.setTimeout("horloge()",1000);
}

horloge();
</script>





</body>
</html>
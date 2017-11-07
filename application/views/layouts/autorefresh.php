<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
    var auto_refresh = setInterval(
    function () {
       $('#load_content').load('tampilan.php').fadeIn("slow");
    }, 10000); // refresh setiap 10000 milliseconds

</script>
<div id="load_content"></div>

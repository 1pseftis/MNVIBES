<?php
$discord= json_decode(file_get_contents('https://discordapp.com/api/guilds/667454537187065875/widget.json'), true)['instant_invite'];
$discord = "https://discordapp.com/";
?>
<html>
<body>
Redirecting...
<script>
window.location.href = "<?php echo $discord; ?>";
</script>
</body>
</html>
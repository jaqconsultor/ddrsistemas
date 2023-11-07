<div>
<body  onload="">
	<p class="h2">Redirección en <span id="seg">7</span> segundos.</p>
<form action="https://ddrsistemas.com/pasarela/Index.php" method="post" name="form1" id="form1">
<input wire:model.defer="state.cedula" name="cedula" id="cedula" type="hidden" />
<input wire:model.defer="state.total" name="amount" id="amount" type="hidden" />
<input wire:model.defer="state.email" name="email" id="email" type="hidden" />
<input wire:model.defer="state.title" name="title" id="title" type="hidden" />
</form>
<script type="text/javascript">
window.onload = function() {
    setInterval('contador()',1000);
};

var num=7;
	function contador() 
	{
		num--;
		if(num==0) document.form1.submit();
		document.getElementById('seg').innerHTML=num;
	}
</script>
</body>
</div>
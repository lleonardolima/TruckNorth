<header>
	<div class="topo">
		<div class="topo-contato">
			<p><img src="assets/truckNorth/telefone.webp" alt="">(11) 2242-2316</p>
		</div>
		<div class="topo-menu">
			<div class="topo-logo"><a href="index.php"><img src="assets/truckNorth/logo.webp" alt="logo"
						aria-label="logo-site"></a></div>
			<div class="topo-menu-esquerda">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="#quem-somos">Serviços</a></li>

					<li><a href="#contato">Contato</a></li>
					<li><a href="informacoes.php">Informações</a></li>
				</ul>
			</div>
		</div>

		<img class="burger" src="assets/truckNorth/menu.webp" alt="" onclick="openMenu()">
		<div class="topo-logo-mobile2"><a href="index.php"><img src="assets/truckNorth/logo.webp" alt="logo"
					aria-label="logo-site"></a></div>
		<div id="menuMobile">
			<img class="burger" src="assets/truckNorth/menu.webp" alt="" onclick="openMenu()">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="#quem-somos">Serviços</a></li>
				<li><a href="representantes.php">Representantes</a></li>
				<li><a href="#contato">Contato</a></li>
				<li><a href="informacoes.php">+</a></li>
			</ul>
		</div>
	</div>
</header>

<script>
	menuMobile = document.getElementById("menuMobile");
	function openMenu() {
		menuMobile.classList.toggle("activeMenu");
	}
</script>
<div id="add_to_me"></div>
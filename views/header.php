<!--Modal de busca avançada-->
<div id="buscaAvancadaBackground">
	<form action="busca.php">
		<div id="buscaAvancadaBox">
			<div id="fecharBusca"><h4>Busca Avançada</h4><span onclick="abrirBusca()">X</span></div>
			<div id="conteudoBuscaEsquerda">
				<table>
					<tr>
						<td><label for="txtDestinoAvancado">Destino</label></td>
					</tr>
					<tr>
						<td><input type="text" name="txtDestinoAvancado" value="" id="txtDestinoAvancado" required></td>
					</tr>
					<tr>
						<td><label for="slcTipoEstadia">Tipo de estadia</label></td>
					</tr>
					<tr>
						<td>
							<select name="slcTipoEstadia">
								<option value="hotel">Hotel</option>
								<option value="pousada">Pousada</option>
								<option value="resort">Resort</option>
								<option value="chale">Chalé</option>
							</select>
						</td>
					</tr>
					<tr>
						<td><label for="slcEstrela">Estrelas</label></td>
					</tr>
					<tr>
						<td>
							<select name="">
								<option value="1">1 Estrela</option>
								<option value="2">2 Estrelas</option>
								<option value="3">3 Estrelas</option>
								<option value="4">4 Estrelas</option>
								<option value="5">5 Estrelas</option>
							</select>
						</td>
					</tr>
					<tr>
						<td><label for="slcParceiro">Parceiro</label></td>
					</tr>
					<tr>
						<td>
							<select name="slcParceiro">
								<option value="hilton">Hilton</option>
							</select>
						</td>
					</tr>
					<tr>
						<td><label for="slcAvaliacao">Avaliação</label></td>
					</tr>
					<tr>
						<td>
							<select name="slcAvaliacao">
								<option value="<25">Menor que 25</option>
								<option value="<50">Menor que 50</option>
								<option value="<75">Menor que 75</option>
								<option value=">75">Acima de 75</option>
							</select>
						</td>
					</tr>
					<tr>
						<td><label for="slcPreco">Preço</label></td>
					</tr>
					<tr>
						<td>
							<select name="slcPreco">
								<option value="<100">R$ 0,00 - R$ 99,99</option>
								<option value="<300">R$ 100,00 - R$ 299,99</option>
								<option value="<500">R$ 300,00 - R$ 499,99</option>
								<option value="<1000">R$ 500,00 - R$ 999,99</option>
								<option value=">1000">Acima de R$ 1000,00</option>
							</select>
						</td>
					</tr>
				</table>
			</div>
			<div id="conteudoBuscaDireita">
				<div id="comodidadesBox">
					<h3>Comodidades do Hotel</h3>
					<ul>
						<li><input type="checkbox" name="chkAcademia" value="1"><label for="chkAcademia">Academia</label></li>
						<li><input type="checkbox" name="chkAnimais" value="1"><label for="chkAnimais">Animais permitidos</label></li>
						<li><input type="checkbox" name="chkBar" value="1"><label for="chkBar">Bar</label></li>
						<li><input type="checkbox" name="chkConcierge" value="1"><label for="chkConcierge">Concierge</label></li>
						<li><input type="checkbox" name="chkConveniencia" value="1"><label for="chkConveniencia">Loja de conveniência</label></li>
						<li><input type="checkbox" name="chkElevador" value="1"><label for="chkElevador">Elevador</label></li>
						<li><input type="checkbox" name="chkEstacionamento" value="1"><label for="chkEstacionamento">Estacionamento</label></li>
						<li><input type="checkbox" name="chkLavanderia" value="1"><label for="chkLavanderia">Lavanderia</label></li>
						<li><input type="checkbox" name="chkPiscina" value="1"><label for="chkPiscina">Piscina</label></li>
						<li><input type="checkbox" name="chkRestaurante" value="1"><label for="chkRestaurante">Restaurante</label></li>
						<li><input type="checkbox" name="chkSpa" value="1"><label for="chkSpa">Spa</label></li>
						<li><input type="checkbox" name="chkTransfer" value="1"><label for="chkTransfer">Transfer para aeroporto</label></li>
						<li><input type="checkbox" name="chkWifi" value="1"><label for="chkWifi">Wi-fi gratuito</label></li>
					</ul>
					<h3>Comodidades do Quarto</h3>
					<ul>
						<li><input type="checkbox" name="chkAr" value="1"><label for="chkAr">Ar condicionado</label></li>
						<li><input type="checkbox" name="chkBanheira" value="1"><label for="chkBanheira">Banheira</label></li>
						<li><input type="checkbox" name="chkCofre" value="1"><label for="chkCofre">Cofre no quarto</label></li>
						<li><input type="checkbox" name="chkCozinha" value="1"><label for="chkCozinha">Cozinha</label></li>
						<li><input type="checkbox" name="chkGeladeira" value="1"><label for="chkGeladeira">Geladeira</label></li>
						<li><input type="checkbox" name="chkInternet" value="1"><label for="chkInternet">Internet</label></li>
						<li><input type="checkbox" name="chkMicroondas" value="1"><label for="chkMicroondas">Microondas</label></li>
						<li><input type="checkbox" name="chkSecador" value="1"><label for="chkSecador">Secador</label></li>
						<li><input type="checkbox" name="chkTelefone" value="1"><label for="chkTelefone">Telefone</label></li>
						<li><input type="checkbox" name="chkCabo" value="1"><label for="chkCabo">TV a cabo</label></li>
						<li><input type="checkbox" name="chkSatelite" value="1"><label for="chkSatelite">TV via satélite</label></li>
						<li><input type="checkbox" name="chkVentilador" value="1"><label for="chkVentilador">Ventilador</label></li>
						<li><input type="checkbox" name="chkWifi" value="1"><label for="chkWifi">Wi-fi gratuito</label></li>
					</ul>
				</div>
                <script type="text/javascript">
                	$("#comodidadesBox").accordion();
                	$("#buscaAvancadaBackground").toggle();
                    $("#buscaAvancadaBackground").css('opacity', 1);
                </script>
			</div>

			<a href="#">
				<input type="submit" id="btnBuscaAvancada" value="PESQUISAR">
			</a>
		</div>
	</form>
</div>
<!---->
<!--Cabeçalho-->
<header>
	<div id="headerMenu">
		<!--Logo da empresa-->
		<div id="headerLogo">
			<a href="homepage.php">
				<img src="imagens/TourDreams.png" alt="TourDreams" onmousedown="return false">
			</a>
		</div>
		<!---->
		<!--Formulário de busca-->
		<div id="headerBusca">
			<form method="post" action="busca.php">
				<input type="text" name="txtDestino" placeholder="Digite seu destino..." id="txtDestino" required>
				<input type="image" value="submit" src="imagens/pesquisar.png"  draggable="false" onmousedown="return false" style="user-drag: none">
			</form>
				<input type="image" onclick="abrirBusca()" src="imagens/pesquisaravancado.png"  draggable="false" onmousedown="return false" style="user-drag: none">
		</div>
		<!---->
		<!--Botão de login-->
		<div class="headerBtn" style="border-left: 2px solid #fff;" onclick="headerLogin()">
			<img src="imagens/user.svg" alt="Login" draggable="false" onmousedown="return false" style="user-drag: none" >
			Login
		</div>
		<!---->
		<!--Botão de moeda-->
		<div class="headerBtn" style="margin-right: 0; " onclick="headerMoeda()">
			<img style="width:68px;height:68px;margin-top:7px;" src="imagens/coin.svg" alt="Moeda" draggable="false" onmousedown="return false" style="user-drag: none">
			Moeda
		</div>
		<!---->
	</div>
	<!--Menu da páginas-->
	<div id="headerCategorias">
		<div id="headerCategoriasBox">
			<ul id="categorias">
				<a href="homepage.php"><li>HOME</li></a>
				<a href="sobrenos.php"><li>SOBRE NÓS</li></a>
				<a href="parceiros.php"><li>NOSSOS PARCEIROS</li></a>
				<a href="melhoresDestinos.php"><li>MELHORES DESTINOS</li></a>
				<a href="conhecaseudestino.php"><li>CONHEÇA SEU DESTINO</li></a>
				<a href="promocoes.php"><li>PROMOÇÕES</li></a>
				<a href="faleconosco.php"><li>FALE CONOSCO</li></a>
			</ul>
		</div>
	</div>
	<!---->
	<!--Menu de login-->
	<div id="headerLogin" style="display: none;">
		<form action="router.php?controller=login" method="POST">
			<table>
				<tr>
			    	<td colspan="2"><h2>Acesse sua Conta</h2></td>
				</tr>
				<tr>
					<td colspan="2"><label for="txtLogin">Login</label></td>
				</tr>
				<tr>
					<td colspan="2"><input type="text" name="txtLogin" placeholder="login@exemplo.com"></td>
				</tr>
				<tr>
					<td colspan="2"><label for="txtSenha">Senha</label></td>
				</tr>
				<tr>
					<td colspan="2"><input type="password" name="txtSenha" placeholder="******"></td>
				</tr>
				<tr>
					<td style="width: 50%; max-width: 50%;"><input type="submit" name="btnRegistro" value="Criar Conta" id="btnNovoUsuario"></td><td style="width: 50%; max-width: 50%;"><input type="submit" name="btnLogin" value="Login" id="btnLogin"></td>
				</tr>
				<tr>
					<td colspan="2"><a href="#"><h3>Esqueci minha senha</h3></a></td>
				</tr>
			</table>
		</form>
	</div>
	<!---->
	<!--Menu de moeda-->
	<div id="headerMoeda" style="display: none;">
		<ul>
			<a href="?moeda=real"><li>Real (R$)</li></a>
			<a href="?moeda=dolar"><li>Dólar (US$)</li></a>
		</ul>
	</div>
	<!---->
</header>
<!---->

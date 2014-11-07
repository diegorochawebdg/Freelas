<?php include "header.php"; ?>  
	
	<link rel="stylesheet" href="css/page-inscreva-se.css">
	
	<section id="form">
		<div class="container">
			
			<div class="row-fluid">
				<h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit molestias, dolores minus ad libero. Dolores sit repudiandae rem ab, quam minus cum illum voluptatum accusamus iure inventore odio eligendi, necessitatibus.</h1>
				<form action="">
					<input type="text" name="nome" id="nome" placeholder="Nome Completo" required>
					<input type="email" name="email" id="email" placeholder="E-mail" required>
					<input type="password" name="senha" id="senha" placeholder="Senha" required>
					<div class="select">
						<select name="estado" id="estado" required>
							<option value="estado">Estado</option> 
                            <option value="ac">Acre</option> 
                            <option value="al">Alagoas</option> 
                            <option value="am">Amazonas</option> 
                            <option value="ap">Amapá</option> 
                            <option value="ba">Bahia</option> 
                            <option value="ce">Ceará</option> 
                            <option value="df">Distrito Federal</option> 
                            <option value="es">Espírito Santo</option> 
                            <option value="go">Goiás</option> 
                            <option value="ma">Maranhão</option> 
                            <option value="mt">Mato Grosso</option> 
                            <option value="ms">Mato Grosso do Sul</option> 
                            <option value="mg">Minas Gerais</option> 
                            <option value="pa">Pará</option> 
                            <option value="pb">Paraíba</option> 
                            <option value="pr">Paraná</option> 
                            <option value="pe">Pernambuco</option> 
                            <option value="pi">Piauí</option> 
                            <option value="rj">Rio de Janeiro</option> 
                            <option value="rn">Rio Grande do Norte</option> 
                            <option value="ro">Rondônia</option> 
                            <option value="rs">Rio Grande do Sul</option> 
                            <option value="rr">Roraima</option> 
                            <option value="sc">Santa Catarina</option> 
                            <option value="se">Sergipe</option> 
                            <option value="sp">São Paulo</option> 
                            <option value="to">Tocantins</option> 
						</select>
					<input type="text" name="cidade" id="cidade" placeholder="Cidade" required>
					<div class="clearfix"></div>
					<span class="data">Data de nascimento</span>
					<input type="text" name="dia" id="dia" placeholder="Dia" class="col-md-4" required>
					<input type="text" name="mes" id="mes" placeholder="Mês" class="col-md-4" required>
					<input type="text" name="ano" id="ano" placeholder="Ano" class="col-md-4" required>
					<div class="clearfix"></div>

					<label>Sexo:</label>
					<input type="radio" name="sexo" id="masculino" required>
					<label for="masculino">Masculino</label>
					<input type="radio" name="sexo" id="feminino" required>
					<label for="feminino">Feminino</label>
					<div class="clearfix"></div>

					<input type="checkbox" name="termos" id="termos" checked>
					<label class="termos" for="termos">Ao clicar em Participar, você concorda com nossos <a href="#" target="_blank">Termos e Política de Privacidade</a></label>

					<button type="submit" name="participar" id="participar">Participar</button>
				</form>
			</div>
			
		</div>
	</section>
        
<?php include "footer.php" ?>
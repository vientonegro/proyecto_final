<?php defined('BASEPATH') or exit ('No se permite acceso directo');?>
	
	<a href="historial/index"><div class="inse"><h2 >Historial</h2></div></a>
	<a href="modificar/index"><div class="inse2"><h2 >Modificar Perfil</h2></div></a>
	<div class="clear"></div>

	<h2 class="inser">Insertar</h2>

	<form class="insertar" method="POST" id="insertar" action="perfil/insert" enctype="multipart/form-data">

		<div>
			<ul>
				<li> 
				  <select class="loRe" id="categoria" name="categoria">
				    <option value="1" selected="selected">Joyeria</option>
				    <option value="2">Artesania</option>
				    <option value="3">Pintura</option>
				  </select>
				</li>
				<li> 
				 <input class="loRe" type="text" name="titulo" placeholder="titulo" id="titulo"/> 
				</li>
				<li> 
				<textarea placeholder="Introduce el texto" name="descripcion" id="descripcion"  cols="30" rows="10" ></textarea> 
				</li>
				</li>
				 <input class="loRe" type="number" name="precio" placeholder="precio" id="precio"/>€ 
				</li>
				<li>
					<img src="" id="blah" >
				</li>
				<li>
					<input class="loRe" type="file" id="user-img-file" name="user-img-file" onchange="readURL(this)">
				<li>
					<input type="submit" name="subir" value="Subir e insertar"/>
				</li>
		    </ul>
		    <div id="msg"></div>
		</div>
	</form>



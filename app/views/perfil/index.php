<?php defined('BASEPATH') or exit ('No se permite acceso directo');?>

	<form class="insertar" method="POST" id="insertar" action="perfil/insert" enctype="multipart/form-data">
		<h2 class="inse">Insertar</h2>
		<div>
			<ul>
				<li> 
				 <input class="loRe" type="number" name="categoria" placeholder="categoria" id="categoria"/> 
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
				</li>
				 <input class="loRe" type="text" name="usuario" placeholder="usuario" id="usuario"/> 
				</li>
				<li>
					<input type="submit" name="subir" value="Subir e insertar"/>
				</li>
		    </ul>
		    <div id="msg"></div>
		</div>
	</form>
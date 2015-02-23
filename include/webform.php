<div class="webform">
    <div>
        <form class="informacion" id=informacion" name="informacion" method="post" action="">
            <!-- Nombre -->
            <div>
                <label for="nombre">Nombre</label>
                <span class="error">*Ingrese un nombre</span>
                <input type="text" id="nombre" name="nombre" required="required"/>             
            </div>
            <!-- Telefono -->
            <div>
                <label for="telefono">Teléfono</label>
                <span class="error">*Debe ingresar un teléfono</span>
                <input type="telephone" id="telefono" name="telefono" placeholder="5555-5555" pattern="\d{4}-?\d{4}" required="required"/>
                
            </div>
            <!-- Correo -->
            <div>
                <label for="correo">Correo</label>
                <span class="error">*Debe ingresar un correo válido</span>
                <input type="email" id="correo" name="correo" required="required"/>
            </div>
            <!-- Consulta -->
            <div>
                <label for="consulta">Consulta</label>
                <textarea id="consulta" name="Consulta"/>
            </div>
            <div>
                <p>Ingresando los datos, usted acepta que Akustik y sus asociados de negocios, le envien información sobre productos y servicios </p>
            </div>
            <div id="informacion_submit">  
                <button type="submit">Enviar</button>
            </div>
        </form>
    </div>
    <div class="contacto">
        <p id="contacto_titulo">Comuniquese con nosotros</p>
        <table class="contact_table"> 
            <tr>
                <td class="col_flag">
                    <img class="contact_flag" src="img/Costa-Rica.png" alt="Costa Rica">
                </td>
                <td class="col_telefono">
                    <p class="contact_telefono"> +(506) 4100-4130 </p>
                </td>
            </tr>
            <tr>
                <td class="col_flag">
                    <img class="contact_flag" src="img/Nicaragua.png" alt="Nicaragua">
                </td>
                <td class="col_telefono">
                    <p class="contact_telefono"> +(505) 2277-2557 </p>
                </td>
            </tr>
        </table>
    </div>
</div>
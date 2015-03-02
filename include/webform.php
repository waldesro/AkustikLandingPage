<div class="web-form">
    <form id="informacion" name="informacion" method="post" action="">
        <!-- Nombre -->
        <div>
            <label for="nombre">Nombre</label>
            <span class="error">*Ingrese un nombre</span>
            <input type="text" id="nombre" name="nombre" required="required"/>             
        </div>
        <!-- Telefono -->
        <div>
            <label for="telefono">Teléfono</label>
            <span class="error">*Debe ingresar un teléfono (5555-5555)</span>
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
            <textarea id="consulta" name="consulta"></textarea>
        </div>
        <div>
            <p>Ingresando los datos, usted acepta que Akustik y sus asociados de negocios, le envien información sobre productos y servicios </p>
        </div>
        <div class="div-button">  
            <button id="enviar" type="submit">Enviar Consulta</button>
        </div>
    </form>
    <div class="contacto">
        <p id="contacto-titulo">Comuniquese con nosotros</p>
        <table class="contacto-table"> 
            <tr>
                <td class="columna-flag">
                    <img class="contacto-flag" src="img/Costa-Rica.png" alt="Costa Rica">
                </td>
                <td class="columna-telefono">
                    <p class="contacto-telefono"> +(506) 4100-4130 </p>
                </td>
            </tr>
            <tr>
                <td class="columna-flag">
                    <img class="contacto-flag" src="img/Nicaragua.png" alt="Nicaragua">
                </td>
                <td class="columna-telefono">
                    <p class="contacto-telefono"> +(505) 2277-2557 </p>
                </td>
            </tr>
        </table>
    </div>
</div>
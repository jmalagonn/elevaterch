<section id="contacto" class="d-none">
    <div class="contacto-overlay"></div>
    <div class="contacto-form">
        <div class="contacto-form--header">
            <img src="http://elevaterchingenieria.com/wp-content/uploads/2020/10/Logo_Header.png" alt="Elevaterch ingeniería">
            <h4 class="text-center pt-3 pb-3">CONTÁCTANOS</h4>
        </div>
        <div class="contacto-form--body">
            <form action="<?php echo esc_url( admin_url( 'admin-post.php' ) ) ?>" method="post">
                <div class="form-group">
                    <label for="el-nombre">Nombre</label>
                    <input class="form-control" type="text" name="el-nombre" id="el-nombre">
                    <label for="el-telefono">Teléfono</label>
                    <input class="form-control" type="tel" name="el-telefono" id="el-telefono">
                    <label for="el-mail">Email</label>
                    <input class="form-control" type="email" name="el-mail" id="el-mail">
                    <label for="el-mensaje">Mensaje</label>
                    <textarea name="el-mensaje" id="el-mensaje" rows="5" class="form-control"></textarea>
                    <input type="hidden" name="action" value="form-contacto">
                </div>
                <div class="text-center">
                    <button class="btn el-btn" type="submit">Enviar</button>
                </div>
            </form>
        </div>
        <div class="contacto-close">
            <svg width="20px" height="20px">
                <use href="#close-icon" />
            </svg>
        </div>
    </div>
</section>
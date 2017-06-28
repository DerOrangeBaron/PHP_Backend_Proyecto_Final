
<div id="contacto-modal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Contacto</h4>
            </div>
            <div class="modal-body">
                <form action="https://formspree.io/your@email.com" method="POST">
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" name="name" value="" class="form-control" placeholder="Ingresar nombre completo...">
                    </div><!-- /.form-group -->
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="_replyto" value="" class="form-control" placeholder="Ingresar Email...">
                    </div><!-- /.form-group -->
                    <div class="form-group">
                        <label for="message">Mensaje</label>
                        <textarea name="message" rows="8" cols="40" class="form-control" placeholder="Ingresar mensaje..."></textarea>
                    </div><!-- /.form-group -->
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">Enviar</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
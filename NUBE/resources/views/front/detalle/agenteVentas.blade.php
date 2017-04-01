<div class="col-md-12 col-sm-12">
    <section id="contact-agent">
        <header><h2>Contactar</h2></header>
        <div class="row">
            <section class="agent-form">
                {{--
                <div class="col-md-7 col-sm-12">
                    <aside class="agent-info clearfix">
                        <figure><a href="agent-detail.html"><img alt="" src="assets/img/agent-01.jpg"></a></figure>
                        <div class="agent-contact-info">
                            <h3>Juan Rubio</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et dui vestibulum,
                                bibendum purus sit amet, vulputate mauris. Ut adipiscing gravida tincidunt.
                                Duis euismod placerat rhoncus.
                            </p>
                            <dl>
                                <dt>Phone:</dt>
                                <dd>(123) 456 789</dd>
                                <dt>Mobile:</dt>
                                <dd>888 123 456 789</dd>
                                <dt>Email:</dt>
                                <dd><a href="mailto:#">john.doe@example.com</a></dd>
                                <dt>Skype:</dt>
                                <dd>john.doe</dd>
                            </dl>
                            <hr>
                            <a href="agent-detail.html" class="link-arrow">Full Profile</a>
                        </div>
                    </aside><!-- /.agent-info -->
                </div><!-- /.col-md-7 -->
                --}}
                <div class="col-md-7 col-sm-12">
                    <div class="agent-form">
                        <form role="form" id="form-contact-agent" method="post"  class="clearfix">
                            <div class="form-group">
                                <label for="form-contact-agent-name">Tu Nombre<em>*</em></label>
                                <input type="text" class="form-control" id="form-contact-agent-name" name="form-contact-agent-name" required>
                            </div><!-- /.form-group -->
                            <div class="form-group">
                                <label for="form-contact-agent-email">Tu Email<em>*</em></label>
                                <input type="email" class="form-control" id="form-contact-agent-email" name="form-contact-agent-email" required>
                            </div><!-- /.form-group -->
                            <div class="form-group">
                                <label for="form-contact-agent-message">Escribi tu mensaje<em>*</em></label>
                                <textarea class="form-control" id="form-contact-agent-message" rows="2" name="form-contact-agent-message" required></textarea>
                            </div><!-- /.form-group -->
                            <div class="form-group">
                                <button type="submit" class="btn pull-right btn-default" id="form-contact-agent-submit">Enviar</button>
                            </div><!-- /.form-group -->
                            <div id="form-contact-agent-status"></div>
                        </form><!-- /#form-contact -->
                    </div><!-- /.agent-form -->
                </div><!-- /.col-md-5 -->
            </section><!-- /.agent-form -->
        </div><!-- /.row -->
    </section><!-- /#contact-agent -->

</div><!-- /.col-md-12 -->

        <!-- Contact Section -->
        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2>Kontakt</h2>
                        <hr class="star-primary hrContact">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <form name="sentMessage" id="contactForm" novalidate>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label>Name</label>
                                    <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Bitte geben Sie Ihren Namen ein.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label>Email</label>
                                    <input type="email" class="form-control" placeholder="Email" id="email" required data-validation-required-message="Bitte geben Sie Ihre Emailadresse ein.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label>Telephon</label>
                                    <input type="tel" class="form-control" placeholder="Telephon" id="phone" required data-validation-required-message="Bitte geben Sie Ihre Telephonnummer ein.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label>Nachricht</label>
                                    <textarea rows="5" class="form-control" placeholder="Nachricht" id="message" required data-validation-required-message="Geben Sie Ihre Nachricht ein.">Nachricht</textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <br>
														<div id="zustimmung">
Ich stimme zu, dass meine Angaben aus dem Kontaktformular zur Beantwortung meiner Anfrage erhoben und verarbeitet werden. Die Daten werden nach abgeschlossener Bearbeitung Ihrer Anfrage gelöscht. Hinweis: Sie können Ihre Einwilligung jederzeit für die Zukunft per E-Mail an <script>document.write("\x69\x6e\x66\x6f\x40\x73\x65\x67\x74\x72\x61\x69\x6c\x2e\x64\x65");</script> widerrufen. Detaillierte Informationen zum Umgang mit Nutzerdaten finden Sie in unserer <a href="./ds.html" target="_blank" style="color:#777;">Datenschutzerklärung</a>.
														</div>
														<br>
                            <div id="success"></div>
                            <div class="row">
                                <div class="form-group col-xs-12">
                                    <span id="save-placeholder"></span>
                                    <button id="sendenBtn" type="submit" class="btn btn-success btn-lg">Senden</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

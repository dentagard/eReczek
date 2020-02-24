<section id="kontakt" class="section-c w-100">
    <div class="container">
        <h2>Kontakt</h2>
        <div id="result" class="result">
        </div>
        <div class="row">
            <div class="col-md-6">
                <a class="h5 text-white" href="mailto: biuro@ereczek.pl">Napisz mejla: biuro@ereczek.pl</a>
            </div>
            <div class="col-md-6">
                <p class="h5 float-right float-left-on-small">Zadzwoń: (+48) 501 383 149</p>
            </div>
        </div>

        <p class="h5">Lub napisz wiadomość:</p>
        <form id="contact-form" class="needs-validation" method="post" action="<?php echo admin_url('admin-ajax.php') ?>" novalidate>
        <!-- <form id="contact-form" class="needs-validation" method="post" action="#" novalidate> -->
            <div class="container">
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="name">Imię</label>
                        <input type="text" class="form-control op-05 border-white" id="name" placeholder="Imię" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="surname">Nazwisko</label>
                        <input type="text" class="form-control op-05 border-white" id="surname" placeholder="Nazwisko" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="email">Email</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="emailPrepand">@</span>
                            </div>
                            <input type="text" class="form-control op-05 border-white" id="email" aria-describedby="emailPrepand" placeholder="Email" required>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label for="message">Wiadomość</label>
                        <textarea class="form-control op-05 border-white" rows="5" id="message" placeholder="Napisz wiadomość" required></textarea>
                    </div>
                </div>
                <button class="btn btn-primary btn-block" type="submit">Wyślij</button>
        </form>
    </div>
</section>
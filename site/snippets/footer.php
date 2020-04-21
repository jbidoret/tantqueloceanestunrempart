
        <section class="asuivre">
            <article>
            <p>
                À suivre.
            </p>
            </article>
        </section>

        <footer>
            <?= $site->copyright()->kt() ?>
            <div id="mc">
            <!-- Begin Mailchimp Signup Form -->
            <div id="mc_embed_signup">
            <form action="https://art.us19.list-manage.com/subscribe/post?u=bdc40aac02547797527403a50&amp;id=1bd66fa6d3" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                <div id="mc_embed_signup_scroll">
                <h2>La suite dans votre boîte e-mail ?</h2>
                <div class="mc-field-group">
                    <input placeholder="Adresse e-mail" type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_bdc40aac02547797527403a50_1bd66fa6d3" tabindex="-1" value=""></div>
                    <input type="submit" value="Abonnez-vous !" name="subscribe" id="mc-embedded-subscribe" class="button">
                </div>
                <div id="mce-responses" class="clear">
                    <div class="response" id="mce-error-response" style="display:none"></div>
                    <div class="response" id="mce-success-response" style="display:none"></div>
                </div>   
            </form>
            </div>            
            <!--End mc_embed_signup-->
            </div>
        </footer>
    </main>

    </div>

    <script>
        var root_url = "<?= $site->url() ?>";
        var page_url = "<?= $page->url() ?>";
    </script>
    <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
    <?= js("assets/js/page_scroll_indicator.js") ?>
    <?= js("assets/js/main.js") ?>
    

</body>
</html>
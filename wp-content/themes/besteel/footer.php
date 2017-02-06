        </main>

        <footer class="footer">
            <div class="footer__content">

                <nav class="navFooter">
                    <div class="navFooter__main">
                        <h2 class="navFooter__title"><?php _e('Navigation','blue'); ?></h2>
                        <ul class="navFooter__list">
                            <?php foreach (cleanMenu('footerMenu') as $k => $item): ?>
                            <li class="navFooter__item"><a class="navFooter__link"  href="<?php echo($item->url) ?>"><?php echo($item->label) ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <section class="navFooter__product">
                        <h3><?php _e('Produits', 'blue'); ?></h3>
                        <ul class="navFooter__list">
                            <?php foreach (cleanMenu('footerMenuProduct') as $k => $item): ?>
                            <li class="navFooter__item"><a class="navFooter__link"  href="<?php echo($item->url) ?>"><?php echo($item->label) ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </section>

                </nav>

                <section class="navInfos">
                    <h2 class="navInfos__title"><?php _e('Informations utiles', 'blue'); ?></h2>
                    <div class="navInfos__address">
                        <p class="navInfos__address__line"><?php echo(get_field("address_name",22)); ?></p>
                        <p class="navInfos__address__line"><?php echo(get_field("address_street",22)); ?></p>
                        <p class="navInfos__address__line"><?php echo(get_field("address_zipcode",22)); ?> <?php echo(get_field("address_city",22)); ?></p>
                    </div>
                    <div class="navInfos__contact">
                        <a class="navInfos__contact__line" href="tel:<?php echo(cleanTel(get_field("phone",22))); ?>">Tel : <?php echo(get_field("phone",22)); ?></a>
                        <p class="navInfos__contact__line">Fax&nbsp;: <?php echo(get_field("fax",22)); ?></p>
                        <p class="navInfos__contact__line">Skype&nbsp;: <?php echo(get_field("skype",22)); ?></p>
                         <p class="navInfos__contact__line">TVA&nbsp;: <?php echo(get_field("tva",22)); ?></p>
                    </div>
                </div>


            </div>
        </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="<?php theme_url('assets/js/b.js'); ?>"></script>
        <?php wp_footer(); ?> 
        <script>


        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', '', 'auto');
        ga('send', 'pageview');
        </script>
    </body>
</html>

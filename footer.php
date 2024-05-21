    <footer class="container-fluid containerfooter"> <!-- FOOTER FOOTER -->
        <div class="container">
            

                    <div class="row">
        
                        <div class="nav-brand col-sm-4">
                            <a href=http://170.187.231.66/~mesh20/sub1><img alt="logo" class="img-fluid footerbrand" src="http://170.187.231.66/~mesh20/sub1/wp-content/themes/asbestos_stories/images/logo.svg"></a>
                        </div>
        
                    <div class="col-sm-4 footerright">
                        <ul>
                            <li><a href="<?php echo get_permalink(1014); ?>">ABOUT US</a></li>
                            <li><a href="#">CONTACT US</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 footerright">
                        <ul>
                            <?php
                            $external_urls = array(
                                array('url' => 'https://www.nhmrc.gov.au/', 'text' => 'NHMRC'),
                                array('url' => 'https://ncard.org.au/', 'text' => 'NCARD'),
                                array('url' => 'https://www.murdoch.edu.au/', 'text' => 'MURDOCH UNIVERSITY'),
                            );
                            ?>
                            <?php foreach ($external_urls as $external_url): ?>
                                <li><a href="<?php echo esc_url($external_url['url']); ?>"><?php echo esc_html($external_url['text']); ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                      
        
        
                    </div> <!-- row -->
                


             <!-- row -->
            
        </div> <!-- container -->
        <div class="container-fluid footerend">
            <a href="<?php echo get_permalink(1676); ?>">TERMS OF USE</a>
            <a href="#">PRIVACY</a>
            <a href="#">ACKNOWLEDGEMENTS</a>
        </div>

        <div class="container-fluid footerend">
            <p>© 2024 The Australian Asbestos Network, Murdoch University, Perth, Western Australia</p>          
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>
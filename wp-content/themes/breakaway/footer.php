<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 */

?>
<footer>
        <div class="inner-container">
            <div class="footer-grid">
                <div class="cmp-link-block">
                    <ul class="social-links-list">
                        <li><a href="https://www.linkedin.com/company/l&t-infotech" target="_blank"><img src="/wp-content/themes/breakaway/assests/img/icon-linkedin.png" alt=" "></a></li>
                        <li><a href="https://www.facebook.com/LarsenToubroInfotech" target="_blank"><img src="/wp-content/themes/breakaway/assests/img/icon-facebook.png" alt=" "></a></li>
                        <li><a href="https://twitter.com/LTI_Global" target="_blank"><img src="/wp-content/themes/breakaway/assests/img/icon-twitter.png" alt=" "></a></li>
                        <li><a href="https://www.youtube.com/user/LarsenToubroInfotech" target="_blank"><img src="/wp-content/themes/breakaway/assests/img/icon-youtube.png" alt=" "></a></li>
                    </ul>
                    <?php wp_nav_menu(array ('theme_location' => 'footer-menu','menu_class' => 'cmp-links-list'));?>
                </div>
                <a href="https://www.larsentoubro.com/" target="_blank"><img class="logo-alt-group" src="/wp-content/themes/breakaway/assests/img/logo-alt-group.png" alt=" "></a>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>

    <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-68217349-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
          gtag('config', 'UA-68217349-1');
        </script>
        <script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>

    <script>
        window.cookieconsent.initialise({
          "palette": {
            "popup": {
              "background": "#edeff5",
              "text": "#333"
            },
            "button": {
              "background": "#CC3055"
            }
          },
          "content": {
            "message": "By continuing to browse the site, you agree to our use of cookies.",
            "link": "Cookie Policy",
            "href": "https://www.lntinfotech.com/cookie-policy/"
          }
        });
    </script>
</body>
</html>

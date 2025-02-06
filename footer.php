<footer class="footer">
                <div class="footer-container row">
                    <?php if ( is_active_sidebar( 'footer-widget-area' ) ) : ?>
                        <div class="footer-contents col-md-4">
                            <?php dynamic_sidebar( 'footer-widget-area' ); ?>
                        </div>
                    <?php endif; ?>
                    <?php if ( is_active_sidebar( 'footer-widget-area-2' ) ) : ?>
                        <div class="footer-contents col-md-4">
                            <?php dynamic_sidebar( 'footer-widget-area-2' ); ?>
                        </div>
                    <?php endif; ?>
                    <?php if ( is_active_sidebar( 'footer-widget-area-3' ) ) : ?>
                        <div class="footer-contents col-md-4">
                            <?php dynamic_sidebar( 'footer-widget-area-3' ); ?>
                        </div>
                    <?php endif; ?>
                </div>
                <p class="footer-Copyright">
                    <small>&copy; 2025 Green Horizon Inc. </small>
                </p>
             </footer>
        </div>
    </body>
</html>
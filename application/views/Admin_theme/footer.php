<!-- Footer -->
<div class="footer text-muted">
    &copy; 2015. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
</div>
<?php if (isset($glosary)): ?>
    <!-- glosary crud js file -->
    <?php foreach ($glosary->js_files as $file): ?>

        <script src="<?php echo $file; ?>"></script>
    <?php endforeach; ?>
<?php endif; ?>
<!-- /footer -->
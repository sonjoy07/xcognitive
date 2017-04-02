<!-- Footer -->
<div class="footer text-muted">
    &copy; 2017. <a href="">Xcognative</a> by <a href="<?php echo $this->config->config['DEVELOPER']['website']; ?>" target="_blank"><?php echo $this->config->config['DEVELOPER']['name']; ?></a>
</div>
<!-- Theme JS files -->
<script type="text/javascript" src="<?=$theme_asset_url?>assets/js/plugins/visualization/d3/d3.min.js"></script>
<script type="text/javascript" src="<?=$theme_asset_url?>assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
<script type="text/javascript" src="<?=$theme_asset_url?>assets/js/plugins/forms/styling/switchery.min.js"></script>
<script type="text/javascript" src="<?=$theme_asset_url?>assets/js/plugins/forms/styling/uniform.min.js"></script>
<script type="text/javascript" src="<?=$theme_asset_url?>assets/js/plugins/ui/moment/moment.min.js"></script>
<script type="text/javascript" src="<?=$theme_asset_url?>assets/js/plugins/pickers/daterangepicker.js"></script>

<script type="text/javascript" src="<?=$theme_asset_url?>assets/js/core/app.js"></script>
<!--<script type="text/javascript" src="<?=$theme_asset_url?>assets/js/pages/dashboard.js"></script>-->
<script type="text/javascript" src="<?=$theme_asset_url?>/assets/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="<?=$theme_asset_url?>/assets/ckfinder/ckfinder.js"></script>
<!-- Theme JS files -->
<script type="text/javascript" src="<?=$theme_asset_url?>assets/js/plugins/tables/datatables/datatables.min.js"></script>
<!--	<script type="text/javascript" src="--><?//=$theme_asset_url?><!--assets/js/plugins/forms/selects/select2.min.js"></script>-->

<script type="text/javascript" src="<?=$theme_asset_url?>assets/js/core/app.js"></script>
<!--<script type="text/javascript" src="<?=$theme_asset_url?>assets/js/pages/datatables_basic.js"></script>-->
<?php if (isset($glosary)): ?>
    <!-- glosary crud js file -->
    <?php foreach ($glosary->js_files as $file): ?>
        <script src="<?php echo $file; ?>"></script>
    <?php endforeach; ?>
<?php endif; ?>
<!-- /footer -->
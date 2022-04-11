<div class="container d-flex flex-column flex-lg-row align-items-center">
    <?php 
    includeFile('assets/icons/' . $iconName .'.svg', array(''))
    ?>
    <div class="text-lg-start text-center">
        <h6 class="text-white px-4"><?php echo $name ?></h6>
        <p class="text-white px-4 fw-light"><?php echo $description ?></p>
    </div>
</div>
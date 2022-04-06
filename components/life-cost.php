<div class="container d-flex flex-column align-items-center">
    <?php 
    includeFile('assets/icons/' . $iconName .'.svg', array(''))
    ?>
    <h6 class="text-white"><?php echo $name ?></h6>
    <p class="text-white fw-light"><?php echo $description ?></p>
</div>
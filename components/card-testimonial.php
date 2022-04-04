<div class="card-testimonial border-0 p-0">
    <div class="person-profile-testimonial d-flex flex-column align-items-center">
        <span class="circle-img mb-2">
            <img class="person-img" src="<?php echo $directory ?>"/>
        </span>

        <h6 class="fw-bold"><?php echo $person ?></h6>

        <div class="d-flex">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/star.svg" />
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/star.svg" />
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/star.svg" />
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/star.svg" />
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/star.svg" />
        </div>
    </div>
    
    <p class="testimonial-text text-center shadow rounded-3 d-flex align-items-center mx-3 my-4 px-3 fw-light">
        <?php echo '"'.$text.'"' ?>
    </p>
</div>
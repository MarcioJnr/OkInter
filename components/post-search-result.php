<div class="d-flex flex-column flex-lg-row post mb-3">
    <div class="thumb-section p-3 mb-3">
        <span class="thumb">
            <img class="w-100" src="<?php echo $srcImg ?>" alt="<?php echo $title ?>"/> 
        </span>
    </div>

    <div class="info-section text-center d-lg-flex flex-column justify-content-center text-lg-start px-3">
        <h3 class="mb-2"><?php echo $title ?></h3>
        <p class="mb-4"><?php echo $description ?></p>

        <a href="<?php echo $href ?>" class="w-100" id="link-view-more">
            <button class="btn text-white shadow w-25 w-lg-50 mb-3">
                VER MAIS
            </button>
        </a>
    </div>
</div>
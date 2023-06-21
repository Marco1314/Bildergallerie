<div class="image-gallery">

    <?php foreach($images AS $image): ?>
        <figure class="image-gallery-item">
            <img class="image-gallery-image" src="<?php echo $image->source; ?>" />
            <figcaption><?php echo $image->title; ?></figcaption>
        </figure>
    <?php endforeach; ?>
</div>
<?php if (!empty($args)) : ?>
    <div class="downloads-item dl-pdt-js <?php echo $args['cls']; ?>">
        <div class="downloads-item-img">
            <?php echo $args['image']; ?>

            <button class="downloads-item-btn button-reset">
                <?php echo $args['icon']; ?>
            </button>
        </div>

        <h3 class="downloads-item-title"><?php echo esc_html($args['title']); ?></h3>

        <div class="downloads-item-descr">
            <?php echo $args['descr']; ?>
        </div>
    </div>
<?php endif; ?>
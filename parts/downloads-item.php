<?php if (!empty($args)) : ?>
    <div class="downloads-item dl-pdt-js <?php echo esc_attr($args['cls']); ?>">
        <div class="downloads-item-img">
            <?php echo $args['image']; ?>

            <?php
            $cls = '';
            if ($args['url']) {
                $cls = 'dl-play-js';
                $separator = str_contains($args['url'], '?') ? '&' : '?';
                $args['url'] .= $separator . 'autoplay=1&dnt=1';
            }
            ?>

            <?php if (!$args['cart_url']) : ?>
                <button class="downloads-item-btn button-reset <?php echo esc_attr($cls); ?>" data-url="<?php echo esc_attr($args['url']); ?>">
                    <a href="<?php echo esc_attr($args['cart_url']); ?>"></a><?php echo $args['icon']; ?></a>
                </button>
            <?php else : ?>
                <a href="<?php echo esc_attr($args['cart_url']); ?>" class="downloads-item-btn button-reset" data-url="">
                    <?php echo $args['icon']; ?>
                </a>
            <?php endif; ?>

        </div>

        <?php //var_dump($args['cart_url']); 
        ?>

        <h3 class="downloads-item-title"><?php echo esc_html($args['title']); ?></h3>

        <div class="downloads-item-descr">
            <?php echo $args['descr']; ?>
        </div>
    </div>
<?php endif; ?>
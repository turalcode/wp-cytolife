<?php

add_action('init', function () {
    if (!get_role('medic')) {
        add_role(
            'medic',
            'Медик',
            array(
                'read' => true
            )
        );
    }
});

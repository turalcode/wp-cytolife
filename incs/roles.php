<?php

add_action('init', function () {
    if (!get_role('medic')) {
        add_role(
            CYTOLIFE_ROLE_MEDIC,
            'Медик',
            array(
                'read' => true
            )
        );
    }
});

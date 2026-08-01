<?php

add_action('init', function () {
    if (!get_role(CYTOLIFE_ROLE_MEDIC)) {
        add_role(
            CYTOLIFE_ROLE_MEDIC,
            'Медик',
            array(
                'read' => true
            )
        );
    }

    if (!get_role(CYTOLIFE_ROLE_CST)) {
        add_role(
            CYTOLIFE_ROLE_CST,
            'Косметолог',
            array(
                'read' => true
            )
        );
    }
});

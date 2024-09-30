<?php

namespace GeminiLabs\SiteReviews\Hooks;

use GeminiLabs\SiteReviews\Controllers\MetaboxController;

class MetaboxHooks extends AbstractHooks
{
    public function run(): void
    {
        $this->hook(MetaboxController::class, [
            ['filterFieldOrder', 'site-reviews/metabox-form/fields', 30],
            ['registerMetaBoxes', "add_meta_boxes_{$this->type}"],
            ['removeMetaBoxes', 'do_meta_boxes'],
            ['renderPinnedAction', 'post_submitbox_misc_actions'],
        ]);
    }
}

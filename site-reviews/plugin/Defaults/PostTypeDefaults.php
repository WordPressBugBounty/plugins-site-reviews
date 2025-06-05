<?php

namespace GeminiLabs\SiteReviews\Defaults;

use GeminiLabs\SiteReviews\Controllers\Api\Version1\RestReviewController;

class PostTypeDefaults extends DefaultsAbstract
{
    protected function defaults(): array
    {
        return [
            'capabilities' => [
                'create_posts' => sprintf('create_%ss', glsr()->post_type),
                'respond_to_posts' => sprintf('respond_to_%ss', glsr()->post_type),
                'respond_to_others_posts' => sprintf('respond_to_others_%ss', glsr()->post_type),
            ],
            'capability_type' => glsr()->post_type,
            'exclude_from_search' => true,
            'has_archive' => false,
            'hierarchical' => false,
            'labels' => [],
            'menu_icon' => "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA1MCA1MCIgZmlsbD0iI2E3YWFhZCI+PHBhdGggZD0iTTE0LjExNCA0LjAwMUwzOS41ODggNGMyLjIyOSAwIDMuMDM3LjIzMiAzLjg1Mi42NjhzMS40NTQgMS4wNzUgMS44OSAxLjg5bC4xMTQuMjIzYy4zNDQuNzEzLjUzNCAxLjUxOC41NTMgMy4zMzNsLjAwMSAyNS40NzZjMCAyLjIyOS0uMjMyIDMuMDM3LS42NjggMy44NTItLjIzMi40MzQtLjUyMy44MTktLjg2NiAxLjE0OWwtNS44NzQgNS44NzRjLS4zMy4zNDQtLjcxNS42MzQtMS4xNDkuODY2LS44MTUuNDM2LTEuNjIzLjY2OC0zLjg1Mi42NjhIOC40MWwtLjU3NC0uMDA2Yy0xLjgwMi0uMDM4LTIuNTM3LS4yNjYtMy4yNzgtLjY2MmwtLjIzOS0uMTM3Yy0uNTY0LS4zNDUtMS4wMzUtLjc5NS0xLjQwMi0xLjM0bDUuMjg0LTUuMjg0Yy4zOTQuNTQ2Ljg3OSAxLjAwOCAxLjQ0NyAxLjM3N2wtMy42NzQgMy42NzVjLjUxOS4yNDUgMS4xMTkuMzc1IDIuNTE0LjM3NWgyNS4wMjVjMS41NiAwIDIuMTI2LS4xNjIgMi42OTYtLjQ2N2EzLjIxIDMuMjEgMCAwIDAgLjc3OS0uNTgxbDQuOTUxLTQuOTUzTDE0LjQ4NyA0MGMtMS41NiAwLTIuMTI2LS4xNjItMi42OTYtLjQ2N2EzLjE4IDMuMTggMCAwIDEtMS4zMjMtMS4zMjNsLS4xMDItLjIwM2MtLjIyMy0uNDgtLjM0OC0xLjAzNy0uMzY0LTIuMjI4TDEwIDguMDZsLTcuOTk4IDcuOTk0Yy4wMjQtMS45NjIuMjU0LTIuNzI2LjY2Ni0zLjQ5Ni4yMzItLjQzNC41MjMtLjgxOS44NjYtMS4xNDlsNS44NzQtNS44NzRjLjMzLS4zNDQuNzE1LS42MzQgMS4xNDktLjg2NmwuMjIzLS4xMTRjLjcxMy0uMzQ0IDEuNTE4LS41MzQgMy4zMzMtLjU1M2gwek0yIDQwLjA2MWw1LTQuOTk5di4yNDdjMCAxLjA0Ni4wNDMgMS44MzIuMTI2IDIuNDU5TDIuMDMzIDQyLjg2bC0uMDIxLS40NjUtLjAxMS0uNTIxTDIgNDAuMDYxem01LTExLjcwN3YyLjgyOWwtNSA0Ljk5OHYtMi44MjhsNS00Ljk5OXpNMTguNSAyNS41SDE2YS41LjUgMCAwIDAtLjUuNXYyLjVhLjUuNSAwIDAgMCAuNS41aDIuNGEuNi42IDAgMCAxIC42LjZ2MS45YS41LjUgMCAwIDAgLjUuNWgxN2EuNS41IDAgMCAwIC41LS41di0xLjlhLjYuNiAwIDAgMSAuNi0uNkg0MGEuNS41IDAgMCAwIC41LS41VjI2YS41LjUgMCAwIDAtLjUtLjVoLTIuNWEuNS41IDAgMCAwLS41LjV2Mi40YS42LjYgMCAwIDEtLjYuNkgxOS42YS42LjYgMCAwIDEtLjYtLjZWMjZhLjUuNSAwIDAgMC0uNS0uNXpNNyAyMS42NDZ2Mi44MjlsLTUgNC45OTh2LTIuODI4bDUtNC45OTl6bTAtNi43MDh2Mi44MjhsLTUgNC45OTl2LTIuODI4bDUtNC45OTl6TTM0IDEyaC0yLjVhLjUuNSAwIDAgMC0uNS41djlhLjUuNSAwIDAgMCAuNS41SDM0YS41LjUgMCAwIDAgLjUtLjV2LTlhLjUuNSAwIDAgMC0uNS0uNXptLTkuNSAwSDIyYS41LjUgMCAwIDAtLjUuNXY5YS41LjUgMCAwIDAgLjUuNWgyLjVhLjUuNSAwIDAgMCAuNS0uNXYtOWEuNS41IDAgMCAwLS41LS41eiIvPjwvc3ZnPg==",
            'menu_position' => 25,
            'map_meta_cap' => true,
            'public' => false,
            'query_var' => true,
            'rest_controller_class' => RestReviewController::class,
            'rewrite' => ['with_front' => false],
            'show_in_menu' => true,
            'show_in_rest' => true,
            'show_ui' => true,
            'supports' => ['author', 'title', 'editor', 'revisions'],
            'taxonomies' => [],
        ];
    }
}

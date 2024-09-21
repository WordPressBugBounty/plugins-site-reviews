<?php

namespace GeminiLabs\SiteReviews\Modules\Html\FieldElements;

class Email extends Text
{
    public function required(): array
    {
        return [
            'validation' => 'email',
        ];
    }
}

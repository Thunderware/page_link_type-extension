<?php

use Illuminate\Database\Schema\Blueprint;
use Anomaly\Streams\Platform\Database\Migration\Migration;

class ThunderwareExtensionPageLinkTypeCreatePageLinkTypeFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'title'       => 'anomaly.field_type.text',
        'url'         => 'anomaly.field_type.text',
        'description' => 'anomaly.field_type.textarea'
    ];

}

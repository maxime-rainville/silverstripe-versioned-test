<?php
namespace VersionnedTest;
use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

class BAA extends DataObject
{
    use MagicTrait;

    private static $extensions = [
        Versioned::class,
    ];

    private static $singular_name = 'Versioned Owned Child of Versioned Owned Child';

    private static $has_one = array(
        'Parent' => BA::class
        // 'Parent' => DataObject::class
    );

    private static $table_name = 'BAA';


}

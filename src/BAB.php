<?php
namespace VersionedTest;
use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

class BAB extends DataObject
{
    use MagicTrait;

    private static $extensions = [
        Versioned::class,
    ];

    private static $singular_name = 'Versioned Unowned Child of Versioned Owned Child';

    private static $has_one = array(
        'Parent' => BA::class
    );

    private static $table_name = 'BAB';


}

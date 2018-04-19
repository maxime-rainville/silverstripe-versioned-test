<?php
namespace VersionnedTest;
use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

class BCB extends DataObject
{
    use MagicTrait;

    private static $extensions = [
        Versioned::class,
    ];

    private static $singular_name = 'Versioned Unowned Child of Unversioned Owned Child';

    private static $has_one = array(
        'Parent' => BC::class
    );

    private static $table_name = 'BCB';


}

<?php
namespace VersionedTest;
use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

class BCA extends DataObject
{
    use MagicTrait;

    private static $extensions = [
        Versioned::class,
    ];

    private static $singular_name = 'Versioned Owned Child of Unversioned Owned Child';

    private static $has_one = array(
        'Parent' => BC::class
    );

    private static $table_name = 'BCA';


}

<?php
namespace VersionedTest;
use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

class BD extends DataObject
{
    use MagicTrait;

    private static $singular_name = 'Unversioned Unowned Child';

    private static $has_one = array(
        'Parent' => B::class
    );

    private static $table_name = 'BD';


}

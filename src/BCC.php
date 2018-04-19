<?php
namespace VersionnedTest;
use SilverStripe\ORM\DataObject;

class BCC extends DataObject
{
    use MagicTrait;

    private static $singular_name = 'Unversioned owned Child of Unversioned Owned Child';

    private static $has_one = array(
        'Parent' => BC::class
    );

    private static $table_name = 'BCC';


}

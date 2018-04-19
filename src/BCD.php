<?php
namespace VersionedTest;
use SilverStripe\ORM\DataObject;

class BCD extends DataObject
{
    use MagicTrait;


    private static $singular_name = 'Unversioned Unowned Child of UnVersioned Owned Child';

    private static $has_one = array(
        'Parent' => BC::class
    );

    private static $table_name = 'BCD';


}

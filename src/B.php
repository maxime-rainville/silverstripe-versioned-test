<?php
namespace VersionnedTest;
use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;

class B extends DataObject
{
    use MagicTrait;

    private static $extensions = [
        Versioned::class,
    ];

    private static $singular_name = 'Versioned unowned parent';

    private static $owns = [
        'BAs',
        'BCs',
    ];



    private static $has_many = array(
        'BAs' => BA::class,
        'BBs' => BB::class,
        'BCs' => BC::class,
        'BDs' => BD::class,
    );

    private static $table_name = 'B';

    public function requireDefaultRecords()
    {
        parent::requireDefaultRecords();

        $b = B::create(['Title' => 'Versionned parent']);
        $b->write();

        $ba = BA::create(['ParentID' => $b->ID, 'Title' => 'Own and Versioned child']);
        $ba->write();

        $bb = BB::create(['ParentID' => $b->ID, 'Title' => 'Unown and Versioned child']);
        $bb->write();

        $bc = BC::create(['ParentID' => $b->ID, 'Title' => 'Own and Unversioned child']);
        $bc->write();

        $bd = BD::create(['ParentID' => $b->ID, 'Title' => 'Unown and Unversioned child']);
        $bd->write();

        $baa = BAA::create(['Title' => 'Own and Versioned grand-child']);
        $baa->write();
        $ba->BAAs()->add($baa);

        $bab = BAB::create(['ParentID' => $ba->ID, 'Title' => 'Unown and Versioned grand-child']);
        $bab->write();
        $bac = BAC::create(['ParentID' => $ba->ID, 'Title' => 'Own and Unversioned grand-child']);
        $bac->write();
        $bad = BAD::create(['ParentID' => $ba->ID, 'Title' => 'Unown and Unversioned grand-child']);
        $bad->write();

        $bca = BCA::create(['ParentID' => $bc->ID, 'Title' => 'Own and Versioned grand-child']);
        $bca->write();
        $bcb = BCB::create(['ParentID' => $bc->ID, 'Title' => 'Unown and Versioned grand-child']);
        $bcb->write();
        $bcc = BCC::create(['ParentID' => $bc->ID, 'Title' => 'Own and Unversioned grand-child']);
        $bcc->write();
        $bcd = BCD::create(['ParentID' => $bc->ID, 'Title' => 'Unown and Unversioned grand-child']);
        $bcd->write();

        sleep(2);

        $b->copyVersionToStage(Versioned::DRAFT, Versioned::LIVE);
        $ba->copyVersionToStage(Versioned::DRAFT, Versioned::LIVE);
        $bb->copyVersionToStage(Versioned::DRAFT, Versioned::LIVE);
        $baa->copyVersionToStage(Versioned::DRAFT, Versioned::LIVE);
        $bab->copyVersionToStage(Versioned::DRAFT, Versioned::LIVE);
        $bca->copyVersionToStage(Versioned::DRAFT, Versioned::LIVE);
        $bcb->copyVersionToStage(Versioned::DRAFT, Versioned::LIVE);


    }


}

<?php

namespace VersionedTest;

use SilverStripe\AssetAdmin\Helper\ImageThumbnailHelper;
use SilverStripe\ORM\DB;
use SilverStripe\Assets\FileMigrationHelper;
use SilverStripe\Dev\BuildTask;

/**
 * Migrates all 3.x file dataobjects to use the new DBFile field.
 */
class RollbackTask extends BuildTask
{

    private static $segment = 'Rollback';

    protected $title = 'Rollback a B Object';

    protected $description
        = 'Rollback a B Object';

    public function run($request)
    {
        B::get()->byID($request->getVar('ID'))->rollbackRecursive($request->getVar('To'));
    }
}

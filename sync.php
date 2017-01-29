<?php
namespace VMSync;

/**
 * Syncs local git changes to remote (S)FTP site bby finding all files changed
 * since the last commit SHA recorded on server
 */
class Sync
{
    /** current working directory */
    public $cwd;
    /** location of commit file */
    public $commit_file;
    /** files to back up */
    public $backups;
    /** files to ignore */
    public $ignoredFiles;
    /** folders to ignore */
    public $ignoredFolders;
    /** If true, progress of files being synced will be printed during operations */
    public $showProgress;

    /**
    * Construct a new object to sync all changed files from current repository
    * @param Site[] $sites Array of sites to sync to
    * @param boolean $showProgress TRUE if progress bar is to be displayed
    * @throws InvalidArgumentException if the provided argument is not of type 'array'.
    */
    public function __construct($sites, $showProgress = false)
    {
        if (!is_array($sites)) {
            throw new InvalidArgumentException("An array of Sites must be provided");
        }
    }
}

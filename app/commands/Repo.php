<?php

namespace App\Command;


use Cz\Git\GitException;
use Cz\Git\GitRepository;


class Repo extends \Kernel\Command
{
    public function clone(){
        try{
            GitRepository::cloneRepository(
                env_get('GIT_SRC_REPO'),
                repos_path(env_get('GIT_SRC_REPO_NAME'))
            );
        }
        catch(GitException $e){
            if(strrpos($e->getMessage(),'Repo already exists') === false){
                $this->error("{$e->getFile()} (line {$e->getLine()}): {$e->getMessage()}");
            }
        }
        $this->comment('Git Clone Done');
    }
}
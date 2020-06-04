<?php


namespace App\Controllers;

use Cz\Git\GitException;
use Cz\Git\GitRepository;
use Kernel\Controller;

class AdminController extends Controller
{
    protected function get_index()
    {
        return view("admin.index");
    }

    protected function get_clone()
    {
        try{
            GitRepository::cloneRepository(
                env_get('GIT_SRC_REPO'),
                repos_dir(env_get('GIT_SRC_REPO_NAME'))
            );
        }
        catch(GitException $e){
            if(strrpos($e->getMessage(),'Repo already exists') === false){
                dd($e->getFile(),$e->getLine(),$e->getMessage());
            }
        }
        return "Git Clone Done";
    }
}
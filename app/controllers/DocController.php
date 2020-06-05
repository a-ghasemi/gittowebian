<?php


namespace App\Controllers;

use Kernel\Controller;

class DocController extends Controller
{
    protected function get_index(){
        return md_show(repos_path(env_get('GIT_SRC_REPO_NAME'))."/index.md");
    }
    protected function get_readme(){
        return md_show(repos_path(env_get('GIT_SRC_REPO_NAME'))."/readme.md");
    }
}
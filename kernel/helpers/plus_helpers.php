<?php

function repos_path($dir = '')
{
    return storage_path('repos') . DIRECTORY_SEPARATOR . $dir;
}

function md_show($md_path)
{
    return \Kernel\MarkDown::show($md_path);
}

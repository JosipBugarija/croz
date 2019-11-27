<?php

function classActivePath($segment, $value)
{
    if(!is_array($value)) {
        return Request::segment($segment) == $value ? ' menu-open' : '';
    }
    foreach ($value as $v) {
        if(Request::segment($segment) == $v) return ' menu-open';
    }
    return '';
}

function classActiveSegment($segment, $value)
{
    if(!is_array($value)) {
        return Request::segment($segment) == $value ? 'active' : '';
    }
    foreach ($value as $v) {
        if(Request::segment($segment) == $v) return 'active';
    }
    return '';
}

function getGitHash()
{
    $commitHash = trim(exec('git log --pretty="%h" -n1 HEAD'));
    $commitDate = new \DateTime(trim(exec('git log -n1 --pretty=%ci HEAD')));

    $commitDate->setTimezone(new \DateTimeZone('Europe/Zagreb'));
    return $commitDate->format('j M, Y, G:m');
}
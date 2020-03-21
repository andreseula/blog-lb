<?php

function setActive($routeName)
{
    return request()->routeIS('routeName') ? 'active' :'';
}

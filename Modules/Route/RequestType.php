<?php

namespace Modules\Route;

abstract class RequestType {
    const All    = 'All';
    const Get    = 'Get';
    const Post   = 'Post';
    const Put    = 'Put';
    const Patch  = 'Patch';
    const Delete = 'Delete';
}
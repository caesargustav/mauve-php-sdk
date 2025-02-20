<?php

arch()
    ->expect('CaesarGustav\MauveApi\Connectors')
    ->toExtend(\Saloon\Http\Connector::class)
    ->toHaveSuffix('Connector');

arch()
    ->expect('CaesarGustav\MauveApi\Requests')
    ->toExtend(\Saloon\Http\Request::class)
    ->toHaveSuffix('Request');

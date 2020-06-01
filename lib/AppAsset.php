<?php

namespace OpenmeetingsAssets\OMAssets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class OMAssets extends AssetBundle
{

    // public $sourcePath = '@app/components/assets/main/assets'; 
    public $sourcePath = '@vendor/erobl/node-openmeetings/lib'; 
   
    public $js = [
        "openmeetings.js","room.js","user.js"
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
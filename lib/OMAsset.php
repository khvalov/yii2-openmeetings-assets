<?php

namespace khvalov\OpenmeetingsAssets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class OMAsset extends AssetBundle
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

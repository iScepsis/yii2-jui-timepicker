<?php
/**
 * Created by PhpStorm.
 * User: scepsis
 * Date: 1/18/19
 * Time: 4:52 PM
 */

namespace pheme\jui;

use yii\web\AssetBundle;

class DatepickerLanguageAsset extends AssetBundle
{
    public $sourcePath = '@bower/jquery-ui';
    /**
     * @var boolean whether to automatically generate the needed language js files.
     * If this is true, the language js files will be determined based on the actual usage of [[DatePicker]]
     * and its language settings. If this is false, you should explicitly specify the language js files via [[js]].
     */
    public $autoGenerate = true;

    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\jui\JuiAsset',
        'pheme\jui\DateTimePickerAsset'
    ];
}
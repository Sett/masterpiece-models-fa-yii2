<?php
namespace funcraft\masterpiece\fa\yii\models;

use funcraft\masterpiece\interfaces\IMasterpiece;
use funcraft\masterpiece\models\MasterpieceTrait;
use yii\db\ActiveRecord;

/**
 * Class Masterpiece
 * @package funcraft\masterpiece\fa\yii\models
 */
class Masterpiece extends ActiveRecord implements IMasterpiece
{
    use MasterpieceTrait;
}

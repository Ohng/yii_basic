<?php
/**
 * This is the model class for table "countries".
 *
 * @copyright   Copyright (C) 2016 GMV Insyen AG, Münchener Straße 20, 82234 Weßling, Germany
 * @link        http://www.insyen.com
 * @author      Thomas Geppert, thomas.geppert@insyen.com
 * @package     GART
 *
 * @license     This software is the confidential and proprietary information of INSYEN. ("Confidential Information").
 *              You shall not disclose such Confidential Information and shall use it only in accordance with the
 *              terms of the license agreement you entered into with INSYEN.
 */
 
namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\db\Expression;
use yii\data\ActiveDataProvider;

class Countries extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'countries';
    }
}
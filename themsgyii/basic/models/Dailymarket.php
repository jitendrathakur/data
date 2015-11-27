<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dailymarket".
 *
 * @property string $state
 * @property string $district
 * @property string $market
 * @property string $commodity
 * @property string $variety
 * @property string $arrival_date
 * @property double $min_price
 * @property double $max_price
 * @property double $modal_price
 */
class Dailymarket extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dailymarket';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['state', 'district', 'market', 'commodity', 'variety', 'arrival_date', 'min_price', 'max_price', 'modal_price'], 'required'],
            [['min_price', 'max_price', 'modal_price'], 'number'],
            [['state', 'district', 'market', 'commodity', 'variety', 'arrival_date'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'state' => 'State',
            'district' => 'District',
            'market' => 'Market',
            'commodity' => 'Commodity',
            'variety' => 'Variety',
            'arrival_date' => 'Arrival Date',
            'min_price' => 'Min Price',
            'max_price' => 'Max Price',
            'modal_price' => 'Modal Price',
        ];
    }
}

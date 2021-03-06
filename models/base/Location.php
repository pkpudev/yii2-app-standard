<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace app\models\base;

use Yii;

/**
 * This is the base-model class for table "com_location".
 *
 * @property integer $id
 * @property string $location_code
 * @property string $location_name
 * @property string $penduduk
 * @property string $pemilih
 * @property integer $lev
 * @property string $kdpeta
 * @property string $kddn
 * @property integer $parent_id
 * @property string $postal_code
 * @property string $map_point
 * @property double $longitude
 * @property double $latitude
 * @property string $aliasModel
 */
abstract class Location extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'com_location';
    }


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'lev', 'parent_id'], 'default', 'value' => null],
            [['id', 'lev', 'parent_id'], 'integer'],
            [['map_point'], 'string'],
            [['longitude', 'latitude'], 'number'],
            [['location_code'], 'string', 'max' => 12],
            [['location_name'], 'string', 'max' => 50],
            [['penduduk', 'pemilih'], 'string', 'max' => 255],
            [['kdpeta', 'kddn'], 'string', 'max' => 10],
            [['postal_code'], 'string', 'max' => 7],
            [['location_code'], 'unique'],
            [['id'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'location_code' => 'Location Code',
            'location_name' => 'Location Name',
            'penduduk' => 'Penduduk',
            'pemilih' => 'Pemilih',
            'lev' => 'Lev',
            'kdpeta' => 'Kdpeta',
            'kddn' => 'Kddn',
            'parent_id' => 'Parent ID',
            'postal_code' => 'Postal Code',
            'map_point' => 'Map Point',
            'longitude' => 'Longitude',
            'latitude' => 'Latitude',
        ];
    }
}

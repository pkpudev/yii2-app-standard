<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace app\models\base;

use Yii;

/**
 * This is the base-model class for table "public.company".
 *
 * @property integer $id
 * @property string $company_name
 * @property string $guid
 * @property string $aliasModel
 */
abstract class Company extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'public.company';
    }


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'company_name'], 'required'],
            [['id'], 'integer'],
            [['guid'], 'string'],
            [['company_name'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'company_name' => 'Company Name',
            'guid' => 'Guid',
        ];
    }
}

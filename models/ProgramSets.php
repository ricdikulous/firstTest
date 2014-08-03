<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "programSets".
 *
 * @property integer $program_id_fk
 * @property integer $sets_id_fk
 * @property integer $day
 * @property integer $sets_order
 * @property integer $progression_order
 *
 * @property Programs $programIdFk
 * @property Sets $setsIdFk
 */
class ProgramSets extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'programSets';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['program_id_fk', 'sets_id_fk', 'day', 'sets_order', 'progression_order'], 'required'],
            [['program_id_fk', 'sets_id_fk', 'day', 'sets_order', 'progression_order'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'program_id_fk' => 'Program Id Fk',
            'sets_id_fk' => 'Sets Id Fk',
            'day' => 'Day',
            'sets_order' => 'Sets Order',
            'progression_order' => 'Progression Order',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProgramIdFk()
    {
        return $this->hasOne(Programs::className(), ['program_id_pk' => 'program_id_fk']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSetsIdFk()
    {
        return $this->hasOne(Sets::className(), ['sets_id_pk' => 'sets_id_fk']);
    }
}

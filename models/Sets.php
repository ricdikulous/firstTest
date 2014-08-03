<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sets".
 *
 * @property integer $sets_id_pk
 * @property integer $lift_id_fk
 * @property integer $reps
 * @property integer $sets
 * @property integer $intensity
 * @property integer $rest
 * @property string $type
 *
 * @property ProgramSets[] $programSets
 * @property Lifts $liftIdFk
 */
class Sets extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sets';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['lift_id_fk'], 'required'],
            [['lift_id_fk', 'reps', 'sets', 'intensity', 'rest'], 'integer'],
            [['type'], 'string', 'max' => 1]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sets_id_pk' => 'Sets Id Pk',
            'lift_id_fk' => 'Lift Id Fk',
            'reps' => 'Reps',
            'sets' => 'Sets',
            'intensity' => 'Intensity',
            'rest' => 'Rest',
            'type' => 'Type',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProgramSets()
    {
        return $this->hasMany(ProgramSets::className(), ['sets_id_fk' => 'sets_id_pk']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLiftIdFk()
    {
        return $this->hasOne(Lifts::className(), ['lift_id_pk' => 'lift_id_fk']);
    }
}

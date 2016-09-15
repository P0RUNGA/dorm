<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "homework".
 *
 * @property integer $id
 * @property string $project
 * @property string $description
 * @property string $date
 */
class Homework extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'homework';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['project','description'],'required'],
            [['date'], 'safe'],
            [['project'], 'string', 'max' => 32],
            [['description'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'project' => 'Project',
            'description' => 'Description',
            'date' => 'Date',
        ];
    }
}

<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "followers".
 *
 * @property int $id
 * @property string|null $email
 * @property string|null $name
 * @property string|null $birthDate
 * @property int|null $sex
 */
class Followers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'followers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['birthDate'], 'safe'],
            [['sex'], 'integer'],
            [['email', 'name'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'email' => 'Email',
            'name' => 'Name',
            'birthDate' => 'Birth Date',
            'sex' => 'Sex',
        ];
    }

    /**
     * {@inheritdoc}
     * @return FollowersQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new FollowersQuery(get_called_class());
    }
}

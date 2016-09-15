<?php

namespace app\models;

class User extends \yii\db\ActiveRecord  implements \yii\web\IdentityInterface
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'domitory';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['score', 'name'], 'safe'],
            [['name'], 'string', 'max' => 32],
            [['password'], 'string', 'max' => 40],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'name' => '姓名',
            'password' => '密码',
            'score' => '成绩',
        ];
    }

    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        return static::findOne($id);
        /*return isset(self::$users[$id]) ? new static(self::$users[$id]) : null;*/
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        /*foreach (self::$users as $user) {
            if ($user['accessToken'] === $token) {
                return new static($user);
            }
        }

        return null;*/
    }

    /**
     * Finds user by username
     *
     * @param  string      $username
     * @return static|null
     */
    public static function findByUsername($name)
    {
        $user = User::find()
            ->where(['name' => $name])
            ->asArray()
            ->one();
 
            if($user){
            return new static($user);
        }
 
        return null;
        /*foreach (self::$users as $user) {
            if (strcasecmp($user['name'], $username) === 0) {
                return new static($user);
            }
        }

        return null;*/
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        /*return $this->authKey;*/
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        /*return $this->authKey === $authKey;*/
    }

    /**
     * Validates password
     *
     * @param  string  $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return $this->password === sha1($password);
    }
}

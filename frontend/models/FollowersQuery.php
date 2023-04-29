<?php

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[Followers]].
 *
 * @see Followers
 */
class FollowersQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Followers[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Followers|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}

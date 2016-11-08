<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[StaffMemberContacts]].
 *
 * @see StaffMemberContacts
 */
class StaffMemberContactsQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return StaffMemberContacts[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return StaffMemberContacts|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[ClassSubjectHeader]].
 *
 * @see ClassSubjectHeader
 */
class ClassSubjectHeaderQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return ClassSubjectHeader[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return ClassSubjectHeader|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
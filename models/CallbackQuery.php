<?php

namespace ignatenkovnikita\callback\models;

use yii\db\ActiveQuery;

/**
* This is the ActiveQuery class for [[\common\models\generated\models\Callback]].
*
* @see ignatenkovnikita\callback\models\Callback
*/
class CallbackQuery extends ActiveQuery
{
/*public function active()
{
return $this->andWhere('[[status]]=1');
}*/

/**
* @inheritdoc
* @return ignatenkovnikita\callback\models\Callback[]|array
*/
public function all($db = null)
{
return parent::all($db);
}

/**
* @inheritdoc
* @return ignatenkovnikita\callback\models\Callback|array|null
*/
public function one($db = null)
{
return parent::one($db);
}
}

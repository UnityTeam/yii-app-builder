<?php
Yii::setPathOfAlias('extra', realpath(dirname(__DIR__) . "/../../share/extensions"));

return array(
	'application.models.*',
    'application.components.*',
    'extra.YiiMongoDbSuite.*',
    'extra.YiiMongoDbSuite.components.*', // directmongosuite

);
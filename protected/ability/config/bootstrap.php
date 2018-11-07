<?php

/**
 * register path aliases
 */

Yii::setAlias('@root', realpath(__DIR__ . '/../../../'));
Yii::setAlias('@protected', '@root/protected');
Yii::setAlias('@ability', '@protected/ability');
Yii::setAlias('@config', '@protected/config');
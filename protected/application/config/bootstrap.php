<?php

/**
 * register path aliases
 */

Yii::setAlias('@root', realpath(__DIR__ . '/../../../'));
Yii::setAlias('@protected', '@root/protected');
Yii::setAlias('@application', '@protected/application');
Yii::setAlias('@config', '@protected/config');
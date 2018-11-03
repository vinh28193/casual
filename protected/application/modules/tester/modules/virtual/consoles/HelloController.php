<?php
namespace application\modules\tester\modules\virtual\consoles;

use yii\console\Controller;
use yii\helpers\Console;
class HelloController extends Controller
{
    public $color = true;

    public function actionIndex(){
        $this->stdout("module virtual console is registered",Console::FG_GREEN);
    }
}
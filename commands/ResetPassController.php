<?php

namespace app\commands;

use app\models\User;
use Yii;
use yii\base\Exception;
use yii\console\Controller;

class ResetPassController extends Controller
{
    /**
     * Change passwords to all users.
     *
     * @param null|string $defaultPass If set, set same pass to all
     * @param int $stringLength Password length default 6
     * @throws Exception
     */
    public function actionIndex($defaultPass = null, $stringLength = 6)
    {
        echo "\nStart";
        // load all users
        $users = User::find()->all();

        /** @var User $user */
        foreach ($users as $user) {
            $newPassword = null;

            if (isset($defaultPass) && $defaultPass != 'null') { // generate new
                $newPassword = $defaultPass;
            } else {
                $newPassword = Yii::$app->getSecurity()->generateRandomString($stringLength);
            }
            $user->password = md5($newPassword);

            $user->save(false);

            echo "\n - Password changed for " . $user->name . "\n";
        }

        echo "\n Total pass changed: " . count($users);
        echo "\n Finish";
    }
}



<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Usuario;

class UserController extends Controller
{
    public function actionIndex()
    {
        $query = Usuario::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $users = $query->orderBy('id')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'users' => $users,
            'pagination' => $pagination,
        ]);
    }
}


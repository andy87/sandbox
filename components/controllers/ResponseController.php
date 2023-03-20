<?php

namespace app\components\controllers;

use yii\web\Response;
use yii\web\Controller;
use yii\web\BadRequestHttpException;

/**
 *
 */
class ResponseController extends Controller
{
    /**
     * @param $action
     * @return bool
     * @throws BadRequestHttpException
     */
    public function beforeAction($action): bool
    {
        $this->response->format = Response::FORMAT_JSON;

        return parent::beforeAction($action);
    }
}
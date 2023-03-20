<?php

namespace app\controllers;

use app\components\Response;
use app\components\controllers\ResponseController;

/**
 *
 */
class FuncController extends ResponseController
{
    /**
     * Displays `avg` result.
     *
     * @return Response
     */
    public function actionAvg(): Response
    {
        if ( empty($this->request->queryParams) )
        {
            return Response::err('не хватает аргументов');
        }

        $answer = array_sum($this->request->queryParams)/count($this->request->queryParams);
        $answer = ceil($answer);

        return Response::success($answer);
    }

    /**
     * Displays `summ` result.
     *
     * @return Response
     */
    public function actionSum(): Response
    {
        if ( empty($this->request->queryParams) )
        {
            return Response::err('не хватает аргументов');
        }

        $answer = array_sum($this->request->queryParams);

        return Response::success($answer);
    }

    /**
     * Displays `summ` result.
     *
     * @return Response
     */
    public function actionSort(): Response
    {
        if ( empty($this->request->queryParams) )
        {
            return Response::err('не хватает аргументов');
        }

        $answer = array_values($this->request->queryParams);

        $model = Response::success($answer);

        sort($model->value);

        return $model;
    }
}

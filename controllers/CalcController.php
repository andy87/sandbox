<?php

namespace app\controllers;

use app\components\Response;
use app\components\controllers\ResponseController;

/**
 *
 */
class CalcController extends ResponseController
{
    /**
     * Displays `summ` result.
     *
     * @return Response
     */
    public function actionPlus(): Response
    {
        if ( !$this->argumentsExist() ) {
            return Response::err('не хватает аргументов');
        }

        list($a, $b) = array_values($this->request->queryParams);


        return Response::success($a + $b);
    }

    /**
     * Displays `minus` result.
     *
     * @return Response
     */
    public function actionMinus(): Response
    {
        if (!$this->argumentsExist()) {
            return Response::err('не хватает аргументов');
        }

        list($a, $b) = array_values($this->request->queryParams);

        return Response::success($a - $b);
    }

    /**
     * @return bool
     */
    private function argumentsExist(): bool
    {
        if ( !empty($this->request->queryParams) )
        {
            if ( count($this->request->queryParams) < 2 )
            {
                return true;
            }
        }

        return false;
    }
}

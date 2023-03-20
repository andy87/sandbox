<?php

namespace app\components;

/**
 *
 */
class Response
{
    /** @var int  */
    public const OK = 200;
    /** @var int  */
    public const ERR = 500;


    /** @var int $status */
    public int $status = self::ERR;

    /** @var mixed $value */
    public $value = null;

    /** @var string $hint */
    public string $hint = '';



    /**
     * @param $value
     * @return self
     */
    public static function success($value): self
    {
        $model = self::getInstance(self::OK);

        $model->value = $value;

        return $model;
    }

    /**
     * @param string $err
     * @return self
     */
    public static function err( string $err ): self
    {
        $model = self::getInstance(self::ERR);

        $model->hint = $err;

        return $model;
    }

    /**
     * @param int $status
     * @return Response
     */
    public static function getInstance( int $status ): Response
    {
        $model = new self();
        $model->status = $status;
        return $model;
    }
}
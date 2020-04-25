<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\Account;

/**
 * Class AccountTransformer.
 *
 * @package namespace App\Transformers;
 */
class AccountTransformer extends TransformerAbstract
{
    /**
     * Transform the Account entity.
     *
     * @param \App\Entities\Account $model
     *
     * @return array
     */
    public function transform(Account $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}

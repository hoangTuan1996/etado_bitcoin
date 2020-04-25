<?php

namespace App\Jobs\Account;

use App\Jobs\Job;
use App\Repositories\AccountRepositoryEloquent;
use Illuminate\Support\Facades\Auth;

class StoreJob extends Job
{
    protected $request;

    /**
     * StoreJob constructor.
     * @param Request $request
     */
    public function __construct($request)
    {
        $this->request = $request;
    }

    /**
     * @param AccountRepositoryEloquent $accountRepositoryEloquent
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function handle(AccountRepositoryEloquent $accountRepositoryEloquent)
    {
        $data = array_merge(
            $this->request->only(['name', 'type', 'password', 'phone']),
            [
                'status' => $this->request->get('status') == 'on' ? 1 : 0,
                'admin_id' => Auth::guard('admin')->user()->id
            ]
        );

        $accountRepositoryEloquent->create($data);
    }
}


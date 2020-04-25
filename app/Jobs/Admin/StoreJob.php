<?php

namespace App\Jobs\Admin;

use App\Jobs\Job;
use App\Repositories\AdminRepositoryEloquent;
use Illuminate\Support\Facades\Request;

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
     * @param AdminRepositoryEloquent $adminRepositoryEloquent
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function handle(AdminRepositoryEloquent $adminRepositoryEloquent)
    {
        $data = array_merge(
            $this->request->only(['name', 'email', 'birthday', 'phone', 'limit_account']),
            [
                'status' => $this->request->get('status') == 'on' ? 1 : 0,
                'password' => bcrypt($this->request->get('password'))
            ]
        );

        $adminRepositoryEloquent->create($data);
    }
}

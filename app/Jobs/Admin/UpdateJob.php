<?php

namespace App\Jobs\Admin;

use App\Jobs\Job;
use App\Repositories\AdminRepositoryEloquent;
use Illuminate\Support\Facades\Request;

class UpdateJob extends Job
{
    protected $request;
    protected $admin;

    /**
     * StoreJob constructor.
     * @param Request $request
     * @param $admin
     */
    public function __construct($admin, $request)
    {
        $this->request = $request;
        $this->admin = $admin;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $data = array_merge(
            $this->request->only(['name', 'email', 'birthday', 'phone', 'limit_account']),
            [
                'status' => $this->request->get('status') == 'on' ? 1 : 0,
                'password' => bcrypt($this->request->get('password'))
            ]
        );

        $this->admin->update($data);
    }
}

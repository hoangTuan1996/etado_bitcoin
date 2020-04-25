<?php

namespace App\Jobs\Account;

use App\Jobs\Job;

class UpdateJob extends Job
{
    protected $request;
    protected $account;

    /**
     * StoreJob constructor.
     * @param Request $request
     * @param $account
     */
    public function __construct($account, $request)
    {
        $this->request = $request;
        $this->account = $account;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $data = array_merge(
            $this->request->only(['name', 'type', 'password', 'phone', 'admin_id']),
            [
                'status' => $this->request->get('status') == 'on' ? 1 : 0,
            ]
        );
        $this->account->update($data);
    }
}
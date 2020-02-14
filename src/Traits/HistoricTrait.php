<?php

namespace ConfrariaWeb\Historic\Traits;

use App\User;
use Auth;

trait HistoricTrait
{

    public function registerHistoric($historic){
        $data['data'] = $historic->data();
        $data['title'] = $historic->title();
        $data['user_id'] = $historic->user('id');
        return $this->historics()->create($data);
    }

    protected function extractUserToHistory(array $data)
    {
        if (isset($data['user_id']) && is_int($data['user_id']) && User::find($data['user_id'])->exists()) {
            return $data['user_id'];
        }
        if (Auth::check()) {
            return Auth::id();
        }
        return NULL;
    }

    /**
     * @return mixed
     */
    public function historics()
    {
        return $this->morphMany('ConfrariaWeb\Historic\Models\Historic', 'historicable');
    }

}

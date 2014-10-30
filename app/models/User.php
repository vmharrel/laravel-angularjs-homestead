<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'user';

   	/**
	 * Let eloquent know that these attributes will be available for mass assignment
	 *
	 * @var string
	 */

	protected $fillable = array('user_name', 'email', 'password', 'create_utc'); 

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

    public function scores()
    {
        return $this->hasMany('Score');
    }

	public static function userScores()
	{
		$userRankings = DB::table('user')
			->select(DB::raw('user.*, score.*, sum(score) as score_total, sum(winner) as ranking'))
				->join('score', 'score.user_id', '=', 'user.id')
    		->groupBy('user.id')
    		->orderBy('ranking', 'desc')
    		->orderBy('score_total', 'desc')
    		->get();

    	return $userRankings;
	}

}
<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

use LaravelBook\Ardent\Ardent;

class sell extends Ardent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;
	public $autoPurgeRedundantAttributes = true;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'car_sold';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	 public static $rules = array(
	    'first_name'           	 => 'required|between:4,50',
	    'email'                 => 'required|email',
	    'password'   				=> 'required|alpha_num|between:4,8',
    	'password_confirmation' => 'same:password',
	    'car_name'              => 'required|alpha_num',
	    'car_make'               => 'required',
	    'car_model'               => 'required',
	    'car_color'              => 'required',
	    'car_machine'            => 'required',
	    'car_transmission'       => 'required',
	    'car_wheels'              => 'required',
	    'car_condition'           => 'required',
	    'car_or_cr'           => 'required',
	    'car_price'             => 'required',
	    'car_negotiable'          => 'required',
	    'car_mobile'              => 'required',
	    'car_phone'               => 'required',
	    'car_accesories'          => 'required',
	    'time'          	      => 'required',
	    
  );

}

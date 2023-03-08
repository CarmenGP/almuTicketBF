<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Booking
 *
 * @property $id
 * @property $created_at
 * @property $updated_at
 * @property $userName
 * @property $category
 * @property $area
 * @property $location
 * @property $state
 * @property $date
 * @property $startTime
 * @property $endTime
 * @property $numPeople
 * @property $room
 * @property $description
 * @property $comment
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Booking extends Model
{
    
    static $rules = [
		'userName' => 'required',
		'category' => 'required',
		'area' => 'required',
		'location' => 'required',
		'state' => 'required',
		'date' => 'required',
		'startTime' => 'required',
		'endTime' => 'required',
		'numPeople' => 'required',
		'room' => 'required',
		'description' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['userName','category','area','location','state','date','startTime','endTime','numPeople','room','description','comment'];



}

<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Incidence
 *
 * @property $id
 * @property $created_at
 * @property $updated_at
 * @property $userName
 * @property $category
 * @property $area
 * @property $location
 * @property $description
 * @property $state
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Incidence extends Model
{
  use HasFactory; 
    // static $rules = [
		// 'userName' => 'required',
		// 'category' => 'required',
		// 'area' => 'required',
		// 'location' => 'required',
		// 'description' => 'required',
		// 'state' => 'required',
    // ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['userName','category','area','location','description','state'];



}

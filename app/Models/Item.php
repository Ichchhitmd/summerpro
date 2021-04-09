<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Item extends Model
{


  /**
   * Searchable rules.
   *
   * @var array
   */
  protected $searchable = [
      /**
       * Columns and their priority in search results.
       * Columns with higher values are more important.
       * Columns with equal values have equal importance.
       *
       * @var array
       */
      'columns' => [
          'items.name' => 10,
          'items.genre' => 10,
          'items.details' => 5,
          
      ],
      
  ];

    use HasFactory;
    protected $table='items';
    //protected $casts=[
      //      'genre'=>'array'
        //];
    protected $fillable=['name','price','type','details','file'];

    
}

<?php

/**
 * Help Model
 *
 * @package     Makent
 * @subpackage  Model
 * @category    Help
 * @author      Trioangle Product Team
 * @version     1.5.9
 * @link        http://trioangle.com
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Help extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'help';

    public $appends = ['category_name', 'subcategory_name'];

    // Get all Active status records
    public static function active_all()
    {
        return Help::whereStatus('Active')->get();
    }

    // Get all Active status records
    public static function scopeActive_subcategory_count($query, $category_id)
    {
      $count = $query->where('category_id', $category_id)->with(['category'=>function($query){
        $query->whereStatus('Active');
      },'thisSubCategory'=>function($query){
        $query->whereStatus('Active');
      }])->wherehas('thisSubCategory',function($query){
          $query->where('status','Active');
      })->get();
      return $count;
    }

    public function category()
    {
      return $this->belongsTo('App\Models\HelpCategory','category_id','id');
    }

    public function thisSubCategory()
    {
      return $this->belongsTo('App\Models\HelpSubCategory','subcategory_id','id');
    }

    public function subcategory()
    {
      return $this->hasMany('App\Models\HelpSubCategory','category_id','category_id')->whereStatus('Active');
    }

    public function scopeSubcategory_($query, $id)
    {
      return $query->where('subcategory_id', $id);
    }

    public function getCategoryNameAttribute()
    {
      return HelpCategory::find($this->attributes['category_id'])->name;
    }

    public function getSubcategoryNameAttribute()
    {
      return @HelpSubCategory::find($this->attributes['subcategory_id'])->name;
    }
}

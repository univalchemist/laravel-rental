<?php

/**
 * Home Cities Model
 *
 * @package     Makent
 * @subpackage  Model
 * @category    Home Cities
 * @author      Trioangle Product Team
 * @version     1.5.9
 * @link        http://trioangle.com
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeCities extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'home_cities';

    public $timestamps = false;

    public $appends = ['image_url','search_url'];

    public function getImageUrlAttribute()
    {
        $photo_src=explode('.',$this->attributes['image']);
        if(count($photo_src)>1)
        {
            return $src = url('/').'/images/home_cities/'.$this->attributes['image'];
        }
        else
        {
            $options['secure']=TRUE;
            // $options['width']=1300;
            // $options['height']=600;
            $options['crop']    = 'fill';
            return $src=\Cloudder::show($this->attributes['image'],$options);
        }
    }
    public function getSearchUrlAttribute()
    {
               return url('/s?location='.$this->attributes['name'].'&source=ds');
    }
}

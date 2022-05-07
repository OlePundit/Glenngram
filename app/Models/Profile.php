<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

        protected $guarded = [];

        public function profileImage()
        {
            $imagePath = ($this->image) ?  $this->image : 'profile/9UHe7CSRK4V9SNESMz0BAYggmQOp2G04J3Ygcgtl.png';

            return '/storage/' . $imagePath;
        }

        public function followers()
        {
            return $this->belongsTOmANY(User::class);
        }
        
        Public function user()
        {
            return $this->belongsTo(User::class);
        }
}

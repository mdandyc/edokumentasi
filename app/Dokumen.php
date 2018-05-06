<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokumen extends Model
{
    protected $table = 'dokumen';

    public function user()
	{
    return $this->belongsTo('App\User', 'usernameFK');
	}
	public function kategori()
	{
    return $this->belongsTo('App\Kategori', 'kategoriFK');
	}

}

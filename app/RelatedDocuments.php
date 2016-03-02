<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RelatedDocuments extends Model
{
    protected $table = 'related_documents';	//Declare table name
    public $timestamps = false;		//Disabling timestamps attribute
    protected $primaryKey = 'uploaded_file_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable =   [
                                'project_id',
                                'uploaded_file_id'
                            ];
}

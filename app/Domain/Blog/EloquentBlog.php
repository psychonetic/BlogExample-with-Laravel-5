<?php

namespace Blog\Domain\Blog;
use Illuminate\Database\Eloquent\Model;
use Blog\Core\PresentableTrait;

class EloquentBlog extends Model 
{
    use PresentableTrait;
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'blog';

    /**
     * The primaryKey used by the model.
     *
     * @var string
     */
    protected $primaryKey = 'blog_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'content'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * The Presenter
     *
     * @var  Blog\Http\Blog\BlogPresenter
     * 
     */
    protected $presenter = '\Blog\Http\Blog\BlogPresenter';
}

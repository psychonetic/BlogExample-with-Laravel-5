<?php

namespace Blog\Http\Blog;
use Carbon\Carbon;
use Blog\Core\Presenter;

/**
 * Presenter is used to modify Data.
 * Like formating the Date correctly.
 */

class BlogPresenter extends Presenter {

	public function createdAt() {
		 return Carbon::createFromFormat('Y-m-d H:i:s', $this->created_at)
                     ->formatLocalized('%A %d %B %Y');
	}

}
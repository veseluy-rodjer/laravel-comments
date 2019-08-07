<?php

		/*
		 * Маршрут обрабатывающий POST запрос отправляемый формой с помощью AJAX
		 */
		Route::post('comment', 'CommentController@store')->name('comment');
    

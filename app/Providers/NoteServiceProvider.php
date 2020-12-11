<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Chap6\Note;

class NoteServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind("App\Chap6\Note", function($app) {
            $name = "しんちゃん";
            $note = new Note($name);
            return $note;
        });
    }
}
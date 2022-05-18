<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibros extends Migration
{
    public function up()
    {
        if (Schema::hasTable('Comics')){
            Schema::table('Comics', function (Blueprint $table) {
                if (!Schema::hasColumn('idComic'))
                {
                    $table->increments('idComic');
                }
                if (!Schema::hasColumn('nomComic'))
                {
                    $table->string('nomComic', 255);
                }
                if (!Schema::hasColumn('precio'))
                {
                    $table->float('precio');
                }
            });
        } else {
            Schema::create('Comics', function (Blueprint $table) {
                $table->increments('idComic');
                $table->string('nomComic', 255);
                $table->float('precio');
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        if (Schema::hasTable('Comics')) {
            Schema::table('Comics', function (Blueprint $table) {
                Schema::drop('Comics');
            });
        }
    }
}

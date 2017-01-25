<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Migration auto-generated by Sequel Pro Laravel Export
 * @see https://github.com/cviebrock/sequel-pro-laravel-export
 */
class CreateSysLoginLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('sys_login_log', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email', 32)->comment('邮箱号');
            $table->string('content', 126)->comment('内容');
            $table->string('ip', 12)->comment('登录ip');
            $table->integer('created_at')->comment('创建时间');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sys_login_log');
    }
}
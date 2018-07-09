<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPhoneToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->increments('id')->comment('自增主键')->change();
            $table->string('name')->default('')->comment('用户名')->change();
            $table->string('email')->default('')->comment('邮箱')->change();
            $table->string('image')->default('')->after('email')->comment('头像');
            $table->string('password')->comment('密码')->change();
            $table->dropUnique('users_email_unique');// 删除索引
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->increments('id')->change();
            $table->string('name')->change();
            $table->string('email')->change();
            $table->dropColumn('image');
            $table->string('password')->change();
            $table->unique('email');
            $table->dropUnique('users_phone_unique');
        });
    }
}

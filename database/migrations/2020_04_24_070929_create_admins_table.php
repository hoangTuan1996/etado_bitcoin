<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateAdminsTable.
 */
class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->index();
            $table->string('email')->unique()->index();
            $table->string('password');
            $table->string('phone')->nullable()->index();
            $table->string('birthday')->nullable();
            $table->unsignedTinyInteger('status')->default(config('model.status.on'));
            $table->integer('limit_account')->default(config('model.status.off'));
            $table->string('remember_token')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('admins');
    }
}

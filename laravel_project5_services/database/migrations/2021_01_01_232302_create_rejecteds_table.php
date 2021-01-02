<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRejectedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rejecteds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('category_id')->nullable();         // check button or dropdown list from 3 category
            $table->string('rejected_name')->nullable();
            $table->string('rejected_email')->nullable()->unique();
            $table->bigInteger('rejected_mobile')->nullable();
            $table->string('rejected_city')->nullable();
            $table->text('rejected_image')->nullable();  // optional
            $table->string('rejected_desc')->nullable();
            $table->text('rejected_education_img')->nullable();
            $table->string('rejected_subscription_type')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rejecteds');
    }
}

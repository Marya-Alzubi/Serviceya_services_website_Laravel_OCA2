<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePendingRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pending_requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('category_id')->nullable();         // check button or dropdown list from 3 category
            $table->string('pending_name')->nullable();
            $table->string('pending_email')->nullable()->unique();
            $table->bigInteger('pending_mobile')->nullable();
            $table->string('pending_city')->nullable();
            $table->text('pending_image')->nullable();  // optional
            $table->string('pending_desc')->nullable();
            $table->text('pending_education_img')->nullable();
            $table->string('pending_subscription_type')->nullable();
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
        Schema::dropIfExists('pending_requests');
    }
}

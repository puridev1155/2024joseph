<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('registers', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable()->comment('신청서 종류');
            $table->string('register_date')->nullable()->comment('신청기간');
            $table->string('register_target')->nullable()->comment('지원대상');
            $table->longtext('register_qualification')->nullable()->comment('지원자격');
            $table->string('register_price')->nullable()->comment('지원금액');
            $table->longtext('register_process')->nullable()->comment('지원절차');
            $table->longtext('register_document')->nullable()->comment('지원절차');
            $table->longtext('register_contact')->nullable()->comment('문의처');
            $table->boolean('register_agree')->comment('신청하기');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registers');
    }
};

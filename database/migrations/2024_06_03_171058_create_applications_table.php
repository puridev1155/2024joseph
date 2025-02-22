<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->constrained();
            $table->string('year', 4)->nullable()->comment('년도');
            $table->string('group_id')->nullable()->comment('기수');
            $table->longtext('content1')->nullable()->comment('자기소개');
            $table->longtext('content2')->nullable()->comment('장래');
            $table->longtext('content3')->nullable()->comment('장학금');
            $table->json('my_thumbnail')->nullable()->comment('사진');
            $table->string('school', 40)->nullable()->comment('학교');
            $table->string('department', 40)->nullable()->comment('학과');
            $table->string('grade', 40)->nullable()->comment('학년');
            $table->string('korean_name', 40)->nullable()->comment('한글성명');
            $table->string('english_name', 40)->nullable()->comment('영문성명');
            $table->string('ssn', 40)->nullable()->comment('주민등록번호');
            $table->string('email', 40)->nullable()->comment('email');
            $table->string('address', 100)->nullable()->comment('주소');
            $table->string('phone', 11)->nullable()->comment('연락처');
            //보호자
            $table->string('guardian_name', 40)->nullable()->comment('성명');
            $table->string('guardian_church', 40)->nullable()->comment('교회');
            $table->string('guardian_status', 40)->nullable()->comment('직위');
            $table->string('guardian_relationship', 40)->nullable()->comment('관계');
            $table->string('guardian_address', 100)->nullable()->comment('주소');
            $table->string('guardian_phone', 11)->nullable()->comment('전화번호');
            $table->string('guardian_email', 41)->nullable()->comment('이메일');

            //가족사항
            $table->json('family')->nullable();

            //보호자 주택,소득
            $table->string('home_status', 41)->nullable()->comment('주택');
            $table->string('guardian_salary', 41)->nullable()->comment('소득');

            //성적정보
            $table->string('year1', 10)->nullable()->comment('성적1');
            $table->string('year2', 10)->nullable()->comment('성적2');
            $table->string('year3', 10)->nullable()->comment('성적3');
            $table->string('year4', 10)->nullable()->comment('성적4');
            $table->string('yearly', 10)->nullable()->comment('전학년 평균');

            //특기사항
            $table->string('language', 40)->nullable()->comment('언어');
            $table->string('award', 40)->nullable()->comment('수강경력');
            $table->json('my_images')->nullable();
           // $table->json('my_family')->nullable();
           // $table->json('my_bank')->nullable();
           // $table->json('my_recommendation1')->nullable();
           // $table->json('my_recommendation2')->nullable();
           // $table->json('my_recommendation3')->nullable();
           // $table->json('my_recommendation4')->nullable();
            $table->timestamps();

            //성공
            $table->string('status1', 1)->nullable()->comment('1차성공');
            $table->string('status2', 1)->nullable()->comment('2차성공');
            $table->string('status3', 1)->nullable()->comment('3차성공');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};

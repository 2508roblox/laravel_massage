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
        Schema::create('slides', function (Blueprint $table) {
            $table->id();
            $table->string('image');                       // Đường dẫn đến hình ảnh của slide
            $table->boolean('is_active')->default(true);   // Trạng thái hoạt động của slide
            $table->integer('sort_order')->default(0);     // Thứ tự sắp xếp của slide
            $table->timestamps();                          // Tạo trường created_at và updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('slides');
    }
};

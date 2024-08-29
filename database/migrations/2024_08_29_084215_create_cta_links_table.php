<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('cta_links', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('bold_text')->nullable() ; // Thêm trường 'bold_text' sau 'title'
            $table->string('link');              // Đường dẫn liên kết (e.g., "tel:0911.270.666", "https://zalo.me/tokyocare")
            $table->string('image');             // Đường dẫn đến hình ảnh (e.g., "uploads/favicon/3.png")
            $table->boolean('is_active')->default(true);   // Trạng thái hoạt động của liên kết
            $table->integer('sort_order')->default(0);     // Thứ tự sắp xếp của liên kết
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cta_links');
    }
};

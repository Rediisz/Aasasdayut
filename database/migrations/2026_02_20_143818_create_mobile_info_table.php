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
        Schema::create('mobile_info', function (Blueprint $table) {
            $table->increments('ID');
            $table->unsignedInteger('Brand_ID')->nullable()->index('idx_mobile_info_brand_id');
            $table->string('Model', 100);
            $table->string('FullName', 150)->nullable();
            $table->string('Series', 100)->nullable();
            $table->string('Variant', 100)->nullable();
            $table->string('ColorOptions', 200)->nullable();
            $table->unsignedSmallInteger('Weight_g')->nullable();
            $table->string('IP_Rating', 20)->nullable();
            $table->unsignedSmallInteger('RAM_GB')->nullable();
            $table->smallInteger('Storage_GB')->nullable();
            $table->string('Storage_Type', 20)->nullable();
            $table->string('RAM_Type', 20)->nullable();
            $table->boolean('Expandable')->nullable()->default(false);
            $table->date('LaunchDate');
            $table->string('Availability', 30)->nullable();
            $table->decimal('Price', 12)->nullable();
            $table->decimal('LaunchPrice', 10)->nullable();
            $table->char('Currency', 3)->nullable()->default('THB');
            $table->string('Display');
            $table->string('Display_Type', 60)->nullable();
            $table->string('Display_Resolution', 30)->nullable();
            $table->smallInteger('Display_RefreshRate')->nullable();
            $table->smallInteger('Display_Brightness')->nullable();
            $table->string('Display_Protection', 80)->nullable();
            $table->string('Material', 100);
            $table->string('Dimensions', 50)->nullable();
            $table->string('OS', 100);
            $table->string('UI_Skin', 50)->nullable();
            $table->string('OS_Version', 50)->nullable();
            $table->smallInteger('OS_Updates_Years')->nullable();
            $table->string('Network');
            $table->string('Wifi_Std', 20)->nullable();
            $table->string('Bluetooth', 10)->nullable();
            $table->boolean('NFC')->nullable()->default(false);
            $table->boolean('GPS')->default(false);
            $table->boolean('Infrared')->nullable()->default(false);
            $table->string('USB_Type', 30)->nullable();
            $table->string('Sim_Type', 40)->nullable();
            $table->boolean('eSIM')->nullable()->default(false);
            $table->boolean('Jack35')->nullable()->default(false);
            $table->boolean('Stereo_Speakers')->nullable()->default(false);
            $table->boolean('Dolby_Atmos')->nullable()->default(false);
            $table->string('Fingerprint_Type', 30)->nullable();
            $table->boolean('Face_Unlock')->nullable()->default(true);
            $table->text('Sensors')->nullable();
            $table->text('Features')->nullable();
            $table->string('FrontCamera', 50)->nullable();
            $table->text('FrontCamera_Features')->nullable();
            $table->string('BackCamera', 50)->nullable();
            $table->text('RearCamera_Features')->nullable();
            $table->string('Video_Recording', 100)->nullable();
            $table->string('Processor', 100)->nullable();
            $table->string('GPU', 60)->nullable();
            $table->unsignedInteger('Battery_mAh')->nullable();
            $table->smallInteger('Charging_Wired_Watt')->nullable();
            $table->smallInteger('Charging_Wireless_Watt')->nullable();
            $table->smallInteger('Charging_Reverse_Watt')->nullable();
            $table->string('Battery_Type', 20)->nullable();
            $table->decimal('ScreenSize_in', 3, 1)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mobile_info');
    }
};

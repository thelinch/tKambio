<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateChangeTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('change_type', function (Blueprint $table) {
            $table->id();
            $table->softDeletes();
            $table->double("tc_venta");
            $table->double("tc_compra");
            $table->timestamp('fechaCreacion')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->dropSoftDeletes();
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
        Schema::dropIfExists('change_type');
    }
}

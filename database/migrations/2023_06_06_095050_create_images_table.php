<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('images', function (Blueprint $table) {
            //$table->text('title');
            //$table->longText('description');
            //$table->longText('url');

            //$table->string('url')->change();

            //$table->integer('order');

        });
    }

};

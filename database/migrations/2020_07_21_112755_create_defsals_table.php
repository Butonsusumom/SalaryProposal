<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDefsalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('defsals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('position');
            $table->string('region');
            $table->integer('min');
            $table->integer('max');
            $table->integer('isLead');
        });
        DB::table('defsals')->insert(array(
            array(
                'position' => 'CTO',
                'region' => 'Boston',
                'min'=> 45000,
                'max'=>100000,
                'isLead'=>1
            ),
            array(
                'position' => 'CTO',
                'region' => 'Denver',
                'min'=> 65000,
                'max'=>125000,
                'isLead'=>1
            ),
            array(
                'position' => 'CTO',
                'region' => 'LA',
                'min'=> 60000,
                'max'=>150000,
                'isLead'=>1
            ),
            array(
                'position' => 'CTO',
                'region' => 'NY',
                'min'=> 72000,
                'max'=>200000,
                'isLead'=>1
            ),

            array(
                'position' => 'Developer',
                'region' => 'Boston',
                'min'=> 35000,
                'max'=>90000,
                'isLead'=>0
            ),
            array(
                'position' => 'Developer',
                'region' => 'Denver',
                'min'=> 55000,
                'max'=>115000,
                'isLead'=>0
            ),
            array(
                'position' => 'Developer',
                'region' => 'LA',
                'min'=> 60000,
                'max'=>150000,
                'isLead'=>0
            ),
            array(
                'position' => 'Developer',
                'region' => 'NY',
                'min'=> 62000,
                'max'=>190000,
                'isLead'=>0
            ),

            array(
                'position' => 'PM',
                'region' => 'Boston',
                'min'=> 30000,
                'max'=>90000,
                'isLead'=>1
            ),
            array(
                'position' => 'PM',
                'region' => 'Denver',
                'min'=> 50000,
                'max'=>110000,
                'isLead'=>1
            ),
            array(
                'position' => 'PM',
                'region' => 'LA',
                'min'=> 45000,
                'max'=>135000,
                'isLead'=>1

            ),
            array(
                'position' => 'PM',
                'region' => 'NY',
                'min'=> 57000,
                'max'=>185000,
                'isLead'=>1
            ),

            array(
                'position' => 'TL',
                'region' => 'Boston',
                'min'=> 40000,
                'max'=> 95000,
                'isLead'=>1
            ),
            array(
                'position' => 'TL',
                'region' => 'Denver',
                'min'=> 60000,
                'max'=>120000,
                'isLead'=>1
            ),
            array(
                'position' => 'TL',
                'region' => 'LA',
                'min'=> 55000,
                'max'=>145000,
                'isLead'=>1
            ),
            array(
                'position' => 'TL',
                'region' => 'NY',
                'min'=> 67000,
                'max'=>195000,
                'isLead'=>1
            ))
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::dropIfExists('defsals');
    }
}

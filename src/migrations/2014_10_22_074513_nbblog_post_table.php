<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NbblogPostTable extends Migration {

    protected $table_name = 'posts';

    public function __construct(){
        $this->table_name = Config::get('nbblog::table_prefix').$this->table_name;
    }

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create($this->table_name, function (Blueprint $table) {
            $table->increments('id');
            $table->string('link', 32);
            $table->string('header', 256);
            $table->text('article');
            $table->timestamps();
            $table->softDeletes();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists($this->table_name);
	}

}

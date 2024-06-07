	<?php
	
	use Illuminate\Database\Migrations\Migration;
	use Illuminate\Database\Schema\Blueprint;
	use Illuminate\Support\Facades\Schema;
	
	return new class extends Migration
	{

    public function up(): void
	    {
        Schema::create('_Employee_table', function (Blueprint $table) {
            $table->id();
            $table->string('FirstName');
            $table->string('LastName');
            $table->date('DateofBirth');
            $table->integer('Phone');
            $table->timestamps();
        });
	    }


	    public function down(): void
	    {
        Schema::dropIfExists('_Employee_table');
    }
	};

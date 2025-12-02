public function up(): void
{
    Schema::create('courses', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('code')->unique();
        $table->unsignedBigInteger('instructor_id');
        $table->timestamps();

        $table->foreign('instructor_id')->references('id')->on('instructors')->onDelete('cascade');
    });
}

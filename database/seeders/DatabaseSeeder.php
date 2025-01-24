<?php

    namespace Database\Seeders;

    use App\Models\Note;
    use App\Models\User;
    // use Illuminate\Database\Console\Seeds\WithoutModelEvents;
    use Illuminate\Database\Seeder;

    class DatabaseSeeder extends Seeder
    {
        /**
         * Seed the application's database.
         */
        public function run(): void
        {
            // User::factory(10)->create();

            Note::factory(100)->create();

            // Note::factory(100)->create();
        }
    }

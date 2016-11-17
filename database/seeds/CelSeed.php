<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

Use App\Cel;


class CelSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // clear out any old data if it exists
        DB::table('cels')->delete();

        $data = [
            [
                'id' => 1,
                'name' => 'Castle In The Sky',
                'photo' => '{{ asset('img/logo.png') }}',
                'description' => 'this is an example text',
                'categories' => 'film',
                'created_at' => '2016-09-29 19:27:02',
                'updated_at' => '2016-10-10 22:17:24'
            ],
            [
                'id' => 2,
                'name' => 'Berserk',
                'photo' => '{{ asset('img/logo.png') }}',
                'description' => null,
                'categories' => 'film',
                'created_at' => '2016-09-29 19:27:24',
                'updated_at' => '2016-09-29 19:27:24',
            ],
            [
                'id' => 3,
                'name' => 'Ba',
                'photo' => '{{ asset('img/logo.png') }}',
                'description' => 'this is a text',
                'categories' => 'film',
                'created_at' => '2016-09-29 19:27:24',
                'updated_at' => '2016-09-29 19:27:24',
            ]

        ];

        foreach ($data as $item) {
            
            $cel = new Cel();

            foreach ($item as $key => $value) {
                $cel->{$key} = $value;
            }

            $cel->save();
        }
    }
}

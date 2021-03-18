<?php

use Illuminate\Database\Seeder;
use App\EmailTemplate;

class EmailTemplatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EmailTemplate::truncate();

        EmailTemplate::create([
        	'title' => 'Register to AsiaGold Member',
        	'subject' => 'Register Complete',
        	'message' => '
        	<h1>Welcome</h1>
            <h2>Welcome to Asia Gold Buy &amp; Sell Panel</h2>
            <p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore totam cumque minus dolor corporis corrupti, harum, ab deserunt amet in reprehenderit! Id eligendi in labore ipsa. Facere commodi, explicabo reiciendis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore totam cumque minus dolor corporis corrupti, harum, ab deserunt amet in reprehenderit! Id eligendi in labore ipsa. Facere commodi, explicabo reiciendis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore totam cumque minus dolor corporis corrupti, harum, ab deserunt amet in reprehenderit! Id eligendi in labore ipsa. Facere commodi, explicabo reiciendis.</p>'
        ]);

        EmailTemplate::create([
        	'title' => 'Deposit Your Cash',
        	'subject' => 'Deposit Complete',
        	'message' => '
        	<h1>Deposit</h1>
            <h2>Welcome to Asia Gold Buy &amp; Sell Panel</h2>
            <p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore totam cumque minus dolor corporis corrupti, harum, ab deserunt amet in reprehenderit! Id eligendi in labore ipsa. Facere commodi, explicabo reiciendis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore totam cumque minus dolor corporis corrupti, harum, ab deserunt amet in reprehenderit! Id eligendi in labore ipsa. Facere commodi, explicabo reiciendis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore totam cumque minus dolor corporis corrupti, harum, ab deserunt amet in reprehenderit! Id eligendi in labore ipsa. Facere commodi, explicabo reiciendis.</p>'
        ]);

        EmailTemplate::create([
        	'title' => 'Withdraw Your Cash',
        	'subject' => 'Withdraw Complete',
        	'message' => '
        	<h1>Withdraw</h1>
            <h2>Welcome to Asia Gold Buy &amp; Sell Panel</h2>
            <p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore totam cumque minus dolor corporis corrupti, harum, ab deserunt amet in reprehenderit! Id eligendi in labore ipsa. Facere commodi, explicabo reiciendis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore totam cumque minus dolor corporis corrupti, harum, ab deserunt amet in reprehenderit! Id eligendi in labore ipsa. Facere commodi, explicabo reiciendis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore totam cumque minus dolor corporis corrupti, harum, ab deserunt amet in reprehenderit! Id eligendi in labore ipsa. Facere commodi, explicabo reiciendis.</p>'
        ]);

        EmailTemplate::create([
            'title' => 'Buy Gold',
            'subject' => 'Buy Gold Approval',
            'message' => '
            <h1>Buy Gold</h1>
            <h2>Welcome to Asia Gold Buy &amp; Sell Panel</h2>
            <p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore totam cumque minus dolor corporis corrupti, harum, ab deserunt amet in reprehenderit! Id eligendi in labore ipsa. Facere commodi, explicabo reiciendis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore totam cumque minus dolor corporis corrupti, harum, ab deserunt amet in reprehenderit! Id eligendi in labore ipsa. Facere commodi, explicabo reiciendis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore totam cumque minus dolor corporis corrupti, harum, ab deserunt amet in reprehenderit! Id eligendi in labore ipsa. Facere commodi, explicabo reiciendis.</p>'
        ]);

        EmailTemplate::create([
            'title' => 'Sell Gold',
            'subject' => 'Sell Gold Approval',
            'message' => '
            <h1>Sell Gold</h1>
            <h2>Welcome to Asia Gold Buy &amp; Sell Panel</h2>
            <p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore totam cumque minus dolor corporis corrupti, harum, ab deserunt amet in reprehenderit! Id eligendi in labore ipsa. Facere commodi, explicabo reiciendis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore totam cumque minus dolor corporis corrupti, harum, ab deserunt amet in reprehenderit! Id eligendi in labore ipsa. Facere commodi, explicabo reiciendis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore totam cumque minus dolor corporis corrupti, harum, ab deserunt amet in reprehenderit! Id eligendi in labore ipsa. Facere commodi, explicabo reiciendis.</p>'
        ]);
    }
}

<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class initProjects extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:initProjects';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command initProjects';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        DB::table("projects")->insert([
            [
                "owner_name"=>"umihico",
                "repository_name"=>"umihi.co",
                "description"=>"my portfolio website (this website)",
                "project_link"=>"https://umihi.co/"
            ],
            [
                "owner_name"=>"umihico",
                "repository_name"=>"thumbnailed-portfolio-websites",
                "description"=>"GIF Screenshots of everybody's #portfolio-website",
                "project_link"=>"https://portfolios.umihi.co/"
            ],
            [
                "owner_name"=>"umihico",
                "repository_name"=>"pythonista-chromeless",
                "description"=>"AWS lambda unit which execute given code on selenium",
                "project_link"=>"https://github.com/umihico/pythonista-chromeless/"
            ],
            [
                "owner_name"=>"umihico",
                "repository_name"=>"kindle-highlights",
                "description"=>"Share highlights that have been inspiring you in github pages.",
                "project_link"=>"https://books.umihi.co/"
            ],
            [
                "owner_name"=>"umihico",
                "repository_name"=>"minigun-requests",
                "description"=>"Web scraping API to outsource tons of GET & xpath to cloud computing",
                "project_link"=>"https://github.com/umihico/minigun-requests/"
            ],
            [
                "owner_name"=>"umihico",
                "repository_name"=>"microdb",
                "description"=>"In-memory, Hash-mapping, Disk-writable, Thread-safe database.",
                "project_link"=>"https://github.com/umihico/microdb/"
            ],
            [
                "owner_name"=>"umihico",
                "repository_name"=>"ppickle",
                "description"=>"multilingual human-readable output pickler",
                "project_link"=>"https://github.com/umihico/ppickle/"
            ],
            [
                "owner_name"=>"umihico",
                "repository_name"=>"lemp",
                "description"=>"my LEMP infrastructure as code",
                "project_link"=>"https://github.com/umihico/lemp/"
            ],
        ]);
    }
}

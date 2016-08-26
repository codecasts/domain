<?php

namespace Codecasts\Domain;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration as LaravelMigration;

/**
 * Class Migration.
 *
 * Base Migration for usage inside domains.
 *
 * @package Codecasts\Domain
 */
abstract class Migration extends LaravelMigration
{
    /**
     * @var \Illuminate\Database\Schema\Builder
     */
    protected $schema;

    /**
     * Migration constructor.
     */
    public function __construct()
    {
        $this->schema = app('db')->connection()->getSchemaBuilder();
    }

    /**
     * Run the migrations.
     */
    abstract public function up();

    /**
     * Reverse the migrations.
     */
    abstract public function down();
}

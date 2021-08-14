<?php

namespace Tests\Feature\Controllers;

use App\Models\User;
use App\Models\StockTable;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class StockTableControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    protected function setUp(): void
    {
        parent::setUp();

        $this->actingAs(
            User::factory()->create(['email' => 'admin@admin.com'])
        );

        $this->seed(\Database\Seeders\PermissionsSeeder::class);

        $this->withoutExceptionHandling();
    }

    /**
     * @test
     */
    public function it_displays_index_view_with_stock_tables()
    {
        $stockTables = StockTable::factory()
            ->count(5)
            ->create();

        $response = $this->get(route('stock-tables.index'));

        $response
            ->assertOk()
            ->assertViewIs('app.stock_tables.index')
            ->assertViewHas('stockTables');
    }

    /**
     * @test
     */
    public function it_displays_create_view_for_stock_table()
    {
        $response = $this->get(route('stock-tables.create'));

        $response->assertOk()->assertViewIs('app.stock_tables.create');
    }

    /**
     * @test
     */
    public function it_stores_the_stock_table()
    {
        $data = StockTable::factory()
            ->make()
            ->toArray();

        $response = $this->post(route('stock-tables.store'), $data);

        $this->assertDatabaseHas('stock_tables', $data);

        $stockTable = StockTable::latest('id')->first();

        $response->assertRedirect(route('stock-tables.edit', $stockTable));
    }

    /**
     * @test
     */
    public function it_displays_show_view_for_stock_table()
    {
        $stockTable = StockTable::factory()->create();

        $response = $this->get(route('stock-tables.show', $stockTable));

        $response
            ->assertOk()
            ->assertViewIs('app.stock_tables.show')
            ->assertViewHas('stockTable');
    }

    /**
     * @test
     */
    public function it_displays_edit_view_for_stock_table()
    {
        $stockTable = StockTable::factory()->create();

        $response = $this->get(route('stock-tables.edit', $stockTable));

        $response
            ->assertOk()
            ->assertViewIs('app.stock_tables.edit')
            ->assertViewHas('stockTable');
    }

    /**
     * @test
     */
    public function it_updates_the_stock_table()
    {
        $stockTable = StockTable::factory()->create();

        $data = [
            'item_name' => $this->faker->text(255),
            'unit' => $this->faker->text,
            'category' => $this->faker->text(255),
            'buying_price' => $this->faker->randomNumber,
            'quantity' => $this->faker->randomNumber,
            'description' => $this->faker->sentence(15),
        ];

        $response = $this->put(
            route('stock-tables.update', $stockTable),
            $data
        );

        $data['id'] = $stockTable->id;

        $this->assertDatabaseHas('stock_tables', $data);

        $response->assertRedirect(route('stock-tables.edit', $stockTable));
    }

    /**
     * @test
     */
    public function it_deletes_the_stock_table()
    {
        $stockTable = StockTable::factory()->create();

        $response = $this->delete(route('stock-tables.destroy', $stockTable));

        $response->assertRedirect(route('stock-tables.index'));

        $this->assertDeleted($stockTable);
    }
}

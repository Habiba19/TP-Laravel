<?php
namespace Tests\Unit;
use App\Models\Tache;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\TestCase;
class DBTest extends TestCase {
 /**
 * Creates the application.
 *
 * @return \Illuminate\Foundation\Application
 */
    public function createApplication() {
        // Utilisation de l'environnement de test
        putenv('DB_DEFAULT=sqlite_testing');
        $app = require __DIR__.'/../../bootstrap/app.php';
        $app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();
        return $app;
    }
    public function setUp():void { 
        parent::setUp();
        Artisan::call('migrate');
        // Création des données de tests
        Tache::factory()->create(
        [
        'expiration' => "2017-08-31",
        'categorie' => 'Urgent',
        'description' => 'Teste la table tache',
        'accomplie' => 'N',
        ]
        );
        Tache::factory()->count(5)->create(['categorie' => 'Urgent']);
        Tache::factory()->count(5)->create(['categorie' => 'Bidon']);
}
        public function testModelTest() {
            $taches = Tache::factory()->count(5)->make();
            $this->assertEquals(count($taches), 3);
        }
        public function testAccesDBTest() {
            $taches = DB::table('taches')->get();
            $this->assertEquals(count($taches), 11);
        }
        public function testAccesDBWithIDTest() {
            $tache = DB::table('taches')->where('id', 1)->first();
            $this->assertEquals($tache->expiration, '2017-08-31');
            $this->assertEquals($tache->categorie, 'Urgent');
            $this->assertEquals($tache->description, 'Teste la table tache');
            $this->assertEquals($tache->accomplie, 'N');
        }
        public function testUpdateDBWithIDTest() {
            DB::table('taches')->where('id', 1)->update(
                [
                'categorie' => 'A Faire',
                'description' => 'Teste modif de la table tache',
                'accomplie' => 'O',
                ]
            );
            $tache = DB::table('taches')->where('id', 1)->first();
            $this->assertEquals($tache->expiration, '2017-08-31');
            $this->assertEquals($tache->categorie, 'A Faire');
            $this->assertEquals($tache->description, 'Teste modif de la table tache');
            $this->assertEquals($tache->accomplie, 'O');
        }
        public function testDeleteDBWithIDTest() {
            DB::table('taches')->where('id', '>', 1)->delete();
            $taches = DB::table('taches')->get();
            $this->assertEquals(count($taches), 1);
        }
        public function tearDown():void {
            Artisan::call('migrate:reset');
            parent::tearDown();
        }
}
   
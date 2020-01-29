<?php

use Illuminate\Database\Seeder;

class CommentaireTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('commentaires')->insert(array(
            array('user_id' => 1, 'contenu' => 'très bon sejour', 'etat' => 'valide',),
            array('user_id' => 2, 'contenu' => 'absence de vent mais le poulet est delicieux', 'etat' => 'valide'),
            array('user_id' => 3, 'contenu' => 'super maintenant il me manque juste le matos', 'etat' => 'valide'),
            array('user_id' => 4, 'contenu' => 'yolo ca dechire', 'etat' => 'valide'),
            array('user_id' => 2, 'contenu' => 'bernardo le coquillage', 'etat' => 'valide'),
            array('user_id' => 1, 'contenu' => 'bougnoule land', 'etat' => 'valide'),
            array('user_id' => 1, 'contenu' => 'très bon sejour', 'etat' => 'valide',),
            array('user_id' => 2, 'contenu' => 'absence de vent mais le poulet est delicieux', 'etat' => 'valide'),
            array('user_id' => 3, 'contenu' => 'super maintenant il me manque juste le matos', 'etat' => 'valide'),
            array('user_id' => 4, 'contenu' => 'yolo ca dechire', 'etat' => 'valide'),
            array('user_id' => 2, 'contenu' => 'bernardo le coquillage', 'etat' => 'attente'),
            array('user_id' => 1, 'contenu' => 'bougnoule land', 'etat' => 'attente'),



            array('user_id' => 1, 'contenu' => 'très bon sejour', 'etat' => 'valide',),






        ));
    }
}

## modification laravel


















## pour les roles en cles etrangeres 

## créer  table roles avec comme champs id et role et comme contenu id 1 admin et id 2 user
Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('role');

        });
        
   le down .... Schema::dropIfExists('roles'); 
   
## modifier la table user et mettre role_id a la place de role 

## dans le seeder mettre le role_id en integer

## cree la table role 
DB::table('roles')->insert(array(
            array('role' => 'Admin'),
            array('role' => 'User'),
        ));


## cree un model role et y ajouter 
public function user() {

        return $this->hasMany('App\User');
    }

    
## dans le model user y ajouter 


    public function role() {

        return $this->belongsTo('App\Role');
    }
    
## modifier le code en remplacant role en role_id et 'Admin' en 1 et 'User' en 2 
    

 if (Auth::guest() || Auth::user()->role != 'Admin') 
 en 
  if (Auth::guest() || Auth::user()->role_id != 1) {
  
  les dossier a changer sont :
  - le controller admin 
  - le fichier nav/login
  - le dashboard 
  - le tableau affichage utilisateur admin
  - ne pas oublier l'attribution des roles automatique a l'inscription dans le register et mettre 2 a la place de user
  
  
  
et voila les cles etrangeres sont defini 

a modifier apres le titre pro pour ne pas faire planté la production 2jours avant 



























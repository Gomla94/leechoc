<?php

use Hash as Hash;
use App\User;
use App\Model\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category;
        $category->name = 'caegory one';
        $category->image = 'categasaory one';
        $category->desc = 'category one vrulfghsifgusihufisdhiu sedf dsf sdgosfj gdfui dfh giufdhiguhdfuig hdfiughiudfhg iudfhg iudfuhgiudfhg iudhfiug hdfiughdfiughidfhguidf hgifdhugdiu';

        
        $category->save();

        $category2 = new Category;
        $category2->name = 'category two';
        $category2->image = 'category one';
        $category2->desc = 'catdsadsadasdegory one vfuojfofj ieworjoiesjfoisdj oisjio';

        $category2->save();

        $category3 = new Category;
        $category3->name = 'category three';
        $category3->image = 'category one';
        $category3->desc = 'category one vsfuivhsfiu sehudf iusddhdf isdhif hdsi fhuisdh';

        $category3->save();

    }
}

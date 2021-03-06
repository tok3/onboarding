<?php namespace Eq3w\Onboarding\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEq3wOnboardingMarketingMaterial9 extends Migration
{
    public function up()
    {
        Schema::table('eq3w_onboarding_marketing_material', function($table)
        {
            $table->string('companylogo_local_path', 255)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('eq3w_onboarding_marketing_material', function($table)
        {
            $table->string('companylogo_local_path', 255)->nullable(false)->change();
        });
    }
}

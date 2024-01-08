<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('client_intake_forms', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('company_or_organization')->nullable();
            $table->string('position')->nullable();
            $table->string('address')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('empty')->nullable();
            $table->text('subject_of_study')->nullable();
            $table->text('list_of_the_keywords_company_or_organization_or_brand_or_persona')->nullable();
            $table->text('list_of_the_hashtags_the_subject_of_the_study_typically_uses')->nullable();
            $table->text('research_sources_you_would_like_us_to_explore')->nullable();
            $table->text('besides_the_proposed_sources')->nullable();
            $table->text('specific_known_URL_or_groups_or_pages_in_social_media')->nullable();
            $table->text('url_addresses_of_accounts_related_subject_study_online_presence')->nullable();
            $table->text('service_delivery_formula_are_you_interested_in')->nullable();
            $table->text('service_delivery_formula_are_you_interested_in_2')->nullable();
            $table->text('specific_period')->nullable();
            $table->text('information_believe_important_for_successful_completion_study')->nullable();
            $table->text('social_Listening_analyses_you_would_like_to_be_included_in_your_study')->nullable();
            $table->text('social_Presence_analyses_you_would_like_to_be_included_in_your_study')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client_intake_forms');
    }
};

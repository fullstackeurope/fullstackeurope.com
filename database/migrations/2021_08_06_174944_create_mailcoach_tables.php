<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMailcoachTables extends Migration
{
    public function up()
    {
        Schema::create('mailcoach_email_lists', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->string('name');
            $table->string('campaigns_feed_enabled')->default(true);

            $table->string('default_from_email')->nullable();
            $table->string('default_from_name')->nullable();

            $table->string('default_reply_to_email')->nullable();
            $table->string('default_reply_to_name')->nullable();

            $table->boolean('allow_form_subscriptions')->default(false);

            $table->string('redirect_after_subscribed')->nullable();
            $table->string('redirect_after_already_subscribed')->nullable();
            $table->string('redirect_after_subscription_pending')->nullable();
            $table->string('redirect_after_unsubscribed')->nullable();

            $table->boolean('requires_confirmation')->default(false);
            $table->string('confirmation_mail_subject')->nullable();
            $table->text('confirmation_mail_content')->nullable();
            $table->string('confirmation_mailable_class')->nullable();

            $table->string('campaign_mailer')->nullable();
            $table->string('transactional_mailer')->nullable();

            $table->boolean('send_welcome_mail')->nullable();
            $table->string('welcome_mail_subject')->nullable();
            $table->text('welcome_mail_content')->nullable();
            $table->string('welcome_mailable_class')->nullable();
            $table->integer('welcome_mail_delay_in_minutes')->default(0);

            $table->string('report_recipients')->nullable();
            $table->boolean('report_campaign_sent')->default(false);
            $table->boolean('report_campaign_summary')->default(false);
            $table->boolean('report_email_list_summary')->default(false);

            $table->timestamp('email_list_summary_sent_at')->nullable();
            $table->text('allowed_form_extra_attributes')->nullable();
            $table->timestamps();
        });

        Schema::create('mailcoach_subscribers', function (Blueprint $table) {
            $table->id();
            $table
                ->foreignId('email_list_id')
                ->constrained('mailcoach_email_lists')
                ->cascadeOnDelete();

            $table->string('email');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->json('extra_attributes')->nullable();

            $table->uuid('uuid');

            $table->uuid('imported_via_import_uuid')->nullable();

            $table->timestamp('subscribed_at')->nullable();
            $table->timestamp('unsubscribed_at')->nullable();
            $table->nullableTimestamps();

            $table
                ->unique(['email_list_id', 'email']);

            $table->index([
                'email_list_id',
                'subscribed_at',
                'unsubscribed_at'
            ],
                'email_list_subscribed_index');

            $table->index(['email_list_id', 'created_at'], 'email_list_id_created_at');
        });

        Schema::create('mailcoach_segments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('all_positive_tags_required')->default(false);
            $table->boolean('all_negative_tags_required')->default(false);
            $table
                ->foreignId('email_list_id')
                ->constrained('mailcoach_email_lists')
                ->cascadeOnDelete();

            $table->timestamps();
        });

        Schema::create('mailcoach_campaigns', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->uuid('uuid');

            $table->string('from_email')->nullable();
            $table->string('from_name')->nullable();

            $table->string('reply_to_email')->nullable();
            $table->string('reply_to_name')->nullable();

            $table->string('subject')->nullable();

            $table
                ->foreignId('email_list_id')
                ->nullable()
                ->constrained('mailcoach_email_lists')
                ->nullOnDelete();

            $table->string('status');

            $table->longText('html')->nullable();
            $table->longText('structured_html')->nullable();
            $table->longText('email_html')->nullable();
            $table->longText('webview_html')->nullable();

            $table->string('mailable_class')->nullable();
            $table->json('mailable_arguments')->nullable();

            $table->boolean('track_opens')->default(false);
            $table->boolean('track_clicks')->default(false);
            $table->boolean('utm_tags')->default(false);

            $table->integer('sent_to_number_of_subscribers')->default(0);
            $table->text('segment_class')->nullable();

            $table
                ->foreignId('segment_id')
                ->nullable()
                ->constrained('mailcoach_segments')
                ->nullOnDelete();

            $table->string('segment_description')->default(0);

            $table->integer('open_count')->default(0);
            $table->integer('unique_open_count')->default(0);
            $table->integer('open_rate')->default(0);
            $table->integer('click_count')->default(0);
            $table->integer('unique_click_count')->default(0);
            $table->integer('click_rate')->default(0);
            $table->integer('unsubscribe_count')->default(0);
            $table->integer('unsubscribe_rate')->default(0);
            $table->integer('bounce_count')->default(0);
            $table->integer('bounce_rate')->default(0);

            $table->timestamp('sent_at')->nullable();
            $table->timestamp('statistics_calculated_at')->nullable();
            $table->timestamp('scheduled_at')->nullable();

            $table->string('send_batch_id')->nullable();
            $table->timestamp('all_jobs_added_to_batch_at')->nullable();

            $table->timestamp('last_modified_at')->nullable();

            $table->timestamp('summary_mail_sent_at')->nullable();

            $table->timestamps();
        });

        Schema::create('mailcoach_campaign_links', function (Blueprint $table) {
            $table->id();
            $table
                ->foreignId('campaign_id')
                ->constrained('mailcoach_campaigns')
                ->cascadeOnDelete();

            $table->string('url', 2048);
            $table->integer('click_count')->default(0);
            $table->integer('unique_click_count')->default(0);
            $table->nullableTimestamps();
        });

        Schema::create('mailcoach_transactional_mails', function (Blueprint $table) {
            $table->id();

            $table->text('subject');

            $table->json('from');
            $table->json('to');
            $table->json('cc')->nullable();
            $table->json('bcc')->nullable();
            $table->longText('body')->nullable();
            $table->longText('structured_html')->nullable();

            $table->boolean('track_opens')->default(false);
            $table->boolean('track_clicks')->default(false);

            $table->string('mailable_class');

            $table->timestamps();
        });

        Schema::create('mailcoach_automation_mails', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->uuid('uuid');

            $table->string('from_email')->nullable();
            $table->string('from_name')->nullable();

            $table->string('reply_to_email')->nullable();
            $table->string('reply_to_name')->nullable();

            $table->string('subject')->nullable();

            $table->longText('html')->nullable();
            $table->longText('structured_html')->nullable();
            $table->longText('email_html')->nullable();
            $table->longText('webview_html')->nullable();

            $table->string('mailable_class')->nullable();
            $table->json('mailable_arguments')->nullable();

            $table->boolean('track_opens')->default(false);
            $table->boolean('track_clicks')->default(false);
            $table->boolean('utm_tags')->default(false);

            $table->integer('sent_to_number_of_subscribers')->default(0);
            $table->integer('open_count')->default(0);
            $table->integer('unique_open_count')->default(0);
            $table->integer('open_rate')->default(0);
            $table->integer('click_count')->default(0);
            $table->integer('unique_click_count')->default(0);
            $table->integer('click_rate')->default(0);
            $table->integer('unsubscribe_count')->default(0);
            $table->integer('unsubscribe_rate')->default(0);
            $table->integer('bounce_count')->default(0);
            $table->integer('bounce_rate')->default(0);
            $table->timestamp('statistics_calculated_at')->nullable();

            $table->timestamp('last_modified_at')->nullable();
            $table->timestamps();
        });


        Schema::create('mailcoach_sends', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->string('transport_message_id')->nullable();

            $table
                ->foreignId('campaign_id')
                ->nullable()
                ->constrained('mailcoach_campaigns')
                ->cascadeOnDelete();

            $table
                ->foreignId('automation_mail_id')
                ->nullable()
                ->constrained('mailcoach_automation_mails')
                ->cascadeOnDelete();

            $table
                ->foreignId('transactional_mail_id')
                ->nullable()
                ->constrained('mailcoach_transactional_mails')
                ->cascadeOnDelete();

            $table
                ->foreignId('subscriber_id')
                ->nullable()
                ->constrained('mailcoach_subscribers')
                ->cascadeOnDelete();

            $table->timestamp('sent_at')->nullable();
            $table->timestamp('failed_at')->nullable();
            $table->text('failure_reason')->nullable();

            $table->timestamps();

            $table->unique('transport_message_id');
            $table->index('uuid');
            $table->index(['campaign_id', 'subscriber_id']);
            $table->index(['transactional_mail_id']);
        });

        Schema::create('mailcoach_campaign_clicks', function (Blueprint $table) {
            $table->id();

            $table
                ->foreignId('send_id')
                ->constrained('mailcoach_sends')
                ->cascadeOnDelete();

            $table
                ->foreignId('campaign_link_id')
                ->constrained('mailcoach_campaign_links')
                ->cascadeOnDelete();

            $table
                ->foreignId('subscriber_id')
                ->nullable()
                ->constrained('mailcoach_subscribers')
                ->cascadeOnDelete();

            $table->nullableTimestamps();
        });

        Schema::create('mailcoach_campaign_opens', function (Blueprint $table) {
            $table->id();

            $table
                ->foreignId('send_id')
                ->constrained('mailcoach_sends')
                ->cascadeOnDelete();

            $table
                ->foreignId('campaign_id')
                ->nullable()
                ->constrained('mailcoach_campaigns')
                ->cascadeOnDelete();

            $table
                ->foreignId('subscriber_id')
                ->nullable()
                ->constrained('mailcoach_subscribers')
                ->cascadeOnDelete();

            $table->nullableTimestamps();
        });

        Schema::create('mailcoach_campaign_unsubscribes', function (Blueprint $table) {
            $table->id();

            $table
                ->foreignId('campaign_id')
                ->constrained('mailcoach_campaigns')
                ->cascadeOnDelete();

            $table
                ->foreignId('subscriber_id')
                ->constrained('mailcoach_subscribers')
                ->cascadeOnDelete();

            $table->timestamps();
        });

        Schema::create('mailcoach_send_feedback_items', function (Blueprint $table) {
            $table->id();
            $table->string('type');

            $table
                ->foreignId('send_id')
                ->constrained('mailcoach_sends')
                ->cascadeOnDelete();

            $table->json('extra_attributes')->nullable();
            $table->timestamps();
        });

        Schema::create('mailcoach_templates', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('html');
            $table->longText('structured_html')->nullable();
            $table->timestamps();
        });

        Schema::create('mailcoach_subscriber_imports', function (Blueprint $table) {
            $table->id();
            $table->longText('subscribers_csv')->nullable();
            $table->uuid('uuid');
            $table->string('status');

            $table
                ->foreignId('email_list_id')
                ->nullable()
                ->constrained('mailcoach_email_lists')
                ->nullOnDelete();

            $table->boolean('subscribe_unsubscribed')->default(false);
            $table->boolean('unsubscribe_others')->default(false);
            $table->boolean('replace_tags')->default(false);
            $table->integer('imported_subscribers_count')->default(0);
            $table->integer('error_count')->default(0);
            $table->timestamps();
        });

        Schema::create('mailcoach_tags', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type')->default('default');

            $table
                ->foreignId('email_list_id')
                ->nullable()
                ->constrained('mailcoach_email_lists')
                ->nullOnDelete();

            $table->timestamps();
        });

        Schema::create('mailcoach_email_list_subscriber_tags', function (Blueprint $table) {
            $table->id();

            $table
                ->foreignId('subscriber_id')
                ->nullable()
                ->constrained('mailcoach_subscribers')
                ->nullOnDelete();

            $table
                ->foreignId('tag_id')
                ->nullable()
                ->constrained('mailcoach_tags')
                ->nullOnDelete();
        });

        Schema::create('mailcoach_email_list_allow_form_subscription_tags', function (Blueprint $table) {
            $table->id();

            $table
                ->foreignId('email_list_id')
                ->nullable()
                ->constrained('mailcoach_email_lists')
                ->index('tags_email_list_id')
                ->nullOnDelete();

            $table
                ->foreignId('tag_id')
                ->nullable()
                ->constrained('mailcoach_tags')
                ->index('tags_tag_id')
                ->nullOnDelete();
        });

        Schema::create('mailcoach_positive_segment_tags', function (Blueprint $table) {
            $table->id();

            $table
                ->foreignId('segment_id')
                ->nullable()
                ->constrained('mailcoach_segments')
                ->nullOnDelete();

            $table
                ->foreignId('tag_id')
                ->nullable()
                ->constrained('mailcoach_tags')
                ->nullOnDelete();
        });

        Schema::create('mailcoach_negative_segment_tags', function (Blueprint $table) {
            $table->id();

            $table
                ->foreignId('segment_id')
                ->nullable()
                ->constrained('mailcoach_segments')
                ->nullOnDelete();

            $table
                ->foreignId('tag_id')
                ->nullable()
                ->constrained('mailcoach_tags')
                ->nullOnDelete();
        });

        Schema::create('mailcoach_automations', function (Blueprint $table) {
            $table->id();

            $table
                ->foreignId('email_list_id')
                ->nullable()
                ->constrained('mailcoach_email_lists')
                ->cascadeOnDelete();

            $table->uuid('uuid');
            $table->string('name')->nullable();
            $table->string('interval')->nullable();
            $table->string('status');

            $table->text('segment_class')->nullable();

            $table
                ->foreignId('segment_id')
                ->nullable()
                ->constrained('mailcoach_segments')
                ->nullOnDelete();

            $table->string('segment_description')->default(0);

            $table->timestamp('run_at')->nullable();
            $table->timestamp('last_ran_at')->nullable();

            $table->timestamps();
        });

        Schema::create('mailcoach_automation_actions', function (Blueprint $table) {
            $table->id();

            $table
                ->foreignId('automation_id')
                ->nullable()
                ->constrained('mailcoach_automations')
                ->cascadeOnDelete();

            $table
                ->foreignId('parent_id')
                ->nullable()
                ->constrained('mailcoach_automation_actions')
                ->cascadeOnDelete();

            $table->uuid('uuid');
            $table->string('key')->nullable();
            $table->text('action')->nullable();
            $table->integer('order');
            $table->timestamps();
        });

        Schema::create('mailcoach_automation_triggers', function (Blueprint $table) {
            $table->id();

            $table
                ->foreignId('automation_id')
                ->nullable()
                ->constrained('mailcoach_automations')
                ->cascadeOnDelete();

            $table->uuid('uuid');
            $table->text('trigger')->nullable();
            $table->timestamps();
        });

        Schema::create('mailcoach_automation_action_subscriber', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('action_id');
            $table->unsignedBigInteger('subscriber_id');
            $table->timestamp('run_at')->nullable();
            $table->timestamp('completed_at')->nullable();
            $table->timestamp('halted_at')->nullable();
            $table->timestamps();

            $table
                ->foreign('action_id')
                ->references('id')->on('mailcoach_automation_actions')
                ->onDelete('cascade');

            $table
                ->foreign('subscriber_id')
                ->references('id')->on('mailcoach_subscribers')
                ->onDelete('cascade');
        });

        Schema::create('mailcoach_automation_mail_opens', function (Blueprint $table) {
            $table->id();

            $table->foreignId('send_id')
                ->constrained('mailcoach_sends')
                ->cascadeOnDelete();

            $table
                ->foreignId('subscriber_id')
                ->nullable()
                ->constrained('mailcoach_subscribers')
                ->cascadeOnDelete();

            $table
                ->foreignId('automation_mail_id')
                ->nullable()
                ->constrained('mailcoach_automation_mails')
                ->cascadeOnDelete();

            $table->timestamps();
        });

        Schema::create('mailcoach_automation_mail_links', function (Blueprint $table) {
            $table->id();
            $table
                ->foreignId('automation_mail_id')
                ->constrained('mailcoach_automation_mails')
                ->cascadeOnDelete();

            $table->string('url', 2048);
            $table->integer('click_count')->default(0);
            $table->integer('unique_click_count')->default(0);
            $table->nullableTimestamps();
        });

        Schema::create('mailcoach_automation_mail_clicks', function (Blueprint $table) {
            $table->id();

            $table->foreignId('send_id')
                ->constrained('mailcoach_sends')
                ->cascadeOnDelete();

            $table->foreignId('automation_mail_link_id')
                ->constrained('mailcoach_automation_mail_links')
                ->cascadeOnDelete();

            $table
                ->foreignId('subscriber_id')
                ->nullable()
                ->constrained('mailcoach_subscribers')
                ->cascadeOnDelete();

            $table->timestamps();
        });

        Schema::create('mailcoach_automation_mail_unsubscribes', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('automation_mail_id');

            $table
                ->foreign('automation_mail_id', 'auto_unsub_automation_mail_id')
                ->references('id')->on('mailcoach_automation_mails')
                ->cascadeOnDelete();

            $table
                ->foreignId('subscriber_id')
                ->constrained('mailcoach_subscribers')
                ->cascadeOnDelete();

            $table->timestamps();
        });

        Schema::create('mailcoach_transactional_mail_opens', function (Blueprint $table) {
            $table->id();

            $table
                ->foreignId('send_id')
                ->constrained('mailcoach_sends')
                ->cascadeOnDelete();

            $table->timestamps();
        });

        Schema::create('mailcoach_transactional_mail_clicks', function (Blueprint $table) {
            $table->id();

            $table
                ->foreignId('send_id')
                ->constrained('mailcoach_sends')
                ->cascadeOnDelete();

            $table->longText('url');

            $table->timestamps();
        });

        Schema::create('mailcoach_transactional_mail_templates', function (Blueprint $table) {
            $table->id();
            $table->json('cc')->nullable();
            $table->string('label')->nullable();
            $table->string('name');
            $table->string('subject')->nullable();
            $table->text('from')->nullable();
            $table->json('to')->nullable();
            $table->json('bcc')->nullable();
            $table->longText('body')->nullable();
            $table->longText('structured_html')->nullable();
            $table->string('type'); // html, blade, markdown
            $table->json('replacers')->nullable();
            $table->boolean('store_mail')->default(false);
            $table->boolean('track_opens')->default(false);
            $table->boolean('track_clicks')->default(false);
            $table->text('test_using_mailable')->nullable();
            $table->timestamps();
        });
    }
}

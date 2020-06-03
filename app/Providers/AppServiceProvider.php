<?php

namespace App\Providers;

use App\Markdown;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use League\CommonMark\GithubFlavoredMarkdownConverter;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(Markdown::class, function () {
            return new Markdown(new GithubFlavoredMarkdownConverter([
                'allow_unsafe_links' => false,
            ]));
        });
    }

    public function boot(): void
    {
        Blade::directive('markdown', function (string $expression) {
            $class = Markdown::class;

            return "<?php echo app({$class}::class)->toHtml($expression); ?>";
        });
    }
}

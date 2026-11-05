<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_storefront_home_and_all_migrated_pages_render(): void
    {
        $home = $this->get('/')
            ->assertOk()
            ->assertSee('Welcome you the medicine store!')
            ->assertSee('<div id="preloader" aria-hidden="true">', false)
            ->assertSee('<header class="main-header"', false)
            ->assertSee('assets/css/custom-scrollbar.css', false)
            ->assertDontSee('assets/css/custom-cursor.css', false)
            ->assertSee('assets/css/custom-header.css', false)
            ->assertSee('assets/css/custom-footer.css', false)
            ->assertSee('assets/css/custom-store-sections.css', false)
            ->assertSee('assets/css/custom-home-slider.css', false)
            ->assertSee('assets/js/custom-scrollbar.js', false)
            ->assertDontSee('assets/js/custom-cursor.js', false)
            ->assertSee('href="/wishlist"', false)
            ->assertDontSee('href="/compare"', false)
            ->assertDontSee('Compare Page')
            ->assertDontSee('Compare (0)')
            ->assertDontSee('Add to compare')
            ->assertSee('footer-area', false);

        $this->assertSame(1, substr_count($home->getContent(), '<header class="main-header"'));

        foreach (glob(resource_path('views/store/*.blade.php')) as $view) {
            $page = basename($view, '.blade.php');

            if ($page === 'index') {
                continue;
            }

            $response = $this->get("/{$page}")
                ->assertOk()
                ->assertSee('<div id="preloader" aria-hidden="true">', false)
                ->assertSee('assets/js/custom-scrollbar.js', false)
                ->assertDontSee('assets/js/custom-cursor.js', false)
                ->assertSee('assets/css/custom-footer.css', false)
                ->assertSee('assets/css/custom-store-sections.css', false)
                ->assertSee('main-header', false)
                ->assertSee('<li><a href="/">Home</a></li>', false)
                ->assertSee('<li><a href="/"><span class="menu-text">Home</span></a></li>', false)
                ->assertDontSee('Home Organic')
                ->assertDontSee('Home Medical')
                ->assertDontSee('href="/compare"', false)
                ->assertDontSee('Compare Page')
                ->assertDontSee('Compare (0)')
                ->assertDontSee('Add to compare')
                ->assertDontSee('href="/index-2"', false);

            $this->assertSame(1, substr_count($response->getContent(), '<header class="main-header"'), "Expected one shared header on /{$page}");
            $response->assertSee('footer-area', false);
        }
    }

    public function test_html_urls_redirect_to_extensionless_canonical_urls(): void
    {
        $this->get('/shop-4-column.html')
            ->assertRedirect('/shop-4-column')
            ->assertStatus(301);

        $this->get('/index.html')
            ->assertRedirect('/')
            ->assertStatus(301);
    }

    public function test_admin_dashboard_renders_and_links_to_storefront(): void
    {
        $this->get('/admin')
            ->assertOk()
            ->assertSee('Store overview')
            ->assertSee('Recent orders')
            ->assertSee('Inventory alerts')
            ->assertSee('href="/"', false);
    }

    public function test_unknown_storefront_pages_return_not_found(): void
    {
        $this->get('/does-not-exist.html')->assertNotFound();
        $this->get('/does-not-exist')->assertNotFound();
    }

    public function test_compare_feature_is_removed(): void
    {
        $this->assertFileDoesNotExist(resource_path('views/store/compare.blade.php'));
        $this->get('/compare')->assertNotFound();
        $this->get('/compare.html')->assertNotFound();
    }

    public function test_alternate_homepage_demo_pages_are_removed(): void
    {
        foreach (range(2, 21) as $page) {
            $this->assertFileDoesNotExist(resource_path("views/store/index-{$page}.blade.php"));
            $this->get("/index-{$page}")->assertNotFound();
            $this->get("/index-{$page}.html")->assertNotFound();
        }

        $this->get('/')->assertOk();
        $this->get('/index.html')->assertRedirect('/');
    }

    public function test_all_storefront_views_include_the_shared_preloader(): void
    {
        $views = glob(resource_path('views/store/*.blade.php'));

        $this->assertNotFalse($views);
        $this->assertSame(
            count($views),
            count(array_filter($views, fn (string $view): bool => str_contains(
                file_get_contents($view),
                "@include('Layout.Preloaders.preloader')",
            ))),
        );
    }
}

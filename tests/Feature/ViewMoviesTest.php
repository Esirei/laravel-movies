<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Http;
use Livewire\Livewire;
use Tests\TestCase;

class ViewMoviesTest extends TestCase
{
    public function testTheIndexPageShows()
    {
        $popularMovies = $this->getTestJson('popular-movies.json');
        $nowPlaying = $this->getTestJson('now-playing.json');
        $genres = $this->getTestJson('genres.json');

        Http::fake([
            'https://api.themoviedb.org/3/movie/popular' => Http::response($popularMovies, 200),
            'https://api.themoviedb.org/3/movie/now_playing' => Http::response($nowPlaying, 200),
            'https://api.themoviedb.org/3/genre/movie/list' => Http::response($genres, 200),
        ]);

        $response = $this->get(route('movies.index'));

        $response->assertSuccessful();
        $response->assertSee('Popular Movies');
        $response->assertSeeText('Master and Commander: The Far Side of the World');
        $response->assertSeeText('Now Playing');
        $response->assertSeeText('The Matrix');
    }

    public function testLivewireSearchDropdownWorks()
    {
        Http::fake([
            'https://api.themoviedb.org/3/search/movie?query=onword' => Http::response($this->getTestJson('now-playing.json'))
        ]);

        $livewire = Livewire::test('search-dropdown');
        $livewire->assertDontSee('onword');
        $livewire->set('search', 'onword');
//        $livewire->assertSee('onword');
//        $livewire->assertSee('Onword');
    }

    private function getTestJson($file)
    {
        return json_decode($this->getTestFile($file), true);
    }

    private function getTestFile($file)
    {

        return file_get_contents(storage_path("test_data/$file"));
    }
}

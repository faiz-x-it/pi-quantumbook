<?php

namespace App\Providers;

use App\Book;
use App\Category;
//use App\Http\Controllers\tfidf;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        /*
         * Load Categories in sidebar views
         */
        view()->composer('layouts.includes.side-bar', function ($view){

            $categories = Category::with('books')->orderBy('name', 'asc')->get();
            return $view->with('categories', $categories);
        });

        /*
         * Load Recent books in  sidebar views
         */
        view()->composer('layouts.includes.side-bar', function ($view){
            $recentBooks = Book::latestFirst()->take(4)->get();
            return $view->with('recent_books', $recentBooks);
        });

//        
        view()->composer('layouts.includes.side-bar', function ($view) {
            $selectedCategory = request()->input('category'); // Mendapatkan kategori yang dipilih dari permintaan HTTP
            $recBooks = Book::latestFirst()->get();
        
            // Jika kategori dipilih, lakukan filtrasi berdasarkan kategori
            if ($selectedCategory) {
                $filteredBooks = $recBooks->filter(function ($book) use ($selectedCategory) {
                    return $book->category == $selectedCategory;
                });
            } else {
                // Jika kategori tidak dipilih, gunakan item terbaru sebagai default
                $filteredBooks = $recBooks;
            }
            
            return $view->with('rec_books', $filteredBooks);
        });
        
        


    }
}

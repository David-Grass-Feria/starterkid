<?php

namespace GrassFeria\Starterkid\Providers;




use Illuminate\Support\Facades\Route;
use Illuminate\Database\QueryException;
use Illuminate\Support\ServiceProvider;


class NavlinkServiceProvider extends ServiceProvider
{
   
    public function boot()
    {
        $this->loadNavLinks();
        
    }

    protected function loadNavLinks()
    {
        $navLinks = [];
       

        // Pfad zu den Package Configs anpassen
        $configPaths = glob(base_path('config/starterkid/*/*/navlink.php'));
        //dd($configPaths);
        
        
       
        
        foreach ($configPaths as $path) {
            $links = require $path;
            
            
            $navLinks = array_merge($navLinks, $links);
            
        }
        

        view()->share('navLinks', $navLinks);
       
    }
}

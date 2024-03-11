<?php

namespace GrassFeria\Starterkid\Console\Commands;

use Illuminate\Support\Str;
use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\File;

class MakeResourceCommand extends Command
{


    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'starterkid:make-plugin {vendor} {plugin} {model}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate new crud files';


    /**
     * Execute the console command.
     */
    public function handle()
    {


        $this->createPluginFolder();
        $this->createSrcFolder();
        $this->createProvidersFolder();
        $this->createLivewireFolder();
        $this->createPolicyFolder();
        $this->createMigrationFolder();
        $this->createRoutesFolder();
        $this->createModelsFolder();
        $this->createResourcesFolder();
        $this->createConfigFolder();
        $this->createLangFolder();
        $this->createControllersFolder();
        $this->createMiddlewareFolder();
        $this->createSeedersFolder();
        $this->createFactoriesFolder();
        $this->createCommandsFolder();
        $this->createStubsFolder();

        $this->createAppServiceProviderFile();
        $this->createAuthServiceProviderFile();
        $this->createRouteServiceProviderFile();
        $this->createRouteFile();
        $this->createModelFile();
        $this->createLivewireIndexFile();
        $this->createLivewireIndexBladeFile();
        $this->createLivewireCreateFile();
        $this->createLivewireCreateBladeFile();
        $this->createLivewireEditFile();
        $this->createLivewireEditBladeFile();
        $this->createPolicyFile();
        $this->createMigrationFile();
        $this->createNavlinkFile();
        $this->createLicenseFile();
        $this->createReadmeFile();
        $this->createDeFile();
        $this->createSeederFile();
        $this->createFactoryFile();
        $this->createCommandFile();
        $this->createComposerJsonFile();
    }

    private function createAppServiceProviderFile()
    {
        $templatePath = $this->getStubsPath().'/AppServiceProvider.stub';
        $destinationPath = $this->getDestinationPath('/src/Providers/AppServiceProvider.php');
        $this->generateFile($templatePath,$destinationPath);
    }

    private function createAuthServiceProviderFile()
    {
        $templatePath = $this->getStubsPath().'/AuthServiceProvider.stub';
        $destinationPath = $this->getDestinationPath('/src/Providers/AuthServiceProvider.php');
        $this->generateFile($templatePath,$destinationPath);
    }

    private function createRouteServiceProviderFile()
    {
        $templatePath = $this->getStubsPath().'/RouteServiceProvider.stub';
        $destinationPath = $this->getDestinationPath('/src/Providers/RouteServiceProvider.php');
        $this->generateFile($templatePath,$destinationPath);
    }

    private function createRouteFile()
    {
        $templatePath = $this->getStubsPath().'/web.stub';
        $destinationPath = $this->getDestinationPath('/routes/web.php');
        $this->generateFile($templatePath,$destinationPath);
    }

    private function createModelFile()
    {
        $templatePath = $this->getStubsPath().'/model.stub';
        $destinationPath = $this->getDestinationPath('/src/Models/'.Str::pluralStudly($this->argument('model'), 1) . '.php');
        $this->generateFile($templatePath,$destinationPath);
    }

    private function createLivewireIndexFile()
    {
        $templatePath = $this->getStubsPath().'/LivewireIndex.stub';
        $destinationPath = $this->getDestinationPath('/src/Livewire/'.Str::pluralStudly($this->argument('model'), 1) . '/' .  Str::pluralStudly($this->argument('model'), 1) . 'Index' . '.php');
        $this->generateFile($templatePath,$destinationPath);
    }

    private function createLivewireIndexBladeFile()
    {
        $templatePath = $this->getStubsPath().'/livewire-index.stub';
        $destinationPath = $this->getDestinationPath('/resources/views/livewire/'.$this->kebab($this->argument('model')) . '/' .  $this->kebab($this->argument('model')) . '-index.blade' . '.php');
        $this->generateFile($templatePath,$destinationPath);
    }


    private function createLivewireCreateFile()
    {
        $templatePath = $this->getStubsPath().'/LivewireCreate.stub';
        $destinationPath = $this->getDestinationPath('/src/Livewire/'.Str::pluralStudly($this->argument('model'), 1) . '/' .  Str::pluralStudly($this->argument('model'), 1) . 'Create' . '.php');
        $this->generateFile($templatePath,$destinationPath);
    }

    private function createLivewireCreateBladeFile()
    {
        $templatePath = $this->getStubsPath().'/livewire-create.stub';
        $destinationPath = $this->getDestinationPath('/resources/views/livewire/'.$this->kebab($this->argument('model')) . '/' .  $this->kebab($this->argument('model')) . '-create.blade' . '.php');
        $this->generateFile($templatePath,$destinationPath);
    }

    private function createLivewireEditFile()
    {
        $templatePath = $this->getStubsPath().'/LivewireEdit.stub';
        $destinationPath = $this->getDestinationPath('/src/Livewire/'.Str::pluralStudly($this->argument('model'), 1) . '/' .  Str::pluralStudly($this->argument('model'), 1) . 'Edit' . '.php');
        $this->generateFile($templatePath,$destinationPath);
    }

    private function createLivewireEditBladeFile()
    {
        $templatePath = $this->getStubsPath().'/livewire-edit.stub';
        $destinationPath = $this->getDestinationPath('/resources/views/livewire/'.$this->kebab($this->argument('model')) . '/' .  $this->kebab($this->argument('model')) . '-edit.blade' . '.php');
        $this->generateFile($templatePath,$destinationPath);
    }

    private function createPolicyFile()
    {
        $templatePath = $this->getStubsPath().'/Policy.stub';
        $destinationPath = $this->getDestinationPath('/src/Policies/'.Str::pluralStudly($this->argument('model'), 1) . 'Policy' . '.php');
        $this->generateFile($templatePath,$destinationPath);
    }

    private function createMigrationFile()
    {
        $templatePath = $this->getStubsPath().'/Migration.stub';
        $destinationPath = $this->getDestinationPath('/database/migrations/'.now()->format('Y') . '_' . now()->format('m') . '_' . now()->format('d') . '_' . now()->format('His') . '_' . 'create' . '_' . $this->convertArgumentToPluralStrtolowerSnake() . '_' . 'table' . '.php');
        $this->generateFile($templatePath,$destinationPath);
    }

    private function createNavlinkFile()
    {
        $templatePath = $this->getStubsPath().'/navlink.stub';
        $destinationPath = $this->getDestinationPath('/config/navlink.php');
        $this->generateFile($templatePath,$destinationPath);
    }


    private function createLicenseFile()
    {
        $templatePath = $this->getStubsPath().'/LICENSE.md';
        $destinationPath = $this->getDestinationPath('/LICENSE.md');
        $this->generateFile($templatePath,$destinationPath);
    }

    private function createReadmeFile()
    {
        $templatePath = $this->getStubsPath().'/README.md';
        $destinationPath = $this->getDestinationPath('/README.md');
        $this->generateFile($templatePath,$destinationPath);
    }

    private function createDeFile()
    {
        $templatePath = $this->getStubsPath().'/de.stub';
        $destinationPath = $this->getDestinationPath('/lang/de.json');
        $this->generateFile($templatePath,$destinationPath);
    }

    private function createSeederFile()
    {
        $templatePath = $this->getStubsPath().'/Seeder.stub';
        $destinationPath = $this->getDestinationPath('/database/seeders/'.Str::pluralStudly($this->argument('model'), 1) . 'Seeder' . '.php');
        $this->generateFile($templatePath,$destinationPath);
    }

    private function createFactoryFile()
    {
        $templatePath = $this->getStubsPath().'/Factory.stub';
        $destinationPath = $this->getDestinationPath('/database/factories/'.Str::pluralStudly($this->argument('model'), 1) . 'Factory' . '.php');
        $this->generateFile($templatePath,$destinationPath);
    }

    private function createCommandFile()
    {
        $templatePath = $this->getStubsPath().'/Command.stub';
        $destinationPath = $this->getDestinationPath('/src/Console/Commands/'.'Install'.$this->argument('plugin') . 'Command' . '.php');
        $this->generateFile($templatePath,$destinationPath);
    }

    private function createComposerJsonFile()
    {
        $templatePath = $this->getStubsPath().'/composer-json.stub';
        $destinationPath = $this->getDestinationPath('/composer.json');
        $this->generateFile($templatePath,$destinationPath);
    }

    private function generateFile($templatePath,$destinationPath)
    {
        $content = $this->getTemplateContent($templatePath);
        $content = $this->replaceTemplatePlaceholders($content, $this->replacements());
        $this->writeFile($destinationPath, $content);
    }

   


    private function replacements()
    {
        return 
        
        $replacements = [
            '{{ pluralStrtolower }}' => $this->convertArgumentToPluralStrtolower(),
            '{{ pluralUcfirst }}' => $this->convertArgumentToPluralUcfirst(),
            '{{ singularUcfirst }}' => $this->convertArgumentToSingularUcfirst(),
            '{{ singularStrtolower }}' => $this->convertArgumentToSingularStrtolower(),
            '{{ singularStrtolowerKebab }}' => $this->kebab($this->argument('model')),
            '{{ vendor }}' => $this->argument('vendor'),
            '{{ plugin }}' => $this->argument('plugin'),
            '{{ pluginStrToLower }}' => $this->convertPluginToSingularStrtolower(),
            '{{ pluralStrtolowerSnake }}' => $this->convertArgumentToPluralStrtolowerSnake(),
            '{{ pluginKebab }}'           => $this->convertPluginToSingularStrtolower(),
            '{{ vendorKebab }}'           => $this->convertVendorToSingularStrtolower(),
            '{{ thumbVendor }}'           => $this->splitCamelCase($this->argument('vendor')),
            '{{ thumbPlugin }}'           => $this->splitCamelCase($this->argument('plugin')),
        ];
    }
    

    private function getTemplateContent($path)
    {
        $file = new Filesystem();
        return $file->get($path);
    }

    private function replaceTemplatePlaceholders($content, $replacements)
    {
        return str_replace(array_keys($replacements), array_values($replacements), $content);
    }

    private function writeFile($path, $content)
    {
        $file = new Filesystem();
        if (!$file->exists($path)) {
            $file->put($path, $content, true);
        }
    }

    private function getDestinationPath($path)
    {
        return base_path('plugins' . '/'. $this->convertVendorToSingularStrtolower($this->argument('vendor')). '/' . $this->convertPluginToSingularStrtolower($this->argument('plugin')) . $path);
    }

    private function getStubsPath()
    {
        return __DIR__.'/../Stubs';
    }
    

    private function convertArgumentToPluralStrtolower()
    {
        //{{ blogposts }}
        $pluralStrtolower = strtolower(Str::plural($this->argument('model')));
        return $pluralStrtolower;
    }

    private function convertArgumentToPluralUcfirst()
    {
        //{{ Blogposts }}
        $pluralUcfirst = ucfirst(Str::plural($this->argument('model')));
        return $pluralUcfirst;
    }

    private function convertArgumentToPluralStrtolowerSnake()
    {
        //{{ blog_posts }}
        $pluralStrtolowerSnake = strtolower(Str::plural(Str::of($this->argument('model'))->snake()));
        return $pluralStrtolowerSnake;
    }

    private function convertArgumentToSingularUcfirst()
    {
        //{{ BlogPost }}
        $singularUcfirst = ucfirst(Str::plural($this->argument('model'), 1));
        return $singularUcfirst;
    }

    private function convertArgumentToSingularStrtolower()
    {
        //{{ blogpost }}
        $singularStrtolower = strtolower(Str::plural($this->argument('model'), 1));
        return $singularStrtolower;
    }

    private function convertPluginToSingularStrtolower()
    {
        //{{ plugin-name }}
        $plugin = $this->kebab($this->argument('plugin'));
        return $plugin;
    }

    private function convertVendorToSingularStrtolower()
    {
        //{{ vendor-name }}
        $vendor = $this->kebab($this->argument('vendor'));
        return $vendor;
    }

    private function splitCamelCase($value) {
        $result = preg_replace('/(?<=\\w)(?=[A-Z])/', " $1", $value);
        return $result;
    }

    private function kebab($value)
    {
        //{{ blog-post }}
        $kebab = Str::of($value)->kebab();
        return $kebab;
    }



    

    private function createPluginFolder()
    {
        $destinationPath = $this->getDestinationPath('/');
        if (!File::isDirectory($destinationPath)) {
            File::makeDirectory($destinationPath, 0755, true, false);
        }
    }

    private function createSrcFolder()
    {
        $destinationPath = $this->getDestinationPath('/src');
        if (!File::isDirectory($destinationPath)) {
            File::makeDirectory($destinationPath, 0755, true, false);
        }
    }

    private function createProvidersFolder()
    {
        $destinationPath = $this->getDestinationPath('/src/Providers');
        if (!File::isDirectory($destinationPath)) {
            File::makeDirectory($destinationPath, 0755, true, false);
        }
    }

    

    private function createLivewireFolder()
    {
        
        $destinationPath = $this->getDestinationPath('/src/Livewire' . '/' . Str::pluralStudly($this->argument('model'), 1));
        if (!File::isDirectory($destinationPath)) {
            File::makeDirectory($destinationPath, 0755, true, false);
        }
    }

    private function createPolicyFolder()
    {
        $destinationPath = $this->getDestinationPath('/src/Policies');
        if (!File::isDirectory($destinationPath)) {
            File::makeDirectory($destinationPath, 0755, true, false);
        }
    }

    private function createMigrationFolder()
    {
        $destinationPath = $this->getDestinationPath('/database/migrations');
        if (!File::isDirectory($destinationPath)) {
            File::makeDirectory($destinationPath, 0755, true, false);
        }
    }

    private function createRoutesFolder()
    {
        $destinationPath = $this->getDestinationPath('/routes');
        if (!File::isDirectory($destinationPath)) {
            File::makeDirectory($destinationPath, 0755, true, false);
        }
    }

    private function createModelsFolder()
    {
        $destinationPath = $this->getDestinationPath('/src/Models');
        if (!File::isDirectory($destinationPath)) {
            File::makeDirectory($destinationPath, 0755, true, false);
        }
    }

    private function createResourcesFolder()
    {
        
        $destinationPath = $this->getDestinationPath('/resources/views/livewire/' . $this->kebab($this->argument('model')));
        if (!File::isDirectory($destinationPath)) {
            File::makeDirectory($destinationPath, 0755, true, false);
        }
    }

    private function createConfigFolder()
    {
        $destinationPath = $this->getDestinationPath('/config');
        if (!File::isDirectory($destinationPath)) {
            File::makeDirectory($destinationPath, 0755, true, false);
        }
    }

    private function createLangFolder()
    {
        $destinationPath = $this->getDestinationPath('/lang');
        if (!File::isDirectory($destinationPath)) {
            File::makeDirectory($destinationPath, 0755, true, false);
        }
    }


    private function createControllersFolder()
    {
        $destinationPath = $this->getDestinationPath('/src/Http/Controllers');
        if (!File::isDirectory($destinationPath)) {
            File::makeDirectory($destinationPath, 0755, true, false);
        }
    }

    private function createMiddlewareFolder()
    {
        $destinationPath = $this->getDestinationPath('/src/Http/Middleware');
        if (!File::isDirectory($destinationPath)) {
            File::makeDirectory($destinationPath, 0755, true, false);
        }
    }

    private function createSeedersFolder()
    {
        $destinationPath = $this->getDestinationPath('/database/seeders');
        if (!File::isDirectory($destinationPath)) {
            File::makeDirectory($destinationPath, 0755, true, false);
        }
    }

    private function createFactoriesFolder()
    {
        $destinationPath = $this->getDestinationPath('/database/factories');
        if (!File::isDirectory($destinationPath)) {
            File::makeDirectory($destinationPath, 0755, true, false);
        }
    }

    private function createCommandsFolder()
    {
        $destinationPath = $this->getDestinationPath('/src/Console/Commands');
        if (!File::isDirectory($destinationPath)) {
            File::makeDirectory($destinationPath, 0755, true, false);
        }
    }

    private function createStubsFolder()
    {
        $destinationPath = $this->getDestinationPath('/src/stubs');
        if (!File::isDirectory($destinationPath)) {
            File::makeDirectory($destinationPath, 0755, true, false);
        }
    }
}
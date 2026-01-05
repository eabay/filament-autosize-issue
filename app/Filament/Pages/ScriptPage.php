<?php

namespace App\Filament\Pages;

use Filament\Forms;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Pages\Page;
use Filament\Schemas\Schema;

class ScriptPage extends Page implements HasForms
{
    use Forms\Concerns\InteractsWithForms;

    protected static string $routeBaseName = 'filament.pages.script';
    protected static ?string $slug = '/';

    protected string $view = 'filament.pages.script-page';

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Textarea::make('text1')
                    ->rows(10)
                    ->autosize(),

                Textarea::make('text2')
                    ->rows(10),
            ]);
    }
}
